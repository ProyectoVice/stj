<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudiosComplementario extends Model
{
    protected $table = 'estudios_complementarios';
   	protected $fillable = [
   		'estudios_complementario'        
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
}
