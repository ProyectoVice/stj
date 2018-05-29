<?php

namespace App\Http\Controllers\modulos;

use App\CargaLectiva;
use App\Curso;
use App\Dependencia;
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
        $departamento = DB::select('SELECT dependencia_buscar_direccion_hacia_arriba(' . $dep . ') as dep_ac')[0];
        $dep_nombre = (new \App\Dependencia)->find($departamento->dep_ac)->dependencia;
        $planes = PlanEstudio::getForSelect($dep);
        $plan = ($plan == 'null') ? null : $plan;
        $ciclo = ($ciclo == 'null') ? null : $ciclo;
        $anios = [];
        $where=[['plan_estudio_id', '=', $plan]];
        if ($ciclo>0)
            $where[]=['ciclo', '=', $ciclo];
        $cursos_query = (new \App\Curso)->select('cursos.id', 'cursos.codigo', 'cursos.nombre', 'cursos.creditos',
            'cursos.hteoria', 'cursos.hpractica', 'cursos.ciclo')
            ->where($where)
            ->get();
        $carga = DB::table('cursos')
            ->select('carga_lectivas.id', 'carga_lectivas.docente_id', 'carga_lectivas.curso_id', 'users.nombres', 'users.apellido_paterno', 'users.apellido_materno')
            ->join('carga_lectivas', 'cursos.id', '=', 'carga_lectivas.curso_id')
            ->join('users', 'users.id', '=', 'carga_lectivas.docente_id')
            ->where('anio', '=', $anio)
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
        for ($i=Carbon::now()->year;$i>2004;$i--)
        {
            $anios[$i]=$i;
        }
        return view('modulos.academico.carga',
            [
            'dependencia'=>$dep_nombre,
            'planes'=>$planes,
            'plan'=>$plan,
            'ciclo'=>$ciclo,
            'anios'=>$anios,
            'anio'=>$anio,
            'semestre'=>$semestre,
            'cursos'=>$cursos,
            'docentes'=>$docentes,
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
}