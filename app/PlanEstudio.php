<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    //
    protected $table='plan_estudios';
    protected $fillable=[
    'resolucion','archivo','año','escuela_id'
    ];
    //recibe la llave foranea de escuela
    public function escuela() 
    {
      return $this->belongsto(Escuela::class);
  	}
  	//Hereda su llave a cursos
  	public function cursos()
    {
     return $this->hasMany(Curso::class);
    }
}
