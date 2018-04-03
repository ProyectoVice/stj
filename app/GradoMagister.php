<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoMagister extends Model
{
    protected $table = 'grado_magisters';
   	protected $fillable = [
   		'grado_magister', 'universidad_id'       
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function universidad() {
      return $this->belongsto(Universidad::class);
    }
}
