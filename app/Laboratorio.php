<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    //
    protected $table='laboratorios';
    protected $fillable=[
    'Laboratorio','Capacidad','Ubicación','escuela_id','tipo_ambiente_id','pabellon_id',
    ];
    //recibe la llave foranea de pabellón
    public function pabellon() 
    {
      return $this->belongsto(Pabellon::class);
  	}
  	//recibe la llave foranea de escuela
    public function escuela() 
    {
      return $this->belongsto(Escuela::class);
  	}
    //recibe la llave foranea de tipo de ambiente
    public function tipo_ambiente() 
    {
      return $this->belongsto(TipoAmbiente::class);
    }
    //hereda la llave foranea de laboratorio a horario
      public function horarios()
    {
       return $this->hasMany(Horario::class);
    }
}
