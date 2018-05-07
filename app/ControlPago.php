<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlPago extends Model
{
    protected $table = 'control_pagos';
   	protected $fillable = [
   		'inscripcion_ncgt_id', 'pago_id', 'tipo'
    ];
   	public function inscripcion_ncgt() {
      return $this->belongsto(inscripcionNcgt::class);
  	}
  	public function pago() {
      return $this->belongsto(Pago::class);
  	}
}
