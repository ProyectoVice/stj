<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcaptInscripcion extends Model
{
    protected $table='procapt_inscripcions';
    protected $fillable=[
    'users_id', 'procapt_especialidad_id', 'caja_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
    }
    public function procapt_especialidad() {
      return $this->belongsto(ProcaptEspecialidad::class);
    }
    public function caja() {
      return $this->belongsto(Caja::class);
    }

}
