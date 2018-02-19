<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteDedicacion extends Model
{
    protected $table='docente_dedicacions';
    protected $fillable=['docente_dedicacion'];

    public function docentes(){
    	return $this->hasMany(Docente::class);
    }    
}
