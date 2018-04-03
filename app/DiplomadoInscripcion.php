<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiplomadoInscripcion extends Model
{
    protected $table='diplomado_inscripcions';
    protected $fillable=[
    'users_id', 'diplomado_id', 'caja_id'
    ];
    public function user() {
    return $this->belongsto(User::class);
  	}
  	public function diplomado() {
    return $this->belongsto(Diplomado::class);
  	}
  	public function caja() {
    return $this->belongsto(Caja::class);
  	}
}
