<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionCurso extends Model
{
    protected $table = 'inscripcion_cursos';
   	protected $fillable = [
   		'inscripcion_curso', 'inscripcion_modulo_id'
    ];
    public function inscripcion_curso_disponibles() {
    return $this->hasMany(InscripcionCursoDisponible::class);
  	}
  	public function inscripcion_modulo() {
      return $this->belongsto(InscripcionModulo::class);
    }
}
