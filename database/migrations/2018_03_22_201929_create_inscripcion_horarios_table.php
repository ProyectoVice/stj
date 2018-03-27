<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo');
            $table->time('hora_inicial');
            $table->time('hora_final');
            $table->integer('dias');
            $table->integer('estado_recibo')->default(0);
            $table->integer('inscripcion_curso_disponible_id')->unsigned();
                        
            $table->foreign('inscripcion_curso_disponible_id')->references('id')->on('inscripcion_curso_disponibles')->onDelete('cascade');
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
        Schema::dropIfExists('inscripcion_horarios');
    }
}
