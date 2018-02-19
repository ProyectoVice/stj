<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuNivel extends Model
{
    protected $table='rsu_nivels';
    protected $fillable=[
    'rsu_nivel'
    ];

    public function proyectos(){
    	return hasMany(RsuProyecto::class,'rsu_nivel_id','id')
    } 
}
