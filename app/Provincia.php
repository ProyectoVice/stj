<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table='provincias';
    protected $fillable=[
    'provincia','departamento_id'
    ];

    public function departamento() {
      return $this->belongsto(Departamento::class);
  	}
    public function distritos() {
      return $this->hasMany(Distrito::class);
  	}
}
