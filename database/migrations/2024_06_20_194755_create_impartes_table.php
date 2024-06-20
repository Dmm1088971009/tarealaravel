<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpartesTable extends Migration
{
    public function up()
    {
        Schema::create('impartes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profesor_dni');
            $table->unsignedBigInteger('modulo_codigo');
            $table->foreign('profesor_dni')->references('dni')->on('profesores')->onDelete('cascade');
            $table->foreign('modulo_codigo')->references('codigo')->on('modulos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('impartes');
    }
}
