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
      return $this->belongsto(Sedes::class);
  	}
  	public function escuela() {
      return $this->belongsto(Escuela::class);
  	}
    public function escuela_modalidads(){
      return $this->hasMany(EscuelaModalidad::class);
    }

}
