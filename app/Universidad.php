<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $table='universidads';
    protected $fillable=[
    'universidad'
    ];
    public function grado_bachillers() {
      return $this->hasMany(GradoBachiller::class);
  	}
  	public function grado_magisters() {
      return $this->hasMany(GradoMagister::class);
  	}
  	public function grado_doctors() {
      return $this->hasMany(GradoDoctor::class);
  	}    
}
