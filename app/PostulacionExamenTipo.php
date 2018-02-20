<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionExamenTipo extends Model
{
    protected $table='postulacion_examen_tipos';
    protected $fillable=[
    'postulacion_examen_tipo'
    ];

    public function postulacion_modalidades() {
      return $this->hasMany(PostulacionModalidad::class);
  	}
}
