<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcaptEspecialidad extends Model
{
    protected $table='procapt_especialidads';
    protected $fillable=[
    'procapt_especialidad', 'escuela_id'
    ];

    public function escuela() {
      return $this->belongsto(Escuela::class);
    }
    public function procapt_inscripcions(){
    	return $this->hasMany(ProcaptInscripcion::class);
    }
}
