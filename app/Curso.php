<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $table='cursos';
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
