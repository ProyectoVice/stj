<?php
//En realidad es proyectos Escuela, pero me dió flojera cambiar el nombre a tdos los archivos; Si se cambio en las vistas.
namespace App\Http\Controllers\modulos\rsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RsuProyecto;
use App\RsuEje;
use App\RsuLineamiento;
use App\RsuLineamientoProyecto;
use App\RsuParticipante;
use App\RsuEvidencias;
use App\RsuCalendario;
use App\RsuComentario;
use App\Docente;
use App\Estudiante;
use Carbon\Carbon;
use Auth;
use App\User;
use App\RolUser;
use Input;
use Illuminate\Support\Facades\Storage;

use Softon\SweetAlert\Facades\SWAL;  
use DB;

class ProyectosFacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('docente');
        $this->middleware('drsu-f');
    }

    public function index()
    {
      $escuela=Docente::find(Auth::user()->id)->escuela;

      return view('modulos.rsu.proyectos_facultad.index',compact('escuela'));
    }
    public function datatables()
    {
        $escuela=Docente::find(Auth::user()->id)->escuela->id;
        $proyecto=RsuProyecto::distinct()->join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                          // ->join('users AS u','u.id','=','p.user_id')
                           ->join('docentes AS d','d.user_id','=','p.user_id')
                           ->join('dependencias  AS e','e.id','=','d.escuela_id')
                           ->where('e.id','=',$escuela)
                           ->select('rsu_proyectos.*')->get();
        
        return datatables()->of($proyecto)->toJson();
    }
    
    public function verificar_escuela($id,$escuela)
    {
      //return 'id: '.$id.' <br> escuela: '.$escuela; 
      $proyecto=RsuProyecto::join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                          // ->join('users AS u','u.id','=','p.user_id')
                           ->join('docentes AS d','d.user_id','=','p.user_id')
                           //->join('escuelas AS e','e.id','=','d.escuela_id')
                           ->join('dependencias  AS e','e.id','=','d.escuela_id')
                           ->where('e.id','=',$escuela->id)
                           ->where('rsu_proyectos.id','=',$id)
                           ->select('rsu_proyectos.*')->first();
         if($proyecto){
           return $proyecto;
         }else{
            return false;
         }
    }
    
    public function ver_detalle($id){
        $escuela=Docente::find(Auth::user()->id)->escuela;
        $proyecto=$this->verificar_escuela($id,$escuela);
         if(!$proyecto){
          return back()->with('rojo','Ud. no tiene permiso para acceder a esta vista');
         }
         $equipo=$this->equipo($id); //$tipo=$this->tipo_responsabilidad();
        return view('modulos.rsu.proyectos_facultad.ver_detalles',compact('proyecto','escuela','equipo'));
    }
    public function equipo($id){
       $docentes=RsuParticipante::join('users','users.id','=','rsu_participantes.user_id')
               ->join('rsu_responsabilidads AS r','r.id','=','rsu_participantes.rsu_responsabilidad_id')
               ->join('docentes AS doc','doc.user_id','=','users.id')
               ->join('dependencias  AS e','e.id','=','doc.escuela_id')
               ->where('rsu_participantes.rsu_proyecto_id',$id)
               ->join('rol_users AS ru','users.id','=','ru.user_id')
               ->where('ru.rol_id','3')
               ->where('ru.estado','1')
               ->where('rsu_participantes.rsu_responsabilidad_id','<>',3)
               ->select(DB::raw('CONCAT(users.apellido_paterno," ",users.apellido_materno,", ", users.nombres) AS nombres'), 'users.id AS id_user','users.dni AS dni', 'r.rsu_responsabilidad AS tipo', 'r.id AS id_responsabilidad','e.dependencia AS escuela', 'rsu_participantes.id AS id')->get();

        $estudiantes=RsuParticipante::join('users','users.id','=','rsu_participantes.user_id')
               ->join('rsu_responsabilidads AS r','r.id','=','rsu_participantes.rsu_responsabilidad_id')
               ->join('estudiantes AS doc','doc.user_id','=','users.id')
               //->join('escuelas','escuelas.id','=','doc.escuela_id')
               ->join('dependencias  AS e','e.id','=','doc.escuela_id')
               ->where('rsu_participantes.rsu_proyecto_id',$id)
               ->where('rsu_participantes.rsu_responsabilidad_id','=',3)
               ->select(DB::raw('CONCAT(users.apellido_paterno," ",users.apellido_materno,", ", users.nombres) AS nombres'), 'users.id AS id_user','users.dni AS dni', 'r.rsu_responsabilidad AS tipo', 'r.id AS id_responsabilidad','e.dependencia AS escuela', 'rsu_participantes.id AS id')->get();

        $equipo=array();
        //Fusionamos los controladores
        foreach ($docentes as $d) {
            $equipo[]=$d;
        }
        //return $equipo;
        foreach ($estudiantes as $e) {
            $equipo[]=$e;
        }
        return $equipo;
    }

    public function cal_index($id)
    {
      
        $escuela=Docente::find(Auth::user()->id)->escuela;
        $proyecto=$this->verificar_escuela($id,$escuela);
        if(!$proyecto){
         return back()->with('rojo','Ud. no tiene permiso de accesos');
        }
        return view('modulos.rsu.proyectos_facultad.calendario',compact('proyecto','escuela'));    
    }

   public function ver_archivos($id){
        $proyecto = RsuProyecto::find($id);
        if($proyecto->file_informe==''){
         return back()->with('azul','No hay archivo');
        }
        return Storage::download($proyecto->file_informe);
        //return back()->with('verde','Se descargó un archivo');
    }

    public function e_msj(Request $request){

      $msj = new RsuComentario;
      $msj->comentario=$request->get('msj');
      $msj->user_id=Auth::user()->id;
      $msj->proyecto_id=$request->get('proyecto');
      $msj->save();
      return redirect()->route('rsu.pf.index');
        
    }

    public function show_msj(Request $request){
     $id=$request->get('proyecto_id');
      $comentarios = RsuComentario::where('proyecto_id',$id)->get();
      return view('modulos.rsu.proyectos_facultad.comentarios',compact('comentarios','id'));
        
    }

    public function estado(Request $request){
      $id=$request->get('proyecto_id');
      $py = RsuProyecto::find($id);
      $py->etapa=$request->get('nuevaEtapa');
      $py->save();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
