<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestria extends Model
{
    protected $table='maestrias';
    protected $fillable=[
    'maestria','maestria_area_id'
    ];
     public function maestria_area() {
      return $this->belongsto(MaestriaArea::class);
  	}

  	public static function maestrias($id){
        return Maestria::where('maestria_area_id','=',$id)->get();
    }
}
