<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionNcgt extends Model
{
    protected $table = 'inscripcion_ncgts';
   	protected $fillable = [
   		'user_id', 'programa_ncgt_id', 'es_interno', 'es_pago_total', 'cancelacion'
    ];

   public static $contador;

   public function user() {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function programa_ncgt() {
      return $this->belongsto(ProgramaNcgt::class, 'programa_ncgt_id','id');
  	}
  	public function control_pagos() {
      return $this->hasMany(ControlPago::class);
  	}
    public function inscripcion_modulo_ncgt() {
      return $this->hasMany(InscripcionModuloNcgt::class);
    }
}
