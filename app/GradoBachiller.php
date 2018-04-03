<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoBachiller extends Model
{
    protected $table = 'grado_bachillers';
   	protected $fillable = [
   		'grado_bachiller', 'universidad_id'       
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function universidad() {
      return $this->belongsto(Universidad::class);
    }
}
