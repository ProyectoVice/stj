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
use Carbon\Carbon;
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
        $evidencias=RsuEvidencias::where('rsu_proyecto_id',$id)->get();
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
        //return Datatables::of($proyecto)->make(true);
        return datatables()->of($proyecto)->toJson();
    }

    public function ver_detalle($id){
        $proyecto = RsuProyecto::find($id);
        return view('modulos.rsu.mis_proyectos.ver_detalles',compact('proyecto'));
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

    //Calendario Fin
    //Word
    public function download($id){
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
