<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $primaryKey = 'expediente';

    public function modulos()
    {
        return $this->belongsToMany(Modulo::class, 'cursas', 'alumno_expediente', 'modulo_codigo');
    }
}

