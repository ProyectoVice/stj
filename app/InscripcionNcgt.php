<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionNcgt extends Model
{
    protected $table = 'inscripcion_ncgts';
   	protected $fillable = [
   		'user_id', 'programa_ncgt_id', 'cancelacion'
    ];
   public function user() {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function programa_ncgt() {
      return $this->belongsto(ProgramaNcgt::class);
  	}
  	public function control_pagos() {
      return $this->hasMany(ControlPago::class);
  	}
    public function inscripcion_modulo_ncgt() {
      return $this->hasMany(InscripcionModuloNcgt::class);
    }
}
