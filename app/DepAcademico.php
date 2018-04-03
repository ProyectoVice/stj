<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepAcademico extends Model
{
    //
    protected $table='dep_academicos';
    protected $fillable=[
    'dep_academico','facultad_id'
    ];
    //recibe la llave foranea de facultad
    public function facultad() 
    {
      return $this->belongsto(Facultad::class);
  	}
    //hereda su llave a docentes
    public function docente() 
    {
      return $this->hasMany(Docente::class);
    }
}
