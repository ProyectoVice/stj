<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsuComentario extends Model
{
    protected $table='rsu_comentarios';
    protected $fillable=[
		    'comentario',
            'user_id',
            'proyecto_id'
    ];
    public function user(){
    	return belongsto(User::class,'user_id','id');
    }
    public function proyecto(){
    	return belongsto(RsuProyecto::class,'proyecto_id','id');
    }  
}
 			
            