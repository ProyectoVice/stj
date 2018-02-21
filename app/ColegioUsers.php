<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColegioUsers extends Model
{
    protected $table='colegio_users';
    protected $primaryKey='user_id';
    protected $fillable=[
    'anioiv','aniov', 'colegioiv_id', 'colegiov_id'
    ];

    public function user() {
      return $this->belongsto(User::class,'user_id','id');
  	}
  	public function colegioiv() {
      return $this->belongsto(Colegio::class,'colegioiv_id','id');
  	}
  	public function colegiov() {
      return $this->belongsto(Colegio::class,'colegiov_id','id');
  	}  	
  	
}
