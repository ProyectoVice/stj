<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionPreparacion extends Model
{
    protected $table='postulacion_preparacions';
    protected $fillable=[
    'postulacion_preparacion'
    ];

    public function postulaciones() {
      return $this->hasMany(Postulacion::class);
  	}
}
