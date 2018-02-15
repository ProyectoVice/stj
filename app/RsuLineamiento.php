<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuLineamiento extends Model
{
    protected $table='rsu_lineamientos';
    protected $fillable=[
    'rsu_eje_id','lineamiento'
    ];
}
