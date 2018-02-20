<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulacionModalidad extends Model
{
    protected $table='postulacion_modalidads';
    protected $fillable=[
    'modalidad',
    'postulacion_examen_tipo_id'
    ];

    public function postulacion_examen_tipo() {
      return $this->belongsto(PostulacionExamenTipo::class);
  	}
  	public function postulaciones() {
      return $this->hasMany(Postulacion::class);
  	}
}
