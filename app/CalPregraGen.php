<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class CalPregraGen extends Model
{
  protected $table='cal_pregra_gens';
    protected $fillable=[
    'title','descripcion','color','textcolor','start','end','responsable'
    ];    
}