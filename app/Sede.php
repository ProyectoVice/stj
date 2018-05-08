<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table='sedes';
    protected $fillable=[
    'sede', 'distrito_id'
    ];
    
  	public function escuelas_sedes() {
      return $this->hasMany(EscuelaSede::class);
  	}
}
