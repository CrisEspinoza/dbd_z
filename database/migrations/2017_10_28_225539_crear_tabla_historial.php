<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHistorial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha');

            /*
            //fk
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
        Schema::dropIfExists('historial');
        Schema::enableForeignKeyConstraints();
    }
}
