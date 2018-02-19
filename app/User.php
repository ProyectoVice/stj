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
        'nombres','apellido_paterno','apellido_materno','f_nac','dni', 'email', 'password','foto','distrito_nac','domicilio','n_domicilio','tel','cel','tipo_sangre','estado_login','est_civil_id','religion_id'
    ];



    public function docente(){
        return $this->hasOne(Docente::class,'user_id','id');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
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
            case 'PersonalAdmision': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-adjust'></i></button>";break;
            case 'Administrador Admision': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador CEPREVAL': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador Posgrado': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'AdministradorSegundaEEdu': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'AdministradorSegundaEEnf': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'AdministradorEstudiosCompEdu': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador idiomas': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador Estudios a Distancia': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador Diplomados': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador PROCATP': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Administrador PROMASTER': 
               $avatar="<button class='btn btn-success' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Director de Admision': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Coordinador Cepre': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'PosgradoAdmi': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'ESegundaEsEdu': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'ESegundaEsEnf': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'EEstudiosComp': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'DirectorCI': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'DirectorEC': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado de Diplomados': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado de PROCATP': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
            case 'Encargado de PROMASTER': 
               $avatar="<button class='btn btn-pink' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;

            //fin roles jhonattan 

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
