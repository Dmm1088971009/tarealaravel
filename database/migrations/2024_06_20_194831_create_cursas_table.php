<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursasTable extends Migration
{
    public function up()
    {
        Schema::create('cursas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_expediente');
            $table->unsignedBigInteger('modulo_codigo');
            $table->foreign('alumno_expediente')->references('expediente')->on('alumnos')->onDelete('cascade');
            $table->foreign('modulo_codigo')->references('codigo')->on('modulos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursas');
    }
}
