<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $table='cursos';
    protected $primaryKey = 'codigo';
    protected $fillable=[
    'codigo','nombre','ciclo','creditos','hteoria','hpractica','plan_estudio_id'
    ];
    //recibe la llave foranea de plan de estudios
    public function plan_estudio() 
    {
      return $this->belongsto(PlanEstudio::class);
  	}
  	//hereda su llave a Carga lectiva
    public function carga_lectivas()
    {
        return $this->hasMany(CargaLectiva::class);
    }
    public static function  getCursosforYearAndPlan($ciclo, $plan){
        $arr=[];
        $cursos= (new \App\Curso)->select('*')
        ->leftJoin('carga_lectivas', 'cursos.id', '=', 'carga_lectivas.curso_id')
        ->leftJoin('users', 'users.id', '=', 'carga_lectivas.docente_id')
        ->where('ciclo', '=', $ciclo)
        ->where('plan_estudio_id', '=', $plan);
        foreach ($cursos as $id=>$curso){
            $arr[$curso->id]=$curso;
        }
        return $cursos;
}
}
