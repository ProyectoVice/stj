<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table='horarios';
    protected $fillable=[
    'hora_inicio','hora_fin','dia_inicio','estado_horario','carga_lectiva_id','ambiente_id'
    ];
    //recibe las llaves foraneas de escuela, carga lectiva, aula, taller, laboratorio, biblioteca, centro de computo, auditorio
    public function ambiente()
    {
      return $this->belongsto(Ambiente::class);
    }
    public function carga_lectiva() 
    {
      return $this->belongsto(CargaLectiva::class);
    }

}
