<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarifarioProcesoSeleccion extends Model
{
    protected $table = 'tarifario_proceso_seleccions';
    protected $fillable = [
        'tarifario_id', 'proceso_selecion_id'
    ];
    public function tarifario() {
        return $this->belongsto(Tarifario::class);
    }
    public function proceso_seleccion() {
        return $this->belongsto(ProcesoSeleccion::class);
    }
}
