<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuCalendario extends Model
{
    protected $table='rsu_calendarios';
    public $incrementing = false;
    protected $fillable=[
    'rsu_proyecto_id','actividad','descripcion','fecha'
    ];
    public function proyecto(){
    	return belongsto(RsuProyecto::class,'rsu_proyecto_id','id');
    }

}
