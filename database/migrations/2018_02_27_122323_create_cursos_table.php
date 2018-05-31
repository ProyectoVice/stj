<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->integer('ciclo');
            $table->integer('creditos');
            $table->integer('hteoria');
            $table->integer('hpractica');
            $table->integer('es_general')->nullable();
            $table->integer('es_especifico')->nullable();
            $table->integer('es_especialidad')->nullable();
            $table->integer('es_electivo')->nullable();

            $table->integer('comp_investigacion')->nullable();
            $table->integer('comp_ciudadania')->nullable();
            $table->integer('comp_responsabilidad_soc')->nullable();
            $table->integer('comp_experiencia_pre_prof')->nullable();

            $table->integer('plan_estudio_id')->unsigned()->nullable();
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
        Schema::dropIfExists('cursos');
    }
}
