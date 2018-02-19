<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuEje extends Model
{
    protected $table='rsu_ejes';
    protected $fillable=[
    'rsu_eje'
    ];

    public function lineamientos(){
        return $this->hasMany(RsuLineamiento::class,'rsu_eje_id','id');
    }
}
