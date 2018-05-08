<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuCalendario extends Model
{
    protected $table='rsu_calendarios';
    public $timestamps = false;
    protected $fillable=[
    'title','descripcion','color','textColor','start','end','responsable','rsu_proyecto_id'
    ];
}
