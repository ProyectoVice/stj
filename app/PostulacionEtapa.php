<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionEtapa extends Model
{
    protected $table='postulacion_etapas';
    protected $fillable=[
    'postulacion_etapa'
    ];

    public function postulaciones() {
      return $this->hasMany(Postulacion::class);
  	}
}
