<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table='colegios';
    protected $fillable=[
    'codigo_modular', 'colegio', 'direccion', 'colegio_tipo_dependencia_id', 'distrito_id'
    ];

    public function colegio_tipo_dependencia() {
      return $this->belongsto(ColegioTipoDependencia::class);
  	}
  	public function distrito() {
      return $this->belongsto(Distrito::class);
  	}
    public function colegioiv_users() {
      return $this->hasMany(ColegioUsers::class, 'colegioiv_id','id');
    }
    public function colegiov_users() {
      return $this->hasMany(ColegioUsers::class, 'colegiov_id','id');
    }
}
