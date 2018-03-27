<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuEvidencias extends Model
{
    protected $table='rsu_evidencias';
    protected $fillable=[
    'rsu_proyecto_id','file'
    ];
    public function proyecto(){
    	return belongsto(RsuProyecto::class,'rsu_proyecto_id','id');
    }

}
