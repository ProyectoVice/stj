<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuCalendario extends Model
{
    protected $table='rsu_calendarios';
    protected $primaryKey='rsu_proyecto_id';
    public $incrementing = false;
    protected $fillable=[
    'actividad','descripcion','fecha'
    ];

}
