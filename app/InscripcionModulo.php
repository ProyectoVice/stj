<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionModulo extends Model
{
    protected $table = 'inscripcion_modulos';
   	protected $fillable = [
   		'inscripcion_modulo'
    ];
    public function inscripcion_curso() {
    return $this->hasMany(InscripcionCurso::class);
  	}
}
