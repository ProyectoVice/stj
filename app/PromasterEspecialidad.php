<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromasterEspecialidad extends Model
{
    protected $table='promaster_especialidads';
    protected $fillable=[
    'promaster_especialidad', 'maestria_id'
    ];

    public function maestria() {
      return $this->belongsto(Maestria::class);
    }
    public function promaster_inscripcions(){
    	return $this->hasMany(PromasterInscripcion::class);
    }
}
