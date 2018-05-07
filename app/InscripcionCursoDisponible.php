<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionCursoDisponible extends Model
{
    protected $table = 'inscripcion_curso_disponibles';
   	protected $fillable = [
   		'idioma_tipo', 'ciclo', 'grupo', 'inscripcion_curso_id', 'nivel', 'docente_otros_user_id'       
    ];
    public function inscripcion_alumnos() {
      return $this->hasMany(InscripcionAlumno::class);
  	}
  	public function inscripcion_horarios() {
      return $this->hasMany(InscripcionHorario::class);
  	}
  	public function docente_otro() {
      return $this->belongsto(DocenteOtro::class,'docente_otros_user_id','user_id');
    }   
    public function inscripcion_curso() {
      return $this->belongsto(InscripcionCurso::class);
    }    
}
