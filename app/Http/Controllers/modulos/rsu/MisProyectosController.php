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
use App\Docente;
use App\Estudiante;
use Carbon\Carbon;
use App\RsuComentario;
use Auth;
use App\User;
use App\RolUser;
use Input;

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
        $this->middleware('docente')->except('cal_table');
    }

    public function index()
    {
        return view('modulos.rsu.mis_proyectos.index');
    }
    public function datatables()
    {
        $proyecto=RsuProyecto::join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                              ->where('p.user_id','=',Auth::user()->id)
                              ->select('rsu_proyectos.*')->get();
        return datatables()->of($proyecto)->toJson();
    }
    // public function tipo_responsabilidad(){
    //     $arrayName = array('Docente - Responsable','Docente - Integrante','Estudiante');
    //     return $arrayName;
    // }
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
    public function equipo_show($id)
    {
        $equipo=$this->equipo($id);
        //return Datatables::of($proyecto)->make(true);
        return datatables()->of($equipo)->toJson();
    }

    public function equipo_users(Request $request,$id)
    {

        $term = $request->get('term');
        //Los que ya pertenecen a este proyecto
         $query_00=RsuParticipante::where("rsu_proyecto_id",$id)->pluck('user_id');

        //Docentes y alumnos
        $query_01=DB::table('users AS u')->join('rol_users AS ru','u.id','=','ru.user_id')
        //El whereIn método verifica que el valor de una columna dada se encuentre dentro de la matriz dada:
        ->whereIn('ru.rol_id', [4, 3])
        ->where('ru.estado','1')
        //El whereNotIn método verifica que el valor de la columna dada no está contenido en la matriz dada:
        //En este caso usaremos el %query_00
        ->whereNotIn('u.id', $query_00)
        ->where(DB::raw('CONCAT(u.dni," ",u.apellido_paterno," ",u.apellido_materno," ", u.nombres)'),'LIKE','%'.$term.'%')
        ->select(DB::raw('CONCAT(u.dni," ",u.apellido_paterno," ",u.apellido_materno," ", u.nombres) AS datos'),
            //'ru.rol_id AS rol','ru.estado',
            'u.id AS id')
         ->take(5)->get();
         if($query_01->isEmpty()){
            return 0;
         }
       
       foreach ($query_01 as $q)
       {
         
         $results[] = [ 'id' => $q->id, 'value' => $q->datos];
       }
         return response()->json($results);
    
   }
    public function equipo_users_new(Request $request)
    {
        $query=RsuParticipante::where('rsu_proyecto_id',$request->get('id_proyecto'))->where('user_id',$request->get('id_boton'))->first();

        if ($query) {
            return false;
        }
        $equipo=new RsuParticipante;
        $equipo->rsu_proyecto_id=$request->get('id_proyecto');
        $equipo->user_id=$request->get('id_boton');
        //Elegimos el rol, 3= docente
        $usuario=RolUser::where('user_id',$request->get('id_boton'))->where('rol_id','3')->where('estado','1')->first();
        if($usuario){
         $equipo->rsu_responsabilidad_id='2';
        }else{
         $equipo->rsu_responsabilidad_id='3';
        }
        
        $equipo->save();
    }
    public function equipo_users_d($id)
    {
      //Filtros
       RsuParticipante::destroy($id);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate(request(),[
         'el_título'=>'unique:rsu_proyectos,titulo|max:500'
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
         $miResponsabilidad=RsuParticipante::where('rsu_proyecto_id',$id)
                                 ->where('user_id',Auth::user()->id)->pluck('rsu_responsabilidad_id');
         //return $miResponsabilidad;
         if($miResponsabilidad->isEmpty()){
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
        $evidencias=RsuEvidencias::where('rsu_proyecto_id',$id)->get();

        return view('modulos.rsu.mis_proyectos.editar',compact('proyecto','satisfacciones', 'RsuEjes','miResponsabilidad'));
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
        $myProyect->mas_lineamientos=$request->get('mas_lineamientos');
        $myProyect->save();
        //Guardamos el ID del proyecto registrado
//         $ultimoID=$myProyect->id;

// $array1 = array(1, 2,3,4);
// $array2 = array(2,11,6);

      //return array_diff($array1, $array2);
        //Para eliminar
        //return $paraEliminar=RsuLineamientoProyecto::where('rsu_proy_id',$id)->whereNotBetween('rsu_lin_id',[100,12])->get(); 
        //return $request->get('lineas');
        $lineas=$request->get('lineas');
        if($lineas){
         return $paraEliminar=RsuLineamientoProyecto::where('rsu_proy_id',$id)->whereNotIn('rsu_lin_id',$lineas)->pluck('rsu_lin_id');
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
        $es_responsable_del_proyecto=RsuParticipante::where('user_id',Auth::user()->id)
                    ->where('rsu_proyecto_id',$id)
                    ->where('rsu_responsabilidad_id','1')->first();
        if(!$es_responsable_del_proyecto){
            return "no";
        }else{ 
            Storage::delete($myProyect->file_aprobacion);
            Storage::delete($myProyect->file_culminacion);
            Storage::delete($myProyect->file_satisfaccion);
            RsuProyecto::destroy($id);
            return "si";
        }        
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
    public function img(Request $request, $id)
    {
      $this->validate(request(),[
         'foto'=>'required|image|max:2048'
      ]);
        $evidencia=new RsuEvidencias;
        $fileAprobacion= $request->file('foto')->store('public/rsu/evidencias');
        $evidencia->file=$fileAprobacion;
        $evidencia->rsu_proyecto_id=$id;
        $evidencia->save();

      
    }
    public function img_delete($img,$proy)
    {
        $file=RsuEvidencias::find($img)->file;
        Storage::delete($file);
        RsuEvidencias::destroy($img);
       return redirect()->route('rsu.mp.edit',$proy)->with('verde','Se eliminó la imagen');      
    }

    //Calendario Inicio
    public function cal_index($id)
    {
        $proyecto=RsuProyecto::find($id);
        return view('modulos.rsu.mis_proyectos.calendario',compact('proyecto'));    
    }
     public function cal_date($id)
    {
        return RsuCalendario::where('rsu_proyecto_id',$id)->get();    
    }

    public function cal_new(Request $request){
        
        //$formato='d/m/Y H:i';
        //return Carbon::parse($date)->format('Y-m-d H:i:s');
        //$date = Carbon::parse($date)->format('Y-m-d H:i:s');
        $proyecto=new RsuCalendario;
        $proyecto->title=$request->get('title');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->color=$request->get('color');
        $proyecto->textColor=$request->get('textColor');
        $proyecto->start=Carbon::createFromFormat('d/m/Y H:i',$request->get('start'));
        $proyecto->end=Carbon::createFromFormat('d/m/Y H:i',$request->get('end'));
        $proyecto->rsu_proyecto_id=$request->get('proyecto_id');
        $proyecto->save();
        //return $request;
    }

    public function cal_del(Request $request){
        $id=$request->get('id');
        RsuCalendario::destroy($id);
    }
    public function cal_act(Request $request){
        $id=$request->get('id');
        $proyecto=RsuCalendario::find($id);
        $proyecto->title=$request->get('title');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->color=$request->get('color');
        $proyecto->textColor=$request->get('textColor');
        $proyecto->start=Carbon::createFromFormat('d/m/Y H:i',$request->get('start'));
        $proyecto->end=Carbon::createFromFormat('d/m/Y H:i',$request->get('end'));
        $proyecto->rsu_proyecto_id=$request->get('proyecto_id');
        $proyecto->save();
    }
    public function cal_table($id){
        //return $id;
        $proyecto=RsuCalendario::where('rsu_proyecto_id',$id)->get();
        return datatables()->of($proyecto)->toJson();
    }

    public function ver_detalle($id){
        //return Docente::find(4)->dependencia_escuela->dependencia;
        $proyecto = RsuProyecto::find($id);
        $consulta=RsuParticipante::where('user_id',Auth::user()->id)
                  ->where('rsu_proyecto_id',$proyecto->id)->first();
         if(!$consulta){
            return back()->with('rojo','Ud. no tiene permisos de acceso');
         }
        $equipo=$this->equipo($id); //$tipo=$this->tipo_responsabilidad();
        return view('modulos.rsu.mis_proyectos.ver_detalles',compact('proyecto','equipo'));
    }

    public function ver_archivos($id){
        $proyecto = RsuProyecto::find($id);
        return view('modulos.rsu.mis_proyectos.ver_archivos',compact('proyecto'));
    }

    public function update_file(Request $request, $id){
        $myProyect= RsuProyecto::find($id);
        //solo si el proyecto pertence a este usuario puede borrar
        $participante=RsuParticipante::where('rsu_proyecto_id',$myProyect->id)->first();
        if($participante==''){
         return back()->with('rojo','Ud. no tiene permiso');
        }
        if($request->file('rsu-file')){
            //Eliminamos el archivo que existía
            Storage::delete($myProyect->file_informe);
            $file= $request->file('rsu-file')->store('public/rsu/informes');
            $myProyect->file_informe=$file;
            $myProyect->save();
            return redirect()->route('rsu.mp.index')->with('verde','se registró un archivo');
        }

         return back()->with('azul','No se envió ningun archivo');


    }

    public function show_msj(Request $request){
     $id=$request->get('proyecto_id');
      $comentarios = RsuComentario::where('proyecto_id',$id)->get();
      return view('modulos.rsu.mis_proyectos.comentarios',compact('comentarios','id'));
        
    }
    //Calendario Fin
    //Word
    public function download($id){
        return back()->with('azul','No disponible para esta versión');
        //return $id;
       // Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    '"Learn from yesterday, live for today, hope for tomorrow. '
        . 'The important thing is not to stop questioning." '
        . '(Albert Einstein)'
);

/*
 * Note: it's possible to customize font style of the Text element you add in three ways:
 * - inline;
 * - using named font style (new font style object will be implicitly created);
 * - using explicitly created font style object.
 */

// Adding Text element with font customized inline...
$section->addText(
    '"Great achievement is usually born of great sacrifice, '
        . 'and is never the result of selfishness." '
        . '(Napoleon Hill)',
    array('name' => 'Tahoma', 'size' => 10)
);

// Adding Text element with font customized using named font style...
$fontStyleName = 'oneUserDefinedStyle';
$phpWord->addFontStyle(
    $fontStyleName,
    array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
);
$section->addText(
    '"The greatest accomplishment is not in never falling, '
        . 'but in rising again after you fall." '
        . '(Vince Lombardi)',
    $fontStyleName
);

// Adding Text element with font customized using explicitly created font style object...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('probando el word.docx');
return response()->download('probando el word.docx');

    }
}
