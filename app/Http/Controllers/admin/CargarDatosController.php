<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

//Modelos
use App\User;
use App\Estudiante;
use App\RolUser;
use App\Docente;
use App\Dependencia;
use App\DocenteCategoria;
use App\DocenteCondicion;
use App\DocenteDedicacion;

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
                     $this->actualizar_usuario($user_id,$value); //si ya existe el usuario ACTUALIZAMOS Fnac
                  	$buscarIdEstudiante=Estudiante::where('user_id',$sensorUser->id)->first();
	                  //Si NO existe agregamos
	                  if(!$buscarIdEstudiante){
                        $this->roles_usuario($id_user,array('4')); //enviamos ID y los roles y usuarios
	                  	$return = $this->nuevo_estudiante($sensorUser->id,$value); echo $return;
	                  }
	                  continue; //saltamos el bucle
                  }
                  //En caso contrario, registramos el usuario (sus roles) y el estudiante
                  $id_user=$this->nuevo_usuario($value);
                  $this->roles_usuario($id_user,array('4')); //enviamos ID y los roles y usuarios
                  	$return=$this->nuevo_estudiante($id_user,$value); echo $return;
            }
        });
         echo "Exito, se cargaron los datos estudiantes";
      }

      public function docentes(){
        \Excel::load('cargar_datos/docentes.xlsx',function($archivo){
            $result=$archivo->get(); 
            foreach ($result as $key => $value) {
            	//------- Verificamos si ya existe el DNI Registrado
                  $sensorUser=User::where('dni',$value->dni)->first();
                  if($sensorUser){//Si existe revisamos que esté registrado sus datos en la tabla Docentes y actualizamos, saltamos el bucle 
                        $this->actualizar_usuario($sensorUser->id,$value);
                  		$buscarDocente=Docente::where('user_id',$sensorUser->id)->first();
                  	if($buscarDocente){//Si ya existe el docente, solo actualizamos
                        $this->roles_usuario($buscarDocente->user_id,array('3')); //Actualizar rol
                  		$this->actualizar_docente($buscarDocente->user_id,$value); //------------------------------------------------------------------
                  		continue;
                  	}else{ //si no existe registramos al docente (podría funcionar sin el ELSE por el "continue")
                        $this->roles_usuario($id_user,array('3')); //enviamos ID y los roles y usuarios
                  		$return=$this->nuevo_docente($sensorUser->id,$value);
                  		echo $return;
                     	continue; //saltamos el bucle
                  	}
                  }else{
	                //-------- Si NO existe el DNI del usuario (en este caso no uso el ELSE, ya que no llegaría hasta aquí de haberse cumplido la sentencia anterior)
	                  $id_user=$this->nuevo_usuario($value);
	                  $this->roles_usuario($id_user,array('3')); //enviamos ID y los roles y usuarios
	                  $return=$this->nuevo_docente($id_user,$value);
	                  echo $return;
	               }
            }
        });
         echo "Exito, se cargaron los datos Docentes!";
      }

		public function nuevo_usuario($value){
      	$usuario=new User;
	      $usuario->apellido_paterno=$value->paterno;
    	   $usuario->apellido_materno=$value->materno;
      	$usuario->nombres=$value->nombres;
         $usuario->email=$value->dni.'@mail.com'; 
         $usuario->dni=$value->dni;
         $usuario->password = bcrypt($value->dni);
         $usuario->f_nac=$value->fech_nac;
         $usuario->save();
         return $usuario->id;
      }

      public function actualizar_usuario($id_user,$value){
         $usuario=User::find($id_user);
         #$usuario->apellido_paterno=$value->paterno;
         #$usuario->apellido_materno=$value->materno;
         #$usuario->nombres=$value->nombres;
         #$usuario->email=$value->dni.'@mail.com'; 
         #$usuario->dni=$value->dni;
         #$usuario->password = bcrypt($value->dni);
         $usuario->f_nac=$value->fech_nac;
         $usuario->save();
      }

      public function nuevo_estudiante($user_id,$value){
      	$estudiante=new Estudiante;
	      $estudiante->user_id=$user_id;
	      $estudiante->cod_univ=$value->id_alumno;
	      if($this->buscar_id_escuela($value->ep)==null){return 'NO Existe: '.$value->ep.'<br>';}
         $estudiante->escuela_id=$this->buscar_id_escuela($value->ep);
	      $estudiante->anio_estudio=$value->anio_est;
	      $estudiante->save();
	      $estudiante->user_id;
      }
      
      public function actualizar_estudiante($user_id,$value){
      	$usuario=Estudiante::find($user_id);
         //Actualizamos sus datos
         $usuario->anio_estudio=$value->anio_est;
         $usuario->save();  
      }
      public function nuevo_docente($user_id,$value){
      	$docente=new Docente;
         //Actualizamos sus datos
         $docente->user_id=$user_id;
         if($this->buscar_id_escuela($value->ep)==null){return 'NO Existe: '.$value->ep.'<br>';}
         $docente->escuela_id=$this->buscar_id_escuela($value->ep);
         $docente->docente_categoria_id=$this->buscar_id_categoria_docente($value->categoria);
         $docente->docente_condicion_id=$this->buscar_id_condicion_docente($value->condicion);
         $docente->docente_dedicacion_id=$this->buscar_id_dedicacion_docente($value->dedicacion);
         # $docente->dependencia_academico_id=$this->buscar_id_dependencia_academico($value);
         # $docente->h_lectivas=$value->h_lectivas;
         # $docente->h_n_lectivas=$value->h_n_lectivas;
         # $docente->h_n_lectivas=$value->h_n_lectivas;
         $docente->save();  
      }

      public function actualizar_docente($user_id,$value){
      	$docente= Docente::find($user_id);
         //Actualizamos sus datos
         $docente->escuela_id=$this->buscar_id_escuela($value->ep);
         if($this->buscar_id_escuela($value->ep)==null){return '<br>NO Existe-'.$value->ep;}
         $docente->docente_categoria_id=$this->buscar_id_categoria_docente($value->categoria);
         $docente->docente_condicion_id=$this->buscar_id_condicion_docente($value->condicion);
         $docente->docente_dedicacion_id=$this->buscar_id_dedicacion_docente($value->dedicacion);
         # $docente->dependencia_academico_id=$this->buscar_id_dependencia_academico($value);
         # $docente->h_lectivas=$value->h_lectivas;
         # $docente->h_n_lectivas=$value->h_n_lectivas;
         # $docente->h_n_lectivas=$value->h_n_lectivas;
         $docente->save();  
      }

      public function roles_usuario($user_id,$roles){
         //si ya existe el rol y usuario
      	foreach ($roles as $rol) {
            $rolUser=RolUser::where('rol_id',$rol)->where('user_id',$user_id)->first();
            if($rolUser){//si ya existe solo actualizamos el estado
              $rolUser->estado='1';
            }else{//si no existe registramos
               $rolUser=new RolUser;
               $rolUser->rol_id=$rol;
               $rolUser->user_id=$user_id;
               $rolUser->estado='1';
            }
      		$rolUser->save();
      	}
      }

      public function buscar_id_escuela($ep){
      	$escuelaProfesional=Dependencia::where('dependencia',$ep)->where('es_escuela','1')->first();
      	if ($escuelaProfesional) {return $escuelaProfesional->id;}else{return null;}
      }
      public function buscar_id_categoria_docente($cat){
      	$categoria=DocenteCategoria::where('docente_categoria',$cat)->first();
      	if ($categoria) {
      		return $categoria->id;
      	}
      		return null;
      }
      public function buscar_id_condicion_docente($cond){
      	$condicion=DocenteCondicion::where('docente_condicion',$cond)->first();
      	if ($condicion) {
      		return $condicion->id;
      	}else{
      		return null;
      	}
      	
      }
       public function buscar_id_dedicacion_docente($ded){
      	$dedicacion=DocenteDedicacion::where('docente_dedicacion',$ded)->first();
      	if($dedicacion){
      		return $dedicacion->id;
      	}else return null;
      }
      public function buscar_id_dependencia_academico($cond){
      	$depAcad=Dependencia::where('dependencia',$ep)->where('es_dep_ac','1')->first();
      	if($dedicacion){
      		return $depAcad->id;
      	}else{
      		return null;
      	}
      }
}
