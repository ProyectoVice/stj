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
            $table->integer('ciclo');
            $table->integer('grupo');
            $table->integer('inscripcion_curso_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('inscripcion_nivel_id')->unsigned();
            $table->integer('idioma_tipo_id')->unsigned();

            $table->foreign('inscripcion_curso_id')->references('id')->on('inscripcion_cursos')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('docente_otros')->onDelete('cascade');
            $table->foreign('inscripcion_nivel_id')->references('id')->on('inscripcion_nivels')->onDelete('cascade');
            $table->foreign('idioma_tipo_id')->references('id')->on('idioma_tipos')->onDelete('cascade');

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
