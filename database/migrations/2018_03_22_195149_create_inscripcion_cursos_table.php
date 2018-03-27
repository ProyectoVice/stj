<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inscripcion_curso');
            $table->integer('inscripcion_modulo_id')->unsigned();
                        
            $table->foreign('inscripcion_modulo_id')->references('id')->on('inscripcion_modulos')->onDelete('cascade');
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
        Schema::dropIfExists('inscripcion_cursos');
    }
}
