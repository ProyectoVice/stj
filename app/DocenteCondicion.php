<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteCondicion extends Model
{
    protected $table='docente_condicions';
    protected $fillable=['docente_condicion'];

    public function docentes(){
    	return $this->hasMany(Docente::class);
    }
}
