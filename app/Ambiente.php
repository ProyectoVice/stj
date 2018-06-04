<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table='ambientes';
    protected $fillable=[
        'ambiente','descripcion','capacidad','ubicación','dependencia_id','tipo_ambiente_id','pabellon_id',
        'es_aula', 'es_taller', 'es_laboratorio', 'es_biblioteca', 'es_centro_computo', 'es_auditorio'
    ];
    //recibe la llave foranea de pabellón
    public function pabellon() {
        return $this->belongsto(Pabellon::class);
    }
    //recibe la llave foranea de escuela
    public function dependencia()
    {
        return $this->belongsto(Dependencia::class);
    }
    //recibe la llave foranea de tipo de ambiente
    public function tipo_ambiente()
    {
        return $this->belongsto(TipoAmbiente::class);
    }
    //hereda la llave foranea de auditorio a horario
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
