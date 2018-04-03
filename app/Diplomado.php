<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplomado extends Model
{
    protected $table='diplomados';
    protected $fillable=[
    'diplomado', 'organizador', 'fecha_inicio', 'fecha_fin', 'horas', 'escuela_id'
    ];
    public function diplomado_inscripcions() {
      return $this->hasMany(DiplomadoInscripcion::class);
  	}
  	public function escuela() {
      return $this->belongsto(Escuela::class);
  	}
}
