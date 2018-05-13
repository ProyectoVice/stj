<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaNcgt extends Model
{
    protected $table='programa_ncgts';
    protected $fillable=[
    'programa_id', 'descripcion', 'fecha_inicio', 'fecha_fin', 'horas', 'numero_modulo', 'costo_matricula', 'costo_modulo', 'costo_diploma', 'descuento_interno', 'descuento_modulo_total', 'maestria_id', 'estado', 'dependencia_id'
    ];
    public function inscripcion_ncgts() {
      return $this->hasMany(InscripcionNcgt::class);
  	}
    public function modulo_ncgts() {
      return $this->hasMany(ModuloNcgt::class);
    }
  	public function dependencia() {
      return $this->belongsto(Dependencia::class);
  	}
}
