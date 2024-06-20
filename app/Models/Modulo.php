<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'codigo', 'dni');
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'cursas', 'modulo_codigo', 'alumno_expediente');
    }
}