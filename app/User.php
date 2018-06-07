<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres','apellido_paterno','apellido_materno','f_nac','dni', 'email', 'password','foto','distrito_nac','domicilio',
        'n_domicilio','tel','cel','tipo_sangre', 'genero', 'colegio_id_iv', 'colegio_id_v','estado_login','est_civil_id','religion_id'
    ];



    public function docente(){
        return $this->hasOne(Docente::class,'user_id','id');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
    }
    public function est_civil(){
        return $this->belongsto(EstCivil::class,'est_civil_id','id');
    }
     public function religion(){
        return $this->belongsto(Religion::class,'religion_id','id');
    }
    public function distrito(){
      return $this->belongsto(Distrito::class, 'distrito_nac','id');
    }

    public function rsu_participante(){
      return hasOne(RsuParticipante::class,'user_id','id');

    } 
    public function postulacions(){
      return $this->hasMany(Postulacion::class,'user_id','id');
    }

    public function inscripcion_ncgts(){
      return $this->hasMany(InscripcionNcgt::class, 'user_id','id');
    }    
    public function docente_otros(){
        return $this->hasOne(Docente::class,'user_id','id');
    }


    public function roles(){
        return $this->belongsToMany(Rol::class,'rol_users');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
    }

    public function hasRoles(array $rolesFromView){
        foreach ($rolesFromView as $rv) {
            foreach ($this->roles as $rm) {
                if ($rm->rol===$rv) {
                    return true;
                }
            }
        }
        return false;
    }

    public function hasAvatar($rol){
     
      $avatar="<button class='btn btn-inverse' title='Usuario Anónimo'><i class='ace-icon fa fa-user-secret'></i></button>";

        switch ($rol->rol) {
           case 'Administrador General': 
               $avatar="<button class='btn btn-info' title='".$rol->descripcion."'><i class='ace-icon fa fa-laptop'></i></button>";break;
           case 'Docente': 
               $avatar="<button class='btn btn-primary' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
           case 'Estudiante': 
               $avatar="<button class='btn btn-grey' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
           case 'DRSU': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-leaf'></i></button>";break;
           case 'DRSU-F': 
               $avatar="<button class='btn btn-warning' title='".$rol->descripcion."'><i class='ace-icon fa fa-users'></i></button>";break;
            //roles Jhonattan 
            case 'Personal_Admision':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-adjust'></i></button>";break;
            case 'Administrador Admision': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador CEPREVAL': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador Posgrado': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador_Segunda_E_Educacion':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador_Segunda_E_Enfermeria':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador_Estudios_C_Educacion':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador_Idiomas':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador_Estudios_Informaticos':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador Diplomados':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador PROCAPT':
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador PROMASTER': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Director_Admision':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Coordinador_CEPREVAL':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Posgrado_Admi':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado_Segunda_E_Educacion':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado_Segunda_E_Enfermeria':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado_Estudios_Complementarios':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Director_CI':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Director_EC':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado_Diplomados':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado_PROCAPT':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado_PROMASTER':
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Docente_otros':
                $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-lightbulb-o'></i></button>";break;
            //fin roles jhonattan
            //roles Teddy
            case 'UsuarioAsuntos': 
               $avatar="<button class='btn btn-info' title='".$rol->descripcion."'><i class='ace-icon fa fa-folder-open'></i></button>";break;
            case 'ViceAcademico': 
               $avatar="<button class='btn btn-primary' title='".$rol->descripcion."'><i class='ace-icon fa fa-eye'></i></button>";break;
            case 'DirEscuela': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-lightbulb-o'></i></button>";break;
            //fin roles Teddy 

            default: break;
        }
        return $avatar;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
