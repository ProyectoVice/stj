<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sedes extends Model
{
    protected $table='sedes';
    protected $fillable=[
    'sede'
    ];

    public function postulaciones() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function escuelas_sedes() {
      return $this->hasMany(EscuelaSede::class);
  	}
}
