<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table='docentes';
    protected $primaryKey='user_id';
    protected $fillable=[
    'dependencia_escuela_id','docente_categoria_id','docente_condicion_id','docente_dedicacion_id','dependencia_academico_id',
        'h_lectivas','h_n_lectivas', 'profesion', 'grado_magister','grado_doctor', 'fecha_ingreso','fecha_nombramiento'
    ];

    public function user() 
    {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function dependencia_escuela()
    {
      return $this->belongsto(Dependencia::class,'dependencia_escuela_id','id');
  	}
  	public function categoria() 
    {
      return $this->belongsto(DocenteCategoria::class,'docente_categoria_id','id');
  	}
  	public function condicion() 
    {
      return $this->belongsto(DocenteCondicion::class,'docente_condicion_id','id');
  	}
  	public function dedicacion() 
    {
      return $this->belongsto(DocenteDedicacion::class,'docente_dedicacion_id','id');
  	}
    //recibe la llave de departamento academico
    public function dependencia_academico()
    {
      return $this->belongsto(Dependencia::class,'dependencia_academico_id','id');
    }
    //hereda su llave a Carga no lectiva
    public function carga_no_lectivas() 
    {
      return $this->hasMany(CargaNoLectiva::class);
    }
    //hereda su llave a Carga lectiva
    public function carga_lectivas() 
    {
      return $this->hasMany(CargaLectiva::class);
    }
    public static function getDocentesByDependencia($eap)
    {
        $departamento = DB::select('SELECT dependencia_buscar_direccion_hacia_arriba(' . $eap . ') as direccion')[0];

        if ($departamento->direccion == $eap)
            $doc_query = DB::table('docentes')->select('users.id', 'users.nombres', 'dependencias.dependencia')
                ->join('users', 'users.id', '=', 'docentes.user_id')
                ->join('dependencias', 'dependencias.id', '=', 'docentes.escuela_id')
                ->where('dependencias.id', '=', $eap);
        else {
            $deps = Dependencia::getDependenciasHijosIdForDepartamento($departamento->direccion);
            $doc_query = DB::table('docentes')->select('users.id', 'users.nombres', 'dependencias.dependencia')
                ->join('users', 'users.id', '=', 'docentes.user_id')
                ->join('dependencias', 'dependencias.id', '=', 'docentes.escuela_id')
                ->whereIn('dependencias.id', $deps);
        }
        //dd($departamento);
        $docentes=[];
        /* FIN DE MOVER ESTA FRACCION DE CODIGO A LA TABLA DEPENDENCIA*/
        foreach($doc_query->get() as $d){
            $docentes[$d->dependencia][$d->id]=$d->nombres;
        }
        return $docentes;
    }
}
