<?php

namespace App\Http\Controllers\modulos\rsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\RsuProyecto;
use App\RsuEje;
use App\RsuLineamiento;
use App\RsuLineamientoProyecto;
use App\RsuParticipante;
use Auth;

use Softon\SweetAlert\Facades\SWAL;  
use DB;

use Illuminate\Support\Facades\Storage;

class MisProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('docente');
    }

    public function index()
    {

        return view('modulos.rsu.mis_proyectos.index');
    }
    public function datatables()
    {
        $proyecto=RsuProyecto::join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                              ->join('rsu_responsabilidads AS r','r.id','=','p.rsu_responsabilidad_id')
                              ->select('rsu_proyectos.*','r.rsu_responsabilidad AS rp')->get();
        //return Datatables::of($proyecto)->make(true);
        return datatables()->of($proyecto)->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $this->validate(request(),[
         'el_título'=>'unique:rsu_proyectos,titulo|max:30'
      ]);

       //$data=request()->all();

        //guardar datos a la tabla rsu_proyectos
        $myProyect=new RsuProyecto;
        $myProyect->titulo=$request->get('el_título');
        $myProyect->save();

        //Guardamos el ID del proyecto registrado
        $ultimoID=$myProyect->id;

        //Registramos al primer integrante (el que crea el proyecto)
        $participantes=new RsuParticipante;
        $participantes->user_id=Auth::user()->id;
        $participantes->rsu_proyecto_id=$ultimoID;
        $participantes->rsu_responsabilidad_id='1';
        $participantes->save();

        //redirigir a la función editar
        return redirect()->route('rsu.mp.edit',$ultimoID);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //Que el ID exista

         //Solo los miembros pueden editar
         $consulta=RsuParticipante::where('rsu_proyecto_id',$id)
                                 ->where('user_id',Auth::user()->id)->get();
         //return $consulta;
         if($consulta->isEmpty()){
           return redirect()->route('rsu.mp.index')->with('rojo','Ud. no tiene permiso para editar este proyecto');
         }
        $satisfacciones=array(
                          '1' => 'Totalmente insatisfecho',
                          '2' => 'Insatisfecho',
                          '3' => 'Parcialmente satisfecho',
                          '5' => 'Satisfecho',
                          '6' => 'Totalmente satisfecho');
        $RsuEjes=RsuEje::get();
        $proyecto=RsuProyecto::find($id);
        return view('modulos.rsu.mis_proyectos.editar',compact('proyecto','satisfacciones', 'RsuEjes'));
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

        //Solo los miembros pueden editar
         $consulta=RsuParticipante::where('rsu_proyecto_id',$id)
                                 ->where('user_id',Auth::user()->id)->get();
         //return $consulta;
         if($consulta->isEmpty()){
           return redirect()->route('rsu.mp.index')->with('rojo','Ud. no tiene permiso para editar este proyecto');
         }
        //inicializamos las ruta de los archivos

        $myProyect= RsuProyecto::find($id);
        //si se cargaron archivos que guarden las imagenes en el servidor
        if($request->file('aprobacion-file')){
            //Eliminamos la imagen que existía
            Storage::delete($myProyect->file_aprobacion);
            $fileAprobacion= $request->file('aprobacion-file')->store('public/rsu/aprobacion');
            $myProyect->file_aprobacion=$fileAprobacion;
        }
        if($request->file('culminacion-file')){
            //Eliminamos la imagen que existía
            Storage::delete($myProyect->file_culminacion);
            $fileCulminacion= $request->file('culminacion-file')->store('public/rsu/culminacion');
            $myProyect->file_culminacion=$fileCulminacion;
        }
        if($request->file('satisfaccion-file')){
            //Eliminamos la imagen que existía
            Storage::delete($myProyect->file_satisfaccion);
            $fileSatisfaccion=$request->file('satisfaccion-file')->store('public/rsu/satisfaccion');
            $myProyect->file_satisfaccion=$fileSatisfaccion;
        }
        //guardar datos a la tabla rsu_proyectos
        
        $myProyect->titulo=$request->get('titulo');
        $myProyect->doc_aprobacion=$request->get('doc_aprobacion');
        $myProyect->lugar=$request->get('lugar');
        $myProyect->beneficiarios=$request->get('beneficiarios');
        $myProyect->aliados=$request->get('aliados');
        $myProyect->porcentaje=$request->get('porcentaje');
        $myProyect->doc_culminacion=$request->get('doc_culminacion');
        $myProyect->objetivos=$request->get('objetivos');
        $myProyect->justificacion=$request->get('justificacion');
        $myProyect->logros=$request->get('logros');
        $myProyect->dificultades=$request->get('dificultades');
        $myProyect->satisfaccion=$request->get('satisfaccion');
        $myProyect->save();
        //Guardamos el ID del proyecto registrado
        $ultimoID=$myProyect->id;

        //registramos todos los lineamientos que corresponden al proyecto
        //return $request->get('lineas');
        if($request->get('lineas')){
            foreach($request->get('lineas') as $linea){
                $lineamientos=new RsuLineamientoProyecto;
                $lineamientos->rsu_lin_id=$linea;
                $lineamientos->rsu_proy_id=$ultimoID;
                $lineamientos->save();
            }
        }
       return redirect()->route('rsu.mp.index')->with('verde','Actualizó el proyecto \''.$myProyect->titulo.'\' correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myProyect= RsuProyecto::find($id);
        Storage::delete($myProyect->file_aprobacion);
        Storage::delete($myProyect->file_culminacion);
        Storage::delete($myProyect->file_satisfaccion);
         RsuProyecto::destroy($id);
        
    }

    //Metodos CONTROLLER
    public function lineas(Request $request, $id)
    {
      if($request->ajax()){
          $qry=RsuLineamiento::join('rsu_ejes','rsu_ejes.id','=','rsu_lineamientos.rsu_eje_id')
            ->where('rsu_lineamientos.rsu_eje_id',$id)
            ->select('rsu_lineamientos.id','rsu_lineamientos.lineamiento','rsu_ejes.abr' )->get();
                return response()->json($qry);
      }
    }
    public function evidencias($id)
    {
      $this->validate(request(),[
         
         'foto'=>'image|max:2048'
      ]);

      $foto = request()->file('foto');
      
    }
}
