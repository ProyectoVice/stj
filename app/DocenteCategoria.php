<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteCategoria extends Model
{
    protected $table='docente_categorias';
    protected $fillable=['docente_categoria'];

    public function docentes(){
    	return $this->hasMany(Docente::class,'docente_categoria_id','id');
    }
    
}
