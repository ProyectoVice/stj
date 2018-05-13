<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlPago extends Model
{
    protected $table = 'control_pagos';
   	protected $fillable = [
   		'inscripcion_ncgt_id', 'postulacion_id', 'pago_id', 'tipo'
    ];
   	public function inscripcion_ncgt() {
      return $this->belongsto(InscripcionNcgt::class);
  	}
    public function postulacions() {
        return $this->belongsto(Postulacion::class);
    }
  	public function pago() {
      return $this->belongsto(Pago::class);
  	}
}
