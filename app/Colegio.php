<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table='colegios';
    protected $fillable=[
    'codigo_modular', 'colegio', 'direccion', 'colegio_tipo', 'distrito_id'
    ];


  	public function distrito() {
      return $this->belongsto(Distrito::class);
  	}
    public function users() {
      return $this->hasMany(User::class, 'colegio_id_iv','id');
    }
}
