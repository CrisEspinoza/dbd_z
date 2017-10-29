<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUbicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Calle');
            $table->string('Comuna');
            $table->string('Ciudad');

            /*
            $table->integer('Id_Catastrofe')->unsigned()->nullable();
            $table->foreign('Id_Catastrofe')->references('id')->on('catastrofe');

            $table->integer('Id_Medida')->unsigned()->nullable();
            $table->foreign('Id_Medida')->references('id')->on('medidas');

            $table->integer('Id_Evento')->unsigned()->nullable();
            $table->foreign('Id_Evento')->references('id)->on('evento');
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('ubicacion');
        Schema::enableForeignKeyConstraints();
    }
}
