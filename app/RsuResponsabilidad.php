<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuResponsabilidad extends Model
{
    protected $table='rsu_responsabilidads';
    protected $fillable=[
    'rsu_responsabilidad'
    ];

    public function participantes(){
         return $this->hasMany(RsuParticipante::class,'rsu_responsabilidad_id','id');
    }
}
