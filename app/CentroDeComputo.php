<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroDeComputo extends Model
{
    //
    protected $table='centro_de_computos';
    protected $fillable=[
    'Centro_de_computo','Capacidad','Ubicación','escuela_id','tipo_ambiente_id','pabellon_id',
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
    //hereda la llave foranea de centro de computo a horario
      public function horarios()
    {
       return $this->hasMany(Horario::class);
    }
}
