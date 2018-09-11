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

    public static function getAmbientesByFacultad($depende)
    {
        $dependencia = Dependencia::find( $depende);
        $doc_query = \DB::table('ambientes')->select('ambientes.id', 'ambientes.ambiente', 'dependencias.dependencia')
            ->join('dependencias', 'dependencias.id', '=', 'ambientes.dependencia_id')
            ->where('dependencias.id', '=', $dependencia->dependencia_id);
        $ambientes=[];
        /* FIN DE MOVER ESTA FRACCION DE CODIGO A LA TABLA DEPENDENCIA*/
        foreach($doc_query->get() as $d){
            $ambientes[$d->dependencia][$d->id]=$d->ambiente;
        }
        return $ambientes;
    }
    public static function getAmbientesByFacultades($depende)
    {
        $dependencia = Dependencia::find( $depende);
        $doc_query = \DB::table('ambientes')->select('ambientes.id', 'ambientes.ambiente', 'dependencias.dependencia')
            ->join('dependencias', 'dependencias.id', '=', 'ambientes.dependencia_id');
        $ambientes=[];
        /* FIN DE MOVER ESTA FRACCION DE CODIGO A LA TABLA DEPENDENCIA*/
        foreach($doc_query->get() as $d){
            $ambientes[$d->dependencia][$d->id]=$d->ambiente;
        }
        return $ambientes;
    }
}
