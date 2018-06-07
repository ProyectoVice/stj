<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuLineamientoProyecto extends Model
{
    protected $table='rsu_lineamiento_proyectos';
    public $timestamps = false;
    protected $fillable=[
    'rsu_lin_id','rsu_proy_id'
    ];
}
