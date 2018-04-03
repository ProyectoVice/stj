<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteOtro extends Model
{
    protected $table = 'docente_otros';
   	protected $fillable = [
   		'user_id', 'fecha_ingreso', 'carga'        
    ];
    public function inscripcion_curso_disponibles() {
      return $this->hasMany(InscripcionCursoDisponible::class);
  	}
}
