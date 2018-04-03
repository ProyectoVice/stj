<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SegundaEspecialidad extends Model
{
    protected $table = 'segunda_especialidads';
   	protected $fillable = [
   		'segunda_especialidad', 'escuela_id'        
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	 public function escuela() {
      return $this->belongsto(Escuela::class);
    }
}
