<?php

namespace App\Http\Controllers\modulos;

use App\Curso;
use App\PlanEstudio;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($plan, $ciclo, $anio)
    {
        $dep=Auth::user()->dependencia_id_depende;
        $dep_nombre= (new \App\Dependencia)->find($dep)->dependencia;
        $planes=PlanEstudio::getForSelect($dep);
        $plan=($plan=='null')?null:$plan;
        $ciclo=($ciclo=='null')?null:$ciclo;
        $anios=[];
        for ($i=Carbon::now()->year;$i>2004;$i--)
        {
            $anios[$i]=$i;
        }
        return view('modulos.academico.carga', ['dependencia'=>$dep_nombre, 'planes'=>$planes,'plan'=>$plan,'ciclo'=>$ciclo, 'anios'=>$anios, 'anio'=>$anio]);
    }
    public function cal_tabla($plan, $ciclo, $anio, Request $request){

        $cursos=Curso::select('cursos.codigo', 'cursos.nombre', 'cursos.creditos', 'cursos.hteoria', 'cursos.hpractica', 'users.nombres as docente')
            ->leftJoin('carga_lectivas', 'cursos.id', '=', 'carga_lectivas.curso_id')
            ->leftJoin('users', 'users.id', '=', 'carga_lectivas.docente_id')
            ->where('ciclo', '=', $ciclo)
            ->where('plan_estudio_id', '=', $plan);

        return datatables()->of($cursos->get())->toJson();
    }
}