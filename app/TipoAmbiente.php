<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAmbiente extends Model
{
    //
    protected $table='tipo_ambientes';
    protected $fillable=[
    'nombre'
    ];
      //hereda la llave foranea de tipo de ambientes a talleres, aulas, laboratorios, centros de computo, auditorios y bibliotecas
      public function tallers()
    {
       return $this->hasMany(Taller::class);
    }
      public function aulas()
    {
       return $this->hasMany(Aula::class);
    }
      public function laboratorios()
    {
       return $this->hasMany(Laboratorio::class);
    }
      public function centro_de_computos()
    {
       return $this->hasMany(CentroDeComputo::class);
    }
      public function auditorios()
    {
       return $this->hasMany(Auditorio::class);
    }
          public function bibliotecas()
    {
       return $this->hasMany(Biblioteca::class);
    }
}
