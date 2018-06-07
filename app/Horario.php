<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table='horarios';
    protected $fillable=[
    'hora_inicio','hora_fin','dia','estado_horario','carga_lectiva_id','curso_ncgt_disponible_id','ambiente_id'
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
    public function curso_ncgt()
    {
        return $this->belongsto(CursoNcgt::class);
    }

}
