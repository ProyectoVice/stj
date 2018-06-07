<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteOtro extends Model
{
    protected $table = 'docente_otros';
    protected $primaryKey='user_id';
   	protected $fillable = [
   		'fecha_ingreso', 'horas'
    ];
    public function curso_ncgts() {
      return $this->hasMany(CursoNcgt::class);
  	}
    public function user()
    {
        return $this->belongsto(User::class,'user_id','id');
    }
}
