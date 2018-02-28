<?php

namespace App\Http\Controllers\modulos\rsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\RsuProyecto;
use App\RsuEje;
use App\RsuLineamiento;
use App\RsuLineamientoProyecto;

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

        $proyectos=RsuProyecto::get();
        //return view('modulos.rsu.mis_proyectos.proyectos',compact('proyectos'));
        return view('modulos.rsu.mis_proyectos.index',compact('proyectos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satisfacciones=array(
                          '1' => 'Totalmente insatisfecho',
                          '2' => 'Insatisfecho',
                          '3' => 'Parcialmente satisfecho',
                          '5' => 'Satisfecho',
                          '6' => 'Totalmente satisfecho');
        $RsuEjes=RsuEje::get();
        return view('modulos.rsu.mis_proyectos.crear',compact('satisfacciones', 'RsuEjes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //inicializamos las ruta de los archivos
        $urlAprobacion='';$urlCulminacion='';;$urlSatisfaccion='';
        //si se cargaron archivos que guarden las imagenes en el servidor
        if($request->file('aprobacion-file')){
            $fileAprobacion= $request->file('aprobacion-file')->store('rsu/aprobacion');
            $urlAprobacion=$fileAprobacion;
        }
        if($request->file('culminacion-file')){
            $fileCulminacion= $request->file('culminacion-file')->store('rsu/culminacion');
            $urlCulminacion=$fileCulminacion;
        }
        if($request->file('satisfaccion-file')){
            $fileSatisfaccion=$request->file('satisfaccion-file')->store('rsu/satisfaccion');
            $urlSatisfaccion=$fileSatisfaccion;
        }
        //guardar datos a la tabla rsu_proyectos
        $myProyect=new RsuProyecto;
        $myProyect->titulo=$request->get('titulo');
        $myProyect->doc_aprobacion=$request->get('aprobacion');
        $myProyect->file_aprobacion=$urlAprobacion;
        $myProyect->lugar=$request->get('lugar');
        $myProyect->beneficiarios=$request->get('beneficiarios');
        $myProyect->aliados=$request->get('aliados');
        $myProyect->porcentaje=$request->get('porcentaje');
        $myProyect->objetivos=$request->get('objetivos');
        $myProyect->justificacion=$request->get('justificacion');
        $myProyect->logros=$request->get('logros');
        $myProyect->dificultades=$request->get('dificultades');
        $myProyect->doc_culminacion=$request->get('culminacion');
        $myProyect->file_culminacion=$urlCulminacion;
        $myProyect->satisfaccion=$request->get('satisfaccion');
        $myProyect->file_satisfacion=$urlSatisfaccion;
        $myProyect->save();

        //Guardamos el ID del proyecto registrado
        $ultimoID=$myProyect->id;

        //registramos todos los lineamientos que corresponden al proyecto
        if($request->get('lineas')){
            foreach($request->get('lineas') as $linea){
                $lineamientos=new RsuLineamientoProyecto;
                $lineamientos->rsu_proy_id=$ultimoID;
                $lineamientos->rsu_lin_id=$linea;
                $lineamientos->save();
            }
        }
        return redirect('rsu-misproyectos')->with('verde','Se registró el proyecto \''.$myProyect->titulo.'\' correctamente');
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
        //
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

    //Metodos CONTROLLER
    public function peru()
    {
        return "Holaaaaa";
    }
}
