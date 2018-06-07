<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoNcgtDisponible extends Model
{
    protected $table='curso_ncgt_disponibles';
    protected $fillable=[
        'curso_ncgt_id', 'ciclo', 'docente_otro_id', 'programa_ncgt_id'
    ];
    public function programa_ncgt() {
        return $this->belongsto(ProgramaNcgt::class);
    }
    public function curso_ncgt() {
        return $this->belongsto(CursoNcgt::class);
    }
    public function inscripcion_modulo_ncgts() {
        return $this->hasMany(InscripcionModuloNcgt::class);
    }
    public function horarios() {
        return $this->hasMany(Horario::class);
    }
}
