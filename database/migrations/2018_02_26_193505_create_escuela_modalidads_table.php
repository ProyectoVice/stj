<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelaModalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuela_modalidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('escuela_sede_id')->unsigned();
            $table->integer('modalidad_id')->unsigned();
            $table->integer('colegio_tipo_id')->unsigned();
            $table->integer('postulacion_tipo_id')->unsigned();
            $table->integer('costo');
            
            $table->foreign('escuela_sede_id')->references('id')->on('escuela_sedes')->onDelete('cascade');
            $table->foreign('modalidad_id')->references('id')->on('postulacion_modalidads')->onDelete('cascade');
            $table->foreign('colegio_tipo_id')->references('id')->on('colegio_tipos')->onDelete('cascade');
            $table->foreign('postulacion_tipo_id')->references('id')->on('postulacion_tipos')->onDelete('cascade');

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
        Schema::dropIfExists('escuela_modalidads');
    }
}
