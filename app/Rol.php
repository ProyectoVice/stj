<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='rols';
    protected $fillable=[
    'rol','descripcion'
    ];
    public function users(){
        return $this->belongsToMany(User::class,'rol_users');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
    }
}
