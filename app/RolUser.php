<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolUser extends Model
{
    protected $table='rol_users';
    protected $fillable=[
    'rol_id',
    'user_id'
    ];
}
