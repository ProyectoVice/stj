<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
   	protected $fillable = [
   		'programa'        
    ];
    public function proceso_seleccions() {
      return $this->hasMany(ProcesoSeleccion::class);
  	}
    public function programa_ncgts() {
        return $this->hasMany(ProgramaNcgt::class);
    }
}
