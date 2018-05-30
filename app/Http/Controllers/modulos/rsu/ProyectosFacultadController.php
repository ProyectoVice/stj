<?php

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
        $proyecto=RsuProyecto::join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                          // ->join('users AS u','u.id','=','p.user_id')
                           ->join('docentes AS d','d.user_id','=','p.user_id')
                           ->join('escuelas AS e','e.id','=','d.escuela_id')
                           ->where('e.id','=',$escuela)
                           ->select('rsu_proyectos.*')->get();
        return datatables()->of($proyecto)->toJson();
    }
    
    public function verificar_escuela($id)
    {
      $MiEscuela=Docente::find(Auth::user()->id)->escuela->id;
      $proyecto=RsuProyecto::join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                          // ->join('users AS u','u.id','=','p.user_id')
                           ->join('docentes AS d','d.user_id','=','p.user_id')
                           ->join('escuelas AS e','e.id','=','d.escuela_id')
                           ->where('e.id','=',$MiEscuela)
                           ->where('rsu_proyectos.id','=',$id)
                           ->select('rsu_proyectos.*')->first();
         if($proyecto){
           return $proyecto;
         }else{
            return false;
         }
    }
    
    public function ver_detalle($id){
        $proyecto=$this->verificar_escuela($id);
         if(!$proyecto){
          return back()->with('rojo','Ud. no tiene permiso de accesos');
         }
         $escuela=Docente::find(Auth::user()->id)->escuela;
        return view('modulos.rsu.proyectos_facultad.ver_detalles',compact('proyecto','escuela'));
    }
    
    public function cal_index($id)
    {
         $proyecto=$this->verificar_escuela($id);
        if(!$proyecto){
         return back()->with('rojo','Ud. no tiene permiso de accesos');
        }
        $escuela=Docente::find(Auth::user()->id)->escuela;
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
