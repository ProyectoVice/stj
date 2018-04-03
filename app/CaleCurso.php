<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaleCurso extends Model
{
    //
    protected $table='cale_cursos';
    protected $fillable=[
    'actividad_lectiva','fecha','carga_lectiva_id'
    ];
    //recibe la llave foranea de carga lectiva
    public function carga_lectiva() 
    {
      return $this->belongsto(CargaLectiva::class);
  	}  	
}