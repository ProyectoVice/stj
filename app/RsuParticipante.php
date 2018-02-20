<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuParticipante extends Model
{
    protected $table='rsu_participantes';
    protected $primaryKey=['user_id','rsu_proyecto_id'];
    public $incrementing = false;
    protected $fillable=[
    'rsu_responsabilidad_id'
    ];

    public function user(){
    	return belongsto(User::class,'user_id','id')
    } 
}
