<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaestriaArea extends Model
{
    protected $table='maestria_areas';
    protected $fillable=[
    'maestria_area'
    ];
    public function maestrias() {
      return $this->hasMany(Maestria::class);
  	}
}
