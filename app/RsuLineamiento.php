<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuLineamiento extends Model
{
    protected $table='rsu_lineamientos';
    protected $fillable=[
    'rsu_eje_id','lineamiento','descripcion'
    ];

    public function eje(){
        return $this->belongsto(RsuEje::class,'rsu_eje_id','id');
    }

    public function proyectos(){
        return $this->belongsToMany(RsuProyecto::class,'rsu_proy_id');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
    }
}
