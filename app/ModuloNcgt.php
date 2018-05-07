<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuloNcgt extends Model
{
    protected $table='modulo_ncgts';
    protected $fillable=[
    'nombre', 'descripcion', 'docente', 'programa_ncgt_id'
    ];
    public function programa_ncgt() {
      return $this->belongsto(ProgramaNcgt::class);
  	}
  	public function inscripcion_modulo_ncgts() {
      return $this->hasMany(InscripcionModuloNcgt::class);
    }
}
