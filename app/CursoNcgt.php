<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class CursoNcgt extends Model
{
    protected $table='curso_ncgts';
    protected $fillable=[
        'nombre', 'descripcion'
    ];
    public function curso_ncgt_diponibles() {
        return $this->hasMany(CursoNcgtDisponible::class);
    }
    public static function curso_ncgt_diponibles_por_programa($programa){
        $cursos=DB::table('curso_ncgts')->select('nombre', 'curso_ncgts.id')
            ->join('curso_ncgt_disponibles', 'curso_ncgt_id', '=', 'curso_ncgts.id' )
            ->where('programa_ncgt_id', '=', $programa)->get();
        $return=[];
        foreach ($cursos as $curso){
            $return[$curso->id]= $curso->nombre;
        }
        return $return;
    }

}
