<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaNcgt extends Model
{
    protected $table='programa_ncgts';
    protected $fillable=[
    'programa_id', 'descripcion', 'fecha_inicio', 'fecha_fin', 'horas', 'costo_matricula', 'costo_modulo_interno', 'costo_modulo_externo', 'costo_diploma', 'numero_modulo', 'maestria_id', 'estado', 'dependencia_id'
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
