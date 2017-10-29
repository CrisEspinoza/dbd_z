<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Estado');
            $table->integer('Avance');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Termino');
            $table->integer('Id_Usuario');
            $table->integer('Id_Catastrofe');

            $table->string('Nombre_Evento');
            $table->string('Actividades');
            $table->string('Alimentos');

            /*
            //fk
            $table->integer('Id_Ubicacion')->unsigned()->nullable();
            $table->foreign('Id_Ubicacion')->references('id')->on('ubicacion');

            $table->integer('Id_Medida')->unsigned()->nullable();
            $table->foreign('Id_Medida')->references('id')->on('medidas');
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
        Schema::dropIfExists('evento');
        Schema::enableForeignKeyConstraints();
    }
}
