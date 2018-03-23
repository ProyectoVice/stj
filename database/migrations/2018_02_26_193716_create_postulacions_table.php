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
            $table->integer('escuela_modalidad_id')->unsigned();            
            $table->integer('postulacion_situacion_id')->unsigned();
            $table->integer('postulacion_preparacion_id')->unsigned();
            $table->integer('postulacion_etapa_id')->unsigned();
            $table->integer('postulacion_ciclo_id')->unsigned();

            $table->integer('programa_id')->unsigned();
            $table->integer('maestria_id')->unsigned();
            $table->integer('doctorado_id')->unsigned();
            $table->integer('segunda_especialidad_id')->unsigned();
            $table->integer('estudios_complementario_id')->unsigned();
            $table->integer('grado_bachiller_id')->unsigned();
            $table->integer('grado_magister_id')->unsigned();
            $table->integer('grado_doctor_id')->unsigned();
            $table->integer('caja_id')->unsigned();


            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('escuela_modalidad_id')->references('id')->on('escuela_modalidads')->onDelete('cascade');
            
            $table->foreign('postulacion_situacion_id')->references('id')->on('postulacion_situacions')->onDelete('cascade');
            $table->foreign('postulacion_preparacion_id')->references('id')->on('postulacion_preparacions')->onDelete('cascade');
            $table->foreign('postulacion_etapa_id')->references('id')->on('postulacion_etapas')->onDelete('cascade');
            $table->foreign('postulacion_ciclo_id')->references('id')->on('postulacion_ciclos')->onDelete('cascade');
            $table->timestamps();

            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
            $table->foreign('maestria_id')->references('id')->on('maestrias')->onDelete('cascade');
            $table->foreign('doctorado_id')->references('id')->on('doctorados')->onDelete('cascade');
            $table->foreign('segunda_especialidad_id')->references('id')->on('segunda_especialidads')->onDelete('cascade');
            $table->foreign('estudios_complementario_id')->references('id')->on('estudios_complementarios')->onDelete('cascade');
            $table->foreign('grado_bachiller_id')->references('id')->on('grado_bachillers')->onDelete('cascade');
            $table->foreign('grado_magister_id')->references('id')->on('grado_magisters')->onDelete('cascade');
            $table->foreign('grado_doctor_id')->references('id')->on('grado_doctors')->onDelete('cascade');
            $table->foreign('caja_id')->references('id')->on('cajas')->onDelete('cascade');
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
