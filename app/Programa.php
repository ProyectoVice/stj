<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
   	protected $fillable = [
   		'programa'        
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
}
