<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionHorario extends Model
{
    protected $table = 'inscripcion_horarios';
   	protected $fillable = [
   		'tipo', 'hora_inicial', 'hora_final', 'dias', 'estado_horario', 'inscripcion_curso_disponible_id'       
    ];
    public function inscripcion_curso_disponible() {
      return $this->belongsto(InscripcionCursoDisponible::class);
    }
}
