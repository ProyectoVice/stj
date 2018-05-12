<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionModalidad extends Model
{
    protected $table='postulacion_modalidads';
    protected $fillable=[
    'modalidad','tipo_examen'
    ];

    public function procesos_seleccions() {
      return $this->belongsto(ProcesoSeleccion::class);
  	}
}
