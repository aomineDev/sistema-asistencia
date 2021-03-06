<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

    protected $table = 'estudiantes';

    public function persona() {
        return $this->belongsTo('App\Persona');
    }

    public function semestre() {
        return $this->belongsTo('App\Semestre');
    }
}
