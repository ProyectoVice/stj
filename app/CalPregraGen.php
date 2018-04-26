<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalPregraGen extends Model
{
  protected $table='cal_pregra_gens';
    public $incrementing = false;
    protected $fillable=[
    'id','title','descripcion','color','textcolor','start','end','responsable'
    ];
    //public function proyecto(){
    //	return belongsto(RsuProyecto::class,'rsu_proyecto_id','id');
    }
}
