<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuParticipante extends Model
{
    protected $table='rsu_participantes';
    protected $fillable=[
    'user_id','rsu_proyecto_id','rsu_responsabilidad_id'
    ];

    public function user(){
    	return $this->belongsto(User::class,'user_id','id');
    }
    public function proyecto(){
    	return $this->belongsto(RsuProyecto::class,'rsu_proyecto_id','id');
    } 
    public function responsabilidad(){
    	return $this->belongsto(RsuResponsabilidad::class,'rsu_responsabilidad_id','id');
    } 
}
