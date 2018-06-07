<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table='pagos';
    protected $fillable=[
    'num_comprobante', 'fecha_comprobante', 'dni_cliente', 'nombre_cliente','apellido_paterno', 'apellido_materno',
        'genero', 'est_civil_id', 'tarifario_id', 'importe'
    ];
    protected $guarded = ['id'];
    
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function control_pagos() {
      return $this->hasMany(controlPago::class);
    }
    public function tarifario() {
        return $this->belongsto(Tarifario::class, 'tarifario_id','id');
    }
}
