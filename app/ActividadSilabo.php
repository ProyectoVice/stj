<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadSilabo extends Model
{
    protected $table='actividad_silabos';
    protected $fillable=[
        'actividad','semana','horario_id'
    ];
    //recibe la llave foranea de pabellón
    public function horario() {
        return $this->belongsto(Horario::class);
    }
}
