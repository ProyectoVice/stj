<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table='facultads';
    protected $fillable=[
    'facultad'

    ];

    public function escuelas()
    {
    	return $this->hasMany(Facultad::class);
    }
    // Hereda su llave a Departamento Académico
    public function dep_academico()
    {
    	return $this->hasMany(DepAcademico::class);
    }
    
}
