<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuProyecto extends Model
{
    protected $table='rsu_proyectos';
    protected $fillable=[
    'aprobacion','rsu_nivel_id','titulo','avance','objetivos','justificacion','logros','dificultades','lugar','beneficiarios','obs','culminacion'
    ];
}
