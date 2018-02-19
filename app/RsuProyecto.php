<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuProyecto extends Model
{
    protected $table='rsu_proyectos';
    protected $fillable=[
    'aprobacion','rsu_nivel_id','titulo','avance','objetivos','justificacion','logros','dificultades','lugar','beneficiarios','obs','culminacion'
    ];
    public function nivel(){
    	return belongsto(RsuNivel::class,'rsu_nivel_id','id')
    } 

    public function lineamientos(){
        return $this->belongsToMany(RsuLineamientoProyecto::class,'rsu_lin_id');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
    }
}
