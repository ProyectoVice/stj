<?php

namespace App;

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

}
