<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
   protected $table = 'dependencias';
   protected $fillable = [
   	'dependencia', 'usuario_id_representante', 'anexo', 'cargo', 'organiza_diplomado', 'es_facultad', 'es_escuela', 'es_posgrado', 'es_direccion', 'es_oficina', 'dependencia_id'
    ];
    public function programa_ncgts() {
      return $this->hasMany(ProgramaNcgt::class);
    }
}
