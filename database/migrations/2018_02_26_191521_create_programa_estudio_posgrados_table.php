<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaEstudioPosgradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_estudio_posgrados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programa_estudio_posgrado');
            $table->integer('maestria_area_id')->unsigned()->nullable();
            $table->integer('dependencia_escuela_id')->unsigned()->nullable();
            $table->integer('es_maestria')->unsigned()->nullable();
            $table->integer('es_doctorado')->unsigned()->nullable();
            $table->integer('es_segunda_especialidad')->unsigned()->nullable();
            $table->integer('es_estudio_complementario')->unsigned()->nullable();

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
        Schema::dropIfExists('programa_estudio_posgrados');
    }
}
