<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargaLectiva extends Model
{
    //
    protected $table='carga_lectivas';
    protected $fillable=[
    'semestre','estado','elaborar_clase','curso_id','docente_id'
    ];
    //recibe la llave foranea de curso
    public function curso() 
    {
      return $this->belongsto(Curso::class);
  	}   
  	//Recibe la llave de docente
  	public function docente() 
    {
      return $this->belongsto(Docente::class);
  	}
    //hereda la llave foranea de carga lectiva a horario
      public function horarios()
    {
       return $this->hasMany(Horario::class);
    }
    //hereda la llave foranea de calendario de curso
      public function cale_cursos()
    {
       return $this->hasMany(CaleCurso::class);
    }
}
