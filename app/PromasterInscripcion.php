<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromasterInscripcion extends Model
{
    protected $table='promaster_inscripcions';
    protected $fillable=[
    'users_id', 'promaster_especialidad_id', 'caja_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
    }
    public function promaster_especialidad() {
      return $this->belongsto(PromasterEspecialidad::class);
    }
    public function caja() {
      return $this->belongsto(Caja::class);
    }
}
