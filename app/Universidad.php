<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $table='universidads';
    protected $fillable=[
    'universidad'
    ];
    public function grado_estudios() {
      return $this->hasMany(GradoEstudio::class);
  	}

}
