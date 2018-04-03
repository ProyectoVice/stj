<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargaNoLectiva extends Model
{
    //
    protected $table='carga_no_lectivas';
    protected $fillable=[
    'hora','estado','semestre','docente_id','act_no_lectiva_id'
    ];
    //recibe la llave foranea de actividad no lectiva
    public function act_no_lectiva() 
    {
      return $this->belongsto(ActNoLectiva::class);
  	}   
  	//Recibe la llave de docente
  	public function docente() 
    {
      return $this->belongsto(Docente::class);
  	} 
}