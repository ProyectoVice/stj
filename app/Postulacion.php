<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table='postulacions';
    protected $fillable=[
    'anio', 'nota', 'users_id', 'escuela_modalidad_id', 'postulacion_situacion_id', 'postulacion_preparacion_id', 'postulacion_etapa_id', 'postulacion_ciclo_id', 'programa_id', 'maestria_id', 'doctorado_id', 'segunda_especialidad_id', 'estudios_complementario_id', 'grado_bachiller_id', 'grado_magister_id', 'grado_doctor_id', 'caja_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
    }
    public function escuela_modalidad() {
      return $this->belongsto(EscuelaModalidad::class);
  	}
    public function postulacion_situacion() {
      return $this->belongsto(PostulacionSituacion::class);
    }
    public function postulacion_preparacion() {
      return $this->belongsto(PostulacionPreparacion::class);
    }
    public function postulacion_etapa() {
      return $this->belongsto(PostulacionEtapa::class);
    }
  	public function postulacion_ciclo() {
      return $this->belongsto(PostulacionCiclo::class);
  	}
    public function programa() {
      return $this->belongsto(Programa::class);
    }
    public function maestria() {
      return $this->belongsto(Maestria::class);
    }
    public function doctorado() {
      return $this->belongsto(Doctorado::class);
    }
    public function segunda_especialidad() {
      return $this->belongsto(SegundaEspecialidad::class);
    }
    public function estudios_complementario() {
      return $this->belongsto(EstudioComplementario::class);
    }
    public function grado_bachiller() {
      return $this->belongsto(GradoBachiller::class);
    }
    public function grado_magister() {
      return $this->belongsto(GradoMagister::class);
    }
    public function grado_doctor() {
      return $this->belongsto(GradoDoctor::class);
    }
    public function caja() {
      return $this->belongsto(Caja::class);
    }
  	  	
    
}
