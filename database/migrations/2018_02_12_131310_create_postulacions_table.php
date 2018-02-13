<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anio');
            $table->float('nota');
            $table->integer('users_id')->unsigned();
            $table->integer('escuela_id')->unsigned();
            $table->integer('sede_id')->unsigned();
            $table->integer('postulacion_tipo_id')->unsigned();
            $table->integer('modalidad_id')->unsigned();
            $table->integer('postulacion_situacion_id')->unsigned();
            $table->integer('postulacion_preparacion_id')->unsigned();
            $table->integer('postulacion_etapa_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('postulacion_tipo_id')->references('id')->on('postulacion_tipos')->onDelete('cascade');
            $table->foreign('modalidad_id')->references('id')->on('postulacion_modalidads')->onDelete('cascade');
            $table->foreign('postulacion_situacion_id')->references('id')->on('postulacion_situacions')->onDelete('cascade');
            $table->foreign('postulacion_preparacion_id')->references('id')->on('postulacion_preparacions')->onDelete('cascade');
            $table->foreign('postulacion_etapa_id')->references('id')->on('postulacion_etapas')->onDelete('cascade');
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
        Schema::dropIfExists('postulacions');
    }
}
