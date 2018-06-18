<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoEstudio extends Model
{
    protected $table = 'grado_estudios';
    protected $fillable = [
        'grado','es_bachiller','es_maestria','es_doctorado','universidad_id'
    ];
    public function postulacions() {
        return $this->hasMany(Postulacion::class);
    }
    public function universidad() {
        return $this->belongsto(Universidad::class);
    }
}
