<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class ProcesoSeleccion extends Model
{
    protected $table='proceso_seleccions';
    protected $fillable=[
        'descripcion', 'anio', 'etapa', 'ciclo', 'programa_id', 'postulacion_modalidad_id',
        'sede_desentralizada_pre', 'descuento'
    ];
    public function programa() {
        return $this->belongsto(Programa::class);
    }
    public function postulacion_modalidad() {
        return $this->belongsto(PostulacionModalidad::class , 'postulacion_modalidad_id','id');
    }
    public function tarifario_proceso_seleccions() {
        return $this->belongsto(TarifarioProcesoSeleccion::class);
    }
    public static function getProgramaforSelect($id){
        $procesos = [];

        $esp = DB::table('proceso_seleccions')
            ->select(['descripcion', 'proceso_seleccions.id', DB::raw('ifnull(modalidad,"Libre") AS modalidad')])
            ->leftJoin('postulacion_modalidads','postulacion_modalidads.id','=','proceso_seleccions.postulacion_modalidad_id')
            ->where('programa_id', '=', $id);
        foreach ($esp->get() as $data){
            $procesos[$data->descripcion][$data->id]=$data->modalidad;
        }
        return $procesos;
    }
    public static function getProgramaforSelect1($id){
        $procesos = [];

        $esp = DB::table('proceso_seleccions')
            ->select(['descripcion', 'proceso_seleccions.id'])
            ->where('programa_id', '=', $id);
        foreach ($esp->get() as $data){
            $procesos[$data->id]=$data->descripcion;
        }
        return $procesos;
    }
}
