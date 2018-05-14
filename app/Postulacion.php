<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table='postulacions';
    protected $fillable=[
    'nota', 'users_id', 'proceso_seleccion_id', 'escuela_sede_id', 'postulacion_preparacion_id', 'postulacion_tipo',
        'postulacion_situacion_id', 'maestria_id', 'doctorado_id', 'segunda_especialidad_id', 'estudios_complementario_id',
        'grado_bachiller_id', 'grado_magister_id', 'grado_doctor_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
    }
    public function postulacion_situacion() {
      return $this->belongsto(PostulacionSituacion::class);
    }
    public function postulacion_preparacion() {
      return $this->belongsto(PostulacionPreparacion::class);
    }
    public function maestria() {
      return $this->belongsto(Maestria::class);
    }
    public function doctorado() {
      return $this->belongsto(Doctorado::class);
    }
    public function segunda_especialidad() {
      return $this->belongsto(SegundaEspecialidad::class);
    }
    public function estudios_complementario() {
      return $this->belongsto(EstudioComplementario::class);
    }
    public function grado_bachiller() {
      return $this->belongsto(GradoBachiller::class);
    }
    public function grado_magister() {
      return $this->belongsto(GradoMagister::class);
    }
    public function grado_doctor() {
      return $this->belongsto(GradoDoctor::class);
    }
    public function escuela_sede() {
        return $this->belongsto(EscuelaSede::class);
    }
    public function control_pagos() {
        return $this->hasMany(ControlPago::class);
    }
    
}
