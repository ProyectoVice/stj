<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionNivel extends Model
{
    protected $table = 'inscripcion_nivels';
   	protected $fillable = [
   		'inscripcion_nivel'     
    ];
    public function inscripcion_curso_disponibles() {
    return $this->hasMany(InscripcionCursoDisponible::class);
  	}
}
