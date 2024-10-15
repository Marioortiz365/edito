<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearAutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('au_nombre',40);
            $table->String('au_apellido',40);
            $table->String('telefono',20);
            $table->String('calle',50);
            $table->String('ciudad',50);
            $table->String('estado',40);
            $table->String('pais',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autores');
    }
}
