<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreProyecto');
            $table->integer('liderProyecto')->unsigned();
            $table->string('lugar');
            $table->string('municipio');
            $table->string('estado');
            $table->integer('hizoElTrato')->unsigned();
            $table->string('operador');
            $table->string('maquina');
            $table->string('cliente');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('metrosEstimados');
            $table->string('metrosEchos');
            $table->string('observaciones');
            $table->foreign('hizoElTrato')->references('id')->on('personas');
            $table->foreign('liderProyecto')->references('id')->on('personas');
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
        Schema::dropIfExists('proyectos');
    }
}
