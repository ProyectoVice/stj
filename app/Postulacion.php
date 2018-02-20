<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table='colegios';
    protected $fillable=[
    'anio', 'nota', 'users_id', 'escuela_id', 'sede_id', 'postulacion_tipo_id', 'modalidad_id', 'postulacion_situacion_id', 'postulacion_preparacion_id', 'postulacion_etapa_id', 'postulacion_ciclo_id'
    ];

    public function postulacion_modalidad() {
      return $this->belongsto(PostulacionModalidad::class);
  	}
  	public function postulacion_ciclo() {
      return $this->belongsto(PostulacionCiclo::class);
  	}
  	public function postulacion_etapa() {
      return $this->belongsto(PostulacionEtapa::class);
  	}
  	public function postulacion_situacion() {
      return $this->belongsto(PostulacionSituacion::class);
  	}
  	public function postulacion_preparacion() {
      return $this->belongsto(PostulacionPreparacion::class);
  	}
  	public function postulacion_tipo() {
      return $this->belongsto(PostulacionTipo::class);
  	}
  	public function escuela() {
      return $this->belongsto(Escuela::class,'escuela_id','id');
  	}
}
