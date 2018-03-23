<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table='distritos';
    protected $fillable=[
    'distrito','provincia_id'
    ];

    public function provincia() {
      return $this->belongsto(Provincia::class);
  	}
  	public function colegios() {
      return $this->hasMany(Colegio::class);
  	}
    public static function distritos($id){
        return Distrito::where('provincia_id','=',$id)->get();
    }
}
