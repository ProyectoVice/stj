<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table='pagos';
    protected $fillable=[
    'num_comprobante', 'fecha_comprobante', 'nombre_cliente', 'dni_cliente', 'detalle', 'importe'
    ];
    protected $guarded = ['id'];
    
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function inscripcion_alumnos() {
      return $this->hasMany(InscripcionAlumno::class);
  	}  
  	public function control_pagos() {
      return $this->hasMany(controlPago::class);
    }
}
