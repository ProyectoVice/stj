<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{ 
   protected $table = 'escuelas';
   protected $fillable = [
   		'id',
        'escuela',
        'facultad_id'
    ];

    public function facultad()
    {
    	return $this->belongsto(Facultad::class);
    }
    public function docentes()
    {
    	return $this->hasMany(Docente::class,'docente_id','id');
    }
    public function postulaciones() 
    {
      return $this->hasMany(Postulacion::class);
    }
    public function escuela_sedes() 
    {
      return $this->hasMany(EscuelaSede::class);
    }

    //Se vincula uno a uno al calendario pregrado de escuelas
    public function cal_pregra_esc() 
    {
      return $this->hasOne(CalPregraEsc::class);
    }
    //hereda la llave foranea de escuela a talleres, aulas, laboratorios, centros de computo, auditorios y bibliotecas
      public function tallers()
    {
       return $this->hasMany(Taller::class);
    }
      public function aulas()
    {
       return $this->hasMany(Aula::class);
    }
      public function laboratorios()
    {
       return $this->hasMany(Laboratorio::class);
    }
      public function centro_de_computos()
    {
       return $this->hasMany(CentroDeComputo::class);
    }
      public function auditorios()
    {
       return $this->hasMany(Auditorio::class);
    }
      public function bibliotecas()
    {
       return $this->hasMany(Biblioteca::class);
    } 
    //hereda la llave foranea de escuela a plan de estudios
      public function plan_estudios()
    {
       return $this->hasMany(PlanEstudio::class);
    }
    //hereda la llave foranea de escuela a horario
      public function horarios()
    {
       return $this->hasMany(Horario::class);
    }
}
