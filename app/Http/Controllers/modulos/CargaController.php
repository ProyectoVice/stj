<?php

namespace App\Http\Controllers\modulos;

use App\_clases\NoLectivaPDFF;
use App\_clases\TablaPDFF;
use App\ActividadSilabo;
use App\ActNoLectiva;
use App\Ambiente;
use App\CargaLectiva;
use App\CargaNoLectiva;
use App\Curso;
use App\Dependencia;
use App\Horario;
use App\Http\Middleware\rol\Docente;
use App\PlanEstudio;
use Auth;
use Carbon\Carbon;
use Codedge\Fpdf\Fpdf\Fpdf;
use function Couchbase\defaultDecoder;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($plan, $ciclo, $anio, $semestre)
    {
        $dep = Auth::user()->dependencia_id_depende;
        $departamento = \App\Docente::find(Auth::user()->id);
        /*if($departamento==null)
            dd("no tiene permiso para acceder");*/
        $departamento = $departamento->dependencia_academico_id;
        $dep_nombre = (new \App\Dependencia)->find($departamento)->dependencia;
        $planes = PlanEstudio::getForSelectForDepartamento($departamento);
        $plan = ($plan == 'null') ? null : $plan;
        $ciclo = ($ciclo == 'null') ? null : $ciclo;
        $anios = [];
        $where=[['plan_estudio_id', '=', $plan]];
        if ($ciclo>0)
            $where[]=['ciclo', '=', $ciclo];
        $cursos_query = DB::table('cursos')->select('cursos.id', 'cursos.codigo', 'cursos.nombre', 'cursos.creditos',
            'cursos.hteoria', 'cursos.hpractica', 'cursos.ciclo', DB::raw('null as docente_nombre'))
            ->where($where)
            ->get();
        $carga = DB::table('cursos')
            ->select('carga_lectivas.id', 'carga_lectivas.docente_id', 'carga_lectivas.curso_id', 'users.nombres', 'users.apellido_paterno', 'users.apellido_materno')
            ->join('carga_lectivas', 'cursos.id', '=', 'carga_lectivas.curso_id')
            ->join('users', 'users.id', '=', 'carga_lectivas.docente_id')
            ->where('anio', '=', $anio)->get();

        $cursos=[];
        foreach ($cursos_query as $dato){
            if (is_numeric($semestre)&&$dato->ciclo%2==$semestre%2)
            $cursos[$dato->id]=$dato;
        }
        foreach ($carga as $dato){
            if(isset($cursos[$dato->curso_id])) {
                $cursos[$dato->curso_id]->docente_nombre = $dato->nombres;
                $cursos[$dato->curso_id]->docente_id = $dato->docente_id;
                $cursos[$dato->curso_id]->idcarga = $dato->id;
            }
        }
        //dd($carga);
        $docentes = \App\Docente::getDocentesByDependencia($dep);
        $docentes_g = \App\Docente::getDocentes($dep);
        for ($i=Carbon::now()->year;$i>2004;$i--)
        {
            $anios[$i]=$i;
        }
        return view('modulos.academico.carga',
            [
            'dependencia'=>$dep_nombre,
            'planes'=>$planes,
            'plan'=>$plan,
            'ciclos'=>[1=>'I',2=>'II',3=>'III',4=>'IV',5=>'V',6=>'VI',7=>'VII',8=>'VIII',9=>'IX',10=>'X'],
            'ciclo'=>$ciclo,
            'anios'=>$anios,
            'anio'=>$anio,
            'semestre'=>$semestre,
            'cursos'=>$cursos,
            'docentes'=>$docentes,
            'docentes_g'=>$docentes_g,
            'docente'=>null
            ]
        );
    }
    public function horario($id_carga){
        $dep = Auth::user()->dependencia_id_depende;
        $carga_lectiva = CargaLectiva::find($id_carga);
        $curso = Curso::find($carga_lectiva->curso_id);
        $docente = Curso::find($carga_lectiva->docente_id);
        $horarios = Horario::select('*')->where('carga_lectiva_id','=',$id_carga)->get();
        $ambiente=Ambiente::getAmbientesByFacultades($dep);

        return view('modulos.academico.carga_horario',
            [
                'id_carga'=>$id_carga,
                'horarios'=>$horarios,
                'dias'=>[1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo'],
                'ambiente'=>$ambiente,
                'carga_lectiva'=>$carga_lectiva,
                'curso'=>$curso,
                'docente'=>$docente
            ]
        );
    }

    public function imprimir($id_carga){

        setlocale(LC_TIME, 'ES_PE');
        setlocale(LC_TIME, 'es_PE.UTF-8');
        $headers = ['Content-Type' => 'application/pdf'];

        $dep = Auth::user()->dependencia_id_depende;
        $carga_lectiva = CargaLectiva::find($id_carga);
        $curso = Curso::find($carga_lectiva->curso_id);
        $docente = Curso::find($carga_lectiva->docente_id);
        $horarios = Horario::select('*')
            ->Join('actividad_silabos', 'actividad_silabos.horario_id', '=', 'horarios.id')->where('carga_lectiva_id','=',$id_carga)
            ->OrderBy('actividad_silabos.semana', 'ASC')
            ->OrderBy('horarios.dia', 'ASC')
            ->OrderBy('horarios.hora_inicio', 'ASC')

            ->get();
        $ambiente=Ambiente::getAmbientesByFacultades($dep);

        //dd($horarios);
        $pdf = new tablaPDFF('P','mm','A4');
        $pdf->SetTitle('Carga lectiva');
        $pdf->setHeader( $docente, $curso, $carga_lectiva );
        $header = array("\nSEMANA\n", utf8_decode("\nDÍA\n"), "\nHORA\n", "\nACTIVIDAD\n");
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();
        $pdf->cargaLectivaCurso($header, $horarios, [1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo']);
        /*$fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Cell(50, 25, 'Hello World!');*/

        return Response::make($pdf->Output(),200,$headers);
    }

    public function saveHorario($id_carga, Request $request){
        if (isset($request->id)&&$request->id!='new')
             $horario = Horario::find($request->id);
         else
        $horario = new Horario();

        $horario->hora_inicio               =$request->hora_inicio ;
        $horario->hora_fin                  =$request->hora_fin;
        $horario->dia                       =$request->dia;
        $horario->carga_lectiva_id          =$id_carga;
        $horario->curso_ncgt_disponible_id  =null;
        $horario->ambiente_id               =(isset($request->ambiente_id_g))?$request->ambiente_id_g:$request->ambiente_id;
        $horario->save();

        return redirect($request->headers->get('referer'))->with('verde','Se registró el horario correctamente');
    }
    public function acciones($id_horario, Request $request){
        $actividades = ActividadSilabo::select('*')->where('horario_id','=',$id_horario)->orderBy('semana')->get();
        $horario=Horario::find($id_horario);
        $actividades_no_lectivas=ActNoLectiva::getAllForSelect();
        return view('modulos.academico.carga_acciones',
            [
                'id_horario'=>$id_horario,
                'horario'=>$horario,
                'actividades'=>$actividades,
                'es_lectiva'=>$request->es_lectiva,
                'actividades_no_lectivas'=>$actividades_no_lectivas,
                'dias'=>[1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo']
            ]
        );
    }
    public function saveAcciones($id_carga, Request $request){
        if (isset($request->id)) {
            if ($request->id == 'new')
                $actividad = new ActividadSilabo();
            else
                $actividad = ActividadSilabo::find($request->id);
            $actividad->semana=$request->semana;
            $actividad->horario_id=$request->horario;
            $actividad->actividad=$request->actividad;
            $actividad->save();
        }
        return $this->acciones($actividad->horario_id, $request);
    }
    public function deleteAcciones($id_carga, Request $request){
        if (isset($request->id)) {
            $actividad = ActividadSilabo::find($id_carga);
            $actividad->delete();
        }
        return $this->acciones($actividad->horario_id, $request);
    }

    public function micargaLectiva( $anio, $semestre)
    {
        $departamento = \App\Docente::find(Auth::user()->id);
        /*if($departamento==null)
            dd("no tiene permiso para acceder");*/
        $departamento = $departamento->dependencia_academico_id;
        $dep_nombre = (new \App\Dependencia)->find($departamento)->dependencia;
        $carga = DB::table('cursos')
            ->select('cursos.id', 'cursos.codigo', 'cursos.nombre', 'cursos.creditos',
                'cursos.hteoria', 'cursos.hpractica', 'cursos.ciclo', 'carga_lectivas.id as idcarga',
                'carga_lectivas.docente_id', 'carga_lectivas.curso_id', 'users.nombres as docente_nombre',
                'users.apellido_paterno', 'users.apellido_materno')
            ->leftJoin('carga_lectivas', 'cursos.id', '=', 'carga_lectivas.curso_id')
            ->join('users', 'users.id', '=', 'carga_lectivas.docente_id')
            ->where('anio', '=', $anio)
            ->where('carga_lectivas.semestre', '=', $semestre)
            ->where('docente_id', '=', Auth::user()->id);
        $cursos=[];
        foreach ($carga->get() as $dato){
            $cursos[$dato->id]=$dato;
        }
        for ($i=Carbon::now()->year;$i>2004;$i--)
        {
            $anios[$i]=$i;
        }
        return view('modulos.academico.micarga',
            [
                'anios'=>$anios,
                'anio'=>$anio,
                'semestre'=>$semestre,
                'cursos'=>$cursos,
                'departamento'=>$dep_nombre,
                'docente'=>null
            ]
        );
    }
    
    public function index1()
    {
        return view ('modulos.academico.reportecarga');
    }

    public function store($plan, $ciclo, $anio, $semestre, Request $request){
        if ($request->idcarga>0)
            $carga = CargaLectiva::find($request->idcarga);
        else
            $carga = new CargaLectiva();

        $carga->semestre    =$semestre;
        $carga->estado      =1;
        $carga->anio        =$anio;
        $carga->curso_id    =$request->curso;
        $carga->docente_id  =$request->docente;
        $carga->save();

        return ['oh'=>'true','msg'=>'datos guardados correctamente'];
    }
    public function noLectiva($semestre,$anio){
        $actividades = CargaNoLectiva::select('*')
            ->where('semestre','=',$semestre)
            ->where('anio','=',$anio)
            ->where('docente_id', '=', Auth::user()->id)
            ->get();
        $actividades_no_lectivas=ActNoLectiva::getAllForSelect();
        return view('modulos.academico.no_lectivas',
            [
                'anio'=>$anio,
                'semestre'=>$semestre,
                'actividades'=>$actividades,
                'actividades_no_lectivas'=>$actividades_no_lectivas,
                'dias'=>[1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo']
            ]
        );
    }

    public function SaveNoLectiva( $semestre,$anio, Request $request)
    {
        if (isset($request->id)) {
            if ($request->id == 'new')
                $actividad = new CargaNoLectiva();
            else
                $actividad = CargaNoLectiva::find($request->id);
            $actividad->docente_id=$request->docente;
            $actividad->horas=$request->horas;
            $actividad->estado=1;
            $actividad->semestre=$semestre;
            $actividad->anio=$anio;
            $actividad->act_no_lectiva_id=$request->actividad;
            $actividad->save();
        }
        return 'success';
        //return $this->acciones($actividad->horario_id, $request);
    }
    public function DeleteNoLectiva( $semestre,$anio, Request $request)
    {
        if (isset($request->id)) {
            $actividad = CargaNoLectiva::find($request->id);
            $actividad->delete();
        }
        return 'success';
    }
    public function PrintNoLectiva($semestre,$anio, Request $request){

            $cargas = CargaNoLectiva::select('*')
                ->where('anio', '=', $anio)
                ->where('semestre', '=', $semestre )
                ->where('docente_id', '=', Auth::user()->id)
                ->get();
            if(count($cargas)>0) {
                $carga = $cargas[0];
                setlocale(LC_TIME, 'ES_PE');
                setlocale(LC_TIME, 'es_PE.UTF-8');
                $headers = ['Content-Type' => 'application/pdf'];

                $dep = Auth::user()->dependencia_id_depende;
                $docente = Curso::find($carga->docente_id);
                $ambiente = Ambiente::getAmbientesByFacultades($dep);

                //dd($horarios);
                $pdf = new NoLectivaPDFF('P', 'mm', 'A4');
                $pdf->SetTitle('Carga no lectiva');
                $pdf->setHeader($docente, $carga);
                $header = array("\nACTIVIDAD\n", "\nHORAS\n");
                $pdf->SetAutoPageBreak(false);
                $pdf->AddPage();
                $pdf->cargaLectivaCurso($header, $cargas, ActNoLectiva::getAllForSelect());

                return Response::make($pdf->Output(), 200, $headers);
            }else
                return 'no hay registros';

    }
}