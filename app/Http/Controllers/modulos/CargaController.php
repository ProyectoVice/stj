<?php

namespace App\Http\Controllers\modulos;

use App\ActividadSilabo;
use App\Ambiente;
use App\CargaLectiva;
use App\Curso;
use App\Dependencia;
use App\Horario;
use App\Http\Middleware\rol\Docente;
use App\PlanEstudio;
use Auth;
use Carbon\Carbon;
use function Couchbase\defaultDecoder;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $departamento = \App\Docente::find(Auth::user()->id)->dependencia_academico_id;
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
        $horarios = Horario::where('carga_lectiva_id','=',$id_carga)->get();
        $ambiente=Ambiente::getAmbientesByFacultad($dep);
        $ambiente_g=Ambiente::getAmbientesByFacultades($dep);

        return view('modulos.academico.carga_horario',
            [
                'id_carga'=>$id_carga,
                'horarios'=>$horarios,
                'dias'=>[1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo'],
                'ambiente'=>$ambiente,
                'ambiente_g'=>$ambiente_g
            ]
        );
    }
    public function saveHorario($id_carga, Request $request){
       /*if (isset($request->id))
            $horario = Horario::find($request->id);
        else*/
            $horario = new Horario();

        $horario->hora_inicio               =$request->hora_inicio ;
        $horario->hora_fin                  =$request->hora_fin;
        $horario->dia                       =$request->dia;
        $horario->carga_lectiva_id          =$id_carga;
        $horario->curso_ncgt_disponible_id  =null;
        $horario->ambiente_id               =(isset($request->ambiente_id_g))?$request->ambiente_id_g:$request->ambiente_id;
        $horario->save();

        return redirect()->route('academico.carga.horario.index',[$id_carga])->with('verde','Se registró el horario correctamente '.$horario->id);
    }

    public function micargaLectiva( $anio, $semestre)
    {
        $carga = DB::table('cursos')
            ->select('cursos.id', 'cursos.codigo', 'cursos.nombre', 'cursos.creditos',
                'cursos.hteoria', 'cursos.hpractica', 'cursos.ciclo', 'carga_lectivas.id as idcarga',
                'carga_lectivas.docente_id', 'carga_lectivas.curso_id', 'users.nombres as docente_nombre',
                'users.apellido_paterno', 'users.apellido_materno')
            ->join('carga_lectivas', 'cursos.id', '=', 'carga_lectivas.curso_id')
            ->join('users', 'users.id', '=', 'carga_lectivas.docente_id')
            ->where('anio', '=', $anio)
            ->where('carga_lectivas.semestre', '=', $semestre)
            ->where('docente_id', '=', Auth::user()->id)->get();
        $cursos=[];
        foreach ($carga as $dato){
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
    public function silabo($id_carga){
        $dep = Auth::user()->dependencia_id_depende;
        $horarios = Horario::where('carga_lectiva_id','=',$id_carga)->get();
        $silabo=ActividadSilabo::where('horario_id','=',$id_carga)->get();


        return view('modulos.academico.silabo',
            [
                'id_carga'=>$id_carga,
                'horarios'=>$horarios,
                'dias'=>[1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo'],
                'silabo'=>$silabo,
            ]
        );
    }
}