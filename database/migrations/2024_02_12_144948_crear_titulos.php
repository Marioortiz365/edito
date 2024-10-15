<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTitulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('nombre',40);
            $table->String('tipo',20);
            $table->String('precio',10);

            $table->unsignedInteger('id_editorial');
            $table->foreign('id_editorial')->references('id')->on('editoriales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulos');
    }
}
