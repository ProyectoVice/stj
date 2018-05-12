<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class CalPregraEsc extends Model
{    
    protected $table='cal_pregra_escs';
    protected $fillable=[
    'title','descripcion','color','textcolor','start','end','responsable','escuela_id'
    ];
    //recibe la llave foranea de escuela
    public function escuela() 
    {
      return $this->belongsto(Escuela::class);
  	}  	
}
