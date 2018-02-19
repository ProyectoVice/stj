<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table='docentes';
    protected $primaryKey='user_id';
    protected $fillable=[
    'escuela_id','docente_categoria_id','docente_condicion_id','docente_dedicacion_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function escuela() {
      return $this->belongsto(Escuela::class,'escuela_id','id');
  	}
  	public function categoria() {
      return $this->belongsto(DocenteCategoria::class,'docente_categoria_id','id');
  	}
  	public function condicion() {
      return $this->belongsto(DocenteCondicion::class,'docente_condicion_id','id');
  	}
  	public function dedicacion() {
      return $this->belongsto(DocenteDedicacion::class,'docente_dedicacion_id','id');
  	}
}
