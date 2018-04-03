<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscuelaModalidad extends Model
{
    protected $table = 'escuela_modalidads';
   protected $fillable = [
   		'escuela_sede_id', 'modalidad_id', 'colegio_tipo_id', 'postulacion_tipo_id', 'costo'
    ];

    public function escuela_sede(){
    	return $this->belongsto(EscuelaSede::class);
    }
    public function postulacion_modalidad(){
    	return $this->belongsto(PostulacionModalidad::class);
    }
    public function colegio_tipo(){
    	return $this->belongsto(ColegioTipo::class);
    }
    public function postulacion_tipo(){
    	return $this->belongsto(PostulacionTipo::class);
    }

    public function postulacions(){
    	return $this->hasMany(Postulacion::class,'docente_id','id');
    }
}
