<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColegioTipo extends Model
{
    protected $table='colegio_tipos';
    protected $fillable=[
    'colegio_tipo'
    ];

    public function dependencias() {
      return $this->hasMany(ColegioTipoDependencia::class);
  	}
  	public function escuela_modalidads() {
      return $this->hasMany(EscuelaModalidad::class);
  	}
}
