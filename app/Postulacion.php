<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table='postulacions';
    protected $fillable=[
    'nota', 'users_id', 'proceso_seleccion_id', 'escuela_sede_id', 'preparacion', 'postulacion_tipo',
        'situacion', 'programa_estudio_posgrado_id','grado_estudio_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
    }
    public function programa_estudio_posgrado() {
      return $this->belongsto(ProgramaEstudioPosgrado::class);
    }
    public function grado_estudio() {
      return $this->belongsto(GradoEstudio::class);
    }
    public function escuela_sede() {
        return $this->belongsto(EscuelaSede::class);
    }
    public function control_pagos() {
        return $this->hasMany(ControlPago::class);
    }
    
}
