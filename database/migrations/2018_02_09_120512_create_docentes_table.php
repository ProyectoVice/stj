<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->primary('user_id');
            $table->integer('escuela_id')->unsigned()->nullable();
            $table->integer('docente_categoria_id')->unsigned();
            $table->integer('docente_condicion_id')->unsigned();
            $table->integer('docente_dedicacion_id')->unsigned();
            $table->integer('dep_academico_id')->unsigned();
            $table->string('h_lectivas')->nullable();//sola para los contratados, los demas se jala de t-dedicacion
            $table->string('h_n_lectivas')->nullable();//sola para los contratados, los demas se jala de t-dedicacion

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('docente_categoria_id')->references('id')->on('docente_categorias')->onDelete('cascade');
            $table->foreign('docente_condicion_id')->references('id')->on('docente_condicions')->onDelete('cascade');
            $table->foreign('docente_dedicacion_id')->references('id')->on('docente_dedicacions')->onDelete('cascade');
            $table->foreign('dep_academico_id')->references('id')->on('dep_academicos')->onDelete('cascade');
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
        Schema::dropIfExists('docentes');
    }
}
