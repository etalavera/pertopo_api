<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LiderDeProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lider_de_proyectos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('proyecto_id')->unsigned();;
            $table->foreign('proyecto_id')->references('id')->on('proyectos');

            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
