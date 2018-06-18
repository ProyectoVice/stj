<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaEstudioPosgrado extends Model
{
    protected $table='programa_estudio_posgrados';
    protected $fillable=[
        'programa_estudio_posgrado','maestria_area_id','dependencia_escuela_id','es_maestria','es_doctorado',
        'es_segunda_especialidad','es_estudio_complementario'
    ];
    public function maestria_area() {
        return $this->belongsto(MaestriaArea::class);
    }
    public function dependencia_escuela() {
        return $this->belongsto(Dependencia::class, 'dependencia_escuela_id','id');
    }

    public static function maestrias($id){
        return ProgramaEstudioPosgrado::where('maestria_area_id','=',$id)->get();
    }
    public function postulacions() {
        return $this->hasMany(Postulacion::class);
    }

}
