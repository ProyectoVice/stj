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
      return $this->belongsto(Sedes::class, 'sede_id','id');
  	}
  	public function escuela() {
      return $this->belongsto(Escuela::class,'escuela_id','id');
  	}
}
