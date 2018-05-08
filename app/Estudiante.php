<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='estudiantes';
    protected $primaryKey='user_id';
    protected $fillable=['cod_univ','escuela_id','estado',
            //1: en curso, 2:retirado, 3: culminado, 4:retirado
            'modalidad_ingreso',
            /*
                '1' => 'CENTRO PRE UNIVERSITARIO',
                '2' => 'DEPORTISTAS CALIFICADOS',
                '3' => 'TRASLADO EXTERNO',
                '4' => 'PRIMEROS PUESTOS',
                '5' => 'DISCAPACITADOS',
                '6' => 'EGRESADO CNA APLICACION - UNHEVAL',
                '7' => 'EGRESADO DE COLEGIO AGROPECUARIO MAMR',
                '8' => 'EGRESADO DE COLEGIO MAYOR',
                '9' => 'EXAMEN PREFERENCIAL QUINTO AÑO',
                '10' => 'HIJO DE COMUNIDADES CAMPESINAS/NATIVAS',
                '11' => 'LICENCIADO DE LAS FUERZAS ARMADAS',
                '12' => 'NO ESPECIFICADO',
                '13' => 'OBEC',
                '14' => 'PERSONAL ADMINISTRATIVO - UNHEVAL',
                '15' => 'PROGRAMA BECA 18',
                '16' => 'SEGUNDA OPCION',
                '17' => 'SELECCION GENERAL',
                '18' => 'VICTIMAS DEL TERRORISMO',
                '19' => 'BACHILLER Y/O PROFESIONAL',
                '20' => 'Otros',
            */
           'f_ingreso',
           'f_egreso' 
   ];
   public function user() 
   {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function escuela() 
   {
      return $this->belongsto(Escuela::class,'escuela_id','id');
  	}
}
