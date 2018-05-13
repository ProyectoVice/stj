<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionCursoDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_curso_disponibles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idioma_tipo')->nullable();
            $table->integer('ciclo')->nullable();
            $table->integer('grupo')->nullable();
            $table->integer('inscripcion_curso_id')->unsigned();
            $table->integer('nivel')->nullable();
            $table->integer('docente_otros_user_id')->unsigned();            

            $table->foreign('inscripcion_curso_id')->references('id')->on('inscripcion_cursos')->onDelete('cascade');
            $table->foreign('docente_otros_user_id')->references('user_id')->on('docente_otros')->onDelete('cascade');     
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
        Schema::dropIfExists('inscripcion_curso_disponibles');
    }
}
