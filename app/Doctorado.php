<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorado extends Model
{
    protected $table='doctorados';
    protected $fillable=[
    'doctorado'
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
}
