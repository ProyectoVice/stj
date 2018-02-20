<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{ 
   protected $table = 'escuelas';
   protected $fillable = [
   		'id',
        'escuela',
        'facultad_id'
    ];

    public function facultad(){
    	return $this->belongsto(Facultad::class);
    }
    public function docentes(){
    	return $this->hasMany(Docente::class,'docente_id','id');
    }
    public function postulaciones() {
      return $this->hasMany(Postulacion::class);
    }
    public function escuela_sedes() {
      return $this->hasMany(EscuelaSede::class);
    }

}
