<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pabellon extends Model
{
    //
    protected $table='pabellons';
    protected $fillable=[
    'pabellon','descripcion','direccion','referencia'
    ];
      //hereda la llave foranea de pabellón a ambiente
      public function ambientes()
    {
       return $this->hasMany(Ambiente::class);
  	}

}
