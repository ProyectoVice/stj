<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomaTipo extends Model
{
    protected $table = 'idioma_tipos';
   	protected $fillable = [
   		'idioma_tipo'       
    ];
    public function inscripcion_curso_disponibles() {
    return $this->hasMany(InscripcionCursoDisponible::class);
  	}
}
