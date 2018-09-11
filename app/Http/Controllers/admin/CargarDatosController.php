<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

//Modelos
use App\User;
use App\Estudiante;
use App\RolUser;



class CargarDatosController extends Controller
{
    public function index()
    {
        echo "Hola";
    }

    
    public function estudiantes(){
        
        \Excel::load('cargar_datos/estudiantes.xlsx',function($archivo){
            $result=$archivo->get(); 
            foreach ($result as $key => $value) {
            	
            	//------- Si existe el Cod registrado->actulizamos sus datos de estudiante (año est) y continuamos el bucle
                  $sensorEstudiante=Estudiante::where('cod_univ',$value->id_alumno)->first();
                  if($sensorEstudiante){
                     $this->actualizar_estudiante($sensorEstudiante->user_id,$value); 
                     continue; //saltamos el bucle
                  }
                //---------- Si existe el DNI del usuario (y es un dei válido)
                  $sensorUser=User::where('dni',$value->dni)->where('dni','<>','--------')
                  //ponemos la fecha de nacimineto para una mejor verificación
                  ->where('f_nac',$value->fech_nac)->first();
                  if($sensorUser){
                  	$buscarIdEstudiante=Estudiante::where('user_id',$sensorUser->id)->first();
	                  //Si NO existe agregamos
	                  if(!$buscarIdEstudiante){
	                  	$this->nuevo_estudiante($sensorUser->id,$value);
	                  }
	                  continue; //saltamos el bucle
                  }
                  //En caso contrario, registramos el usuario (sus roles) y el estudiante
                  $id_user=$this->nuevo_usuario($value);
                  $this->roles_usuario($id_user,array('4')); //enviamos ID y los roles y usuarios
                  $this->nuevo_estudiante($id_user,$value);

                //--------------------------------------------------------------

            }
        });
         echo "Exito, se cargaron los datos!";
      }

      public function nuevo_estudiante($user_id,$value){
      	$estudiante=new Estudiante;
	      $estudiante->user_id=$user_id;
	      $estudiante->cod_univ=$value->id_alumno;
	      $estudiante->dependencia_escuela_id='5';
	      $estudiante->anio_estudio=$value->anio_est;
	      $estudiante->save();
	      $estudiante->user_id;
      }

      public function nuevo_usuario($value){
      	$usuario=new User;
	      $usuario->apellido_paterno=$value->paterno;
    	   $usuario->apellido_materno=$value->materno;
      	$usuario->nombres=$value->nombres;
         $usuario->email=$value->dni.'@mail.com'; 
         $usuario->dni=$value->dni;
         $usuario->f_nac=$value->fech_nac;
         $usuario->save();
         return $usuario->id;
      }
      public function actualizar_estudiante($user_id,$value){
      	$usuario=Estudiante::find($user_id);
         //Actualizamos sus datos
         $usuario->anio_estudio=$value->anio_est;
         $usuario->save();  
      }

      public function roles_usuario($user_id,$roles){
      	foreach ($roles as $rol) {
      		$rolUser=new RolUser;
      		$rolUser->rol_id=$rol;
      		$rolUser->user_id=$user_id;
      		$rolUser->estado='1';
      		$rolUser->save();
      	}
      }
}
