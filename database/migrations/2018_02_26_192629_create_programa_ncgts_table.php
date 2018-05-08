<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaNcgtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_ncgts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('programa_id');
            $table->string('descripcion');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->integer('horas')->nullable();
            $table->integer('costo_matricula')->nullable();
            $table->integer('costo_modulo_interno')->nullable();
            $table->integer('costo_modulo_externo')->nullable();
            $table->integer('costo_diploma')->nullable();
            $table->integer('numero_modulo')->nullable();
            $table->integer('maestria_id')->nullable();
            $table->integer('estado')->default(1);
            $table->integer('dependencia_id')->unsigned();
            $table->foreign('dependencia_id')->references('id')->on('dependencias')->onDelete('cascade');
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
        Schema::dropIfExists('programa_ncgts');
    }
}