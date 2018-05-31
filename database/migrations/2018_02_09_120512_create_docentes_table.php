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
            $table->integer('dependencia_escuela_id')->unsigned()->nullable();
            $table->integer('docente_categoria_id')->unsigned()->nullable();
            $table->integer('docente_condicion_id')->unsigned()->nullable();
            $table->integer('docente_dedicacion_id')->unsigned()->nullable();
            $table->integer('dependencia_academico_id')->unsigned()->nullable();
            $table->string('h_lectivas')->nullable();//sola para los contratados, los demas se jala de t-dedicacion
            $table->string('h_n_lectivas')->nullable();//sola para los contratados, los demas se jala de t-dedicacion
            $table->string('profesion')->nullable();
            $table->string('grado_magister')->nullable();
            $table->string('grado_doctor')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->date('fecha_nombramiento')->nullable();
            $table->integer('es_jefe_practica')->unsigned()->nullable();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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
