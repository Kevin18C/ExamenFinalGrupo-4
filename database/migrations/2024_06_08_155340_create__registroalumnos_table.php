<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroalumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_registroalumnos', function (Blueprint $table) {
            $table->id();
            $table->integer('Carnet');
            $table->string('Nombre alumno');
            $table->mail('Correo Institucional');
            $table->integer('Telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_registroalumnos');
    }
}
