<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearAutorTitulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_titulo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('autores_id');
            $table->unsignedInteger('titulos_id');
            $table->timestamps();
            $table->text('Nota');

            $table->foreign('autores_id')->references('id')->on('autores');
            $table->foreign('titulos_id')->references('id')->on('titulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_titulo');
    }
}
