<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscuelaSede extends Model
{
    protected $table='escuela_sedes';
    protected $fillable=[
    'sede_id', 'escuela_id'
    ];

    public function sede() {
      return $this->belongsto(Sede::class);
  	}
  	public function escuela() {
      return $this->belongsto(Escuela::class);
  	}
    public function postulacions(){
      return $this->hasMany(Postulacion::class);
    }

}
