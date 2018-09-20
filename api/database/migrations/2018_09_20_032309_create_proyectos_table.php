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
            $table->string('liderProyecto');
            $table->string('lugar');
            $table->string('municipio');
            $table->string('estado');
            $table->string('hizoElTrato');
            $table->string('nombreOperador');
            $table->string('maquina');
            $table->string('cliente');
            $table->date('fechaInicio');
            $table->date('fechaFin');
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
