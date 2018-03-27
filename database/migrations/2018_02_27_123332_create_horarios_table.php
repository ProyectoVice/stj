<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->time('hora');
            $table->date('dia');
            $table->integer('escuela_id')->unsigned();
            $table->integer('carga_lectiva_id')->unsigned();
            $table->integer('aula_id')->unsigned();
            $table->integer('taller_id')->unsigned();
            $table->integer('laboratorio_id')->unsigned();
            $table->integer('biblioteca_id')->unsigned();
            $table->integer('centro_de_computo_id')->unsigned();
            $table->integer('auditorio_id')->unsigned();

            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('carga_lectiva_id')->references('id')->on('carga_lectivas')->onDelete('cascade');
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->foreign('taller_id')->references('id')->on('tallers')->onDelete('cascade');
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios')->onDelete('cascade');
            $table->foreign('biblioteca_id')->references('id')->on('bibliotecas')->onDelete('cascade');
            $table->foreign('centro_de_computo_id')->references('id')->on('centro_de_computos')->onDelete('cascade');
            $table->foreign('auditorio_id')->references('id')->on('auditorios')->onDelete('cascade');
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
        Schema::dropIfExists('horarios');
    }
}
