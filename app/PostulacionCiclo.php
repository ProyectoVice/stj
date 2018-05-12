<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionCiclo extends Model
{
    protected $table='postulacion_ciclos';
    protected $fillable=[
    'postulacion_ciclo'
    ];

    public function proceso_seleccions() {
      return $this->hasMany(ProcesoSeleccion::class);
  	}
}
