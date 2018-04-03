<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionCursoDisponible extends Model
{
    protected $table = 'inscripcion_curso_disponibles';
   	protected $fillable = [
   		'ciclo', 'grupo', 'inscripcion_curso_id', 'user_id', 'inscripcion_nivel_id', 'idioma_tipo_id'       
    ];
    public function inscripcion_alumnos() {
      return $this->hasMany(InscripcionAlumno::class);
  	}
  	public function inscripcion_horarios() {
      return $this->hasMany(InscripcionHorario::class);
  	}
  	public function docente_otro() {
      return $this->belongsto(DocenteOtro::class,'user_id','id');
    }
    public function inscripcion_curso_disponible() {
      return $this->belongsto(InscripcionCursoDisponible::class);
    }
    public function inscripcion_curso() {
      return $this->belongsto(InscripcionCurso::class);
    }
    public function inscripcion_nivel() {
      return $this->belongsto(InscripcionNivel::class);
    }
}
