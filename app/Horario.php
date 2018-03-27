<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table='horarios';
    protected $fillable=[
    'hora','dia','escuela_id','carga_lectiva_id','aula_id','taller_id','laboratorio_id','biblioteca_id','centro_de_computo_id','auditorio_id'
    ];
    //recibe las llaves foraneas de escuela, carga lectiva, aula, taller, laboratorio, biblioteca, centro de computo, auditorio
    public function escuela() 
    {
      return $this->belongsto(Escuela::class);
    }
    public function carga_lectiva() 
    {
      return $this->belongsto(CargaLectiva::class);
    }
    public function aula() 
    {
      return $this->belongsto(Aula::class);
    }
    public function taller() 
    {
      return $this->belongsto(Taller::class);
    }
    public function laboratorio() 
    {
      return $this->belongsto(Laboratorio::class);
    }
    public function biblioteca() 
    {
      return $this->belongsto(Biblioteca::class);
    }
    public function centro_de_computo() 
    {
      return $this->belongsto(CentroDeComputo::class);
    }
    public function auditorio() 
    {
      return $this->belongsto(Auditorio::class);
    }
}
