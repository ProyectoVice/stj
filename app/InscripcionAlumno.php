<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionAlumno extends Model
{
    protected $table = 'inscripcion_alumnos';  
   	protected $fillable = [
   		'user_id', 'inscripcion_curso_disponible_id', 'caja_id'
    ];
    public function user() {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function inscripcion_curso_disponible() {
      return $this->belongsto(InscripcionCursoDisponible::class);
  	}
  	public function caja() {
      return $this->belongsto(Caja::class);
  	}
}
