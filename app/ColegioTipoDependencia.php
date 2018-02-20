<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColegioTipoDependencia extends Model
{
    protected $table='colegio_tipo_dependencias';
    protected $fillable=[
    'colegio_tipo_dependencia',
    'colegio_tipo_id'
    ];

    public function colegio_tipo() {
      return $this->belongsto(ColegioTipo::class);
  	}
  	public function colegios() {
      return $this->hasMany(Colegio::class);
  	}
}
