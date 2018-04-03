<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionSituacion extends Model
{
    protected $table='postulacion_situacions';
    protected $fillable=[
    'postulacion_situacion'
    ];

    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
}
