<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    //
    protected $table='plan_estudios';
    protected $fillable=[
    'resolucion','archivo','año','escuela_id'
    ];
    //recibe la llave foranea de escuela
    public function escuela() 
    {
      return $this->belongsto(Escuela::class);
  	}
  	//Hereda su llave a cursos
  	public function cursos()
    {
     return $this->hasMany(Curso::class);
    }

    public static function getForSelect($escuela){
        $plan = [];
        $esp = PlanEstudio::select(['anio','resolucion', 'id'])
            ->where('escuela_id', '=', $escuela);
        foreach ($esp->get() as $data){
            $plan[$data->id]=$data->anio.' - '. $data->resolucion;
        }
        return $plan;

    }
}
