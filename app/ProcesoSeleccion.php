<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcesoSeleccion extends Model
{
    protected $table='proceso_seleccions';
    protected $fillable=[
        'descripcion', 'anio', 'etapa', 'postulacion_ciclo_id', 'programa_id', 'postulacion_modalidad_id', 'descuento'
    ];

    public function postulacion_ciclo() {
        return $this->belongsto(PostulacionCiclo::class);
    }
    public function programa() {
        return $this->belongsto(Programa::class);
    }
    public function postulacion_modalidad() {
        return $this->belongsto(PostulacionModalidad::class);
    }
    public function tarifario_proceso_seleccions() {
        return $this->belongsto(TarifarioProcesoSeleccion::class);
    }
}
