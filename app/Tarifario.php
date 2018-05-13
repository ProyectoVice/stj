<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifario extends Model
{
    protected $table = 'tarifarios';
    protected $fillable = [
        'descripcion', 'monto', 'es_modalidades', 'es_maestria', 'es_doctorado', 'es_modalidad_publico', 'es_modalidad_particular', 'es_libre', 'grupo_seleccion_eap',
        'es_diplomado', 'es_procapt', 'es_promaster', 'es_segundaespecia', 'es_estudioscomple', 'es_estudiosdistancia'
    ];
    public function tarifario_proceso_seleccions() {
        return $this->belongsto(TarifarioProcesoSeleccion::class);
    }
}
