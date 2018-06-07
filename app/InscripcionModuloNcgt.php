<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionModuloNcgt extends Model
{
    protected $table='inscripcion_modulo_ncgts';
    protected $fillable=[
    'inscripcion_ncgt_id', 'modulo_ncgt_id', 'nota'
    ];
    public function curso_ncgt() {
      return $this->belongsto(CursoNcgt::class);
  	}
  	public function inscripcion_ncgt() {
      return $this->belongsto(inscripcionNcgt::class);
  	}
}
