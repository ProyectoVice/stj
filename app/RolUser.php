<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolUser extends Model
{
    protected $table='rol_users';
    public $timestamps = false;
    protected $fillable=[
    'rol_id',
    'user_id',
    'estado'
    ];
    public function rol() {
      return $this->belongsto(Rol::class);
  	}
    public function user() {
      return $this->belongsto(User::class);
  	}
}
