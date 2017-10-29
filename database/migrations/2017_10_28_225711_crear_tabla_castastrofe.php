<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCastastrofe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrofe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Tipo_Catastrofe');

            /*
            //fk
            $table->integer('Id_Ubicacion')->unsigned()->nullable();
            $table->foreign('Id_Ubicacion')->references('id')->on('ubicacion');

            $table->integer('Id_Usuario')->unsigned()->nullable();
            $table->foreign('Id_Usuario')->references('id')->on('users');
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
        Schema::dropIfExists('catastrofe');
        Schema::enableForeignKeyConstraints();

    }
}
