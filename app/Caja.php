<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    protected $table='cajas';
    protected $fillable=[
    'num_comprobante', 'fecha_comprobante', 'nombre_cliente', 'dni_cliente', 'detalle', 'importe', 'estado_recibo'
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function inscripcion_alumnos() {
      return $this->hasMany(InscripcionAlumno::class);
  	}
  	public function procapt_inscripcions() {
      return $this->hasMany(ProcaptInscripcion::class);
  	}
  	public function promaster_inscripcions() {
      return $this->hasMany(PromasterInscripcion::class);
  	}
  	public function diplomado_inscripcions() {
      return $this->hasMany(DiplomadoInscripcion::class);
  	}
}
