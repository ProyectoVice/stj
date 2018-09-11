<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActNoLectiva extends Model
{
    //
    protected $table='act_no_lectivas';
    protected $fillable=[
    'actividad','descripcion'
    ];
      //hereda la llave foranea de actividad no lectica carga no lectiva
      public function carga_no_lectiva()
    {
       return $this->hasMany(CargaNoLectiva::class);
    }
    public static function  getAllForSelect(){
        $arr=[];
        $acts= ActNoLectiva::all();
        foreach ($acts as $id=>$act){
            $arr[$id]=$act->actividad;
        }
        return $arr;
    }
}