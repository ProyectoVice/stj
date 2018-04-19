<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteDedicacion extends Model
{
    protected $table='docente_dedicacions';
    protected $fillable=['docente_dedicacion','h_lectivas','h_n_lectivas'];

    public function docentes(){
    	return $this->hasMany(Docente::class,'docente_dedicacion_id','id');
    }    
}
