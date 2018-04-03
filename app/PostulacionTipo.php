<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionTipo extends Model
{
    protected $table='postulacion_tipos';
    protected $fillable=[
    'postulacion_tipo'
    ];

    public function escuela_modalidads() {
      return $this->hasMany(EscuelaModalidad::class);
  	}
}
