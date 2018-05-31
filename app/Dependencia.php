<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
   protected $table = 'dependencias';
   protected $fillable = [
   	'dependencia', 'usuario_id_representante', 'anexo', 'cargo', 'organiza_diplomado', 'es_facultad', 'es_escuela', 'es_posgrado',
       'es_direccion', 'es_oficina', 'es_dep_ac', 'es_centro_generador','dependencia_id'
    ];
    public function programa_ncgts() {
      return $this->hasMany(ProgramaNcgt::class);
    }
    public function ambientes() {
        return $this->hasMany(Ambiente::class);
    }

    public static  function getDependenciasHijosId($id){
        $dependencias=Dependencia::select('id')->where('dependencia_id', '=', $id)->get();
        $deps=[];
        foreach($dependencias as $dependencia){
            $deps[]=$dependencia->id;
        }
        return$deps;
    }
    public static  function getDependenciasHijosIdForDepartamento($id){
        $dependencias=Dependencia::select('id')->where('departamento_dependencia_id', '=', $id)->get();
        $deps=[];
        foreach($dependencias as $dependencia){
            $deps[]=$dependencia->id;
        }
        return$deps;
    }
}
