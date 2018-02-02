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
        'nombres','apellido_paterno','apellido_materno','dni', 'email', 'password',
    ];

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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
