<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoDoctor extends Model
{
    protected $table = 'grado_doctors';
   	protected $fillable = [
   		'grado_doctor', 'universidad_id'       
    ];
    public function postulacions() {
      return $this->hasMany(Postulacion::class);
  	}
  	public function universidad() {
      return $this->belongsto(Universidad::class);
    }
}
