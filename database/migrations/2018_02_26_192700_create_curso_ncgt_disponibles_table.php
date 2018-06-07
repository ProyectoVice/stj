<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoNcgtDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_ncgt_disponibles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curso_ncgt_id')->unsigned();
            $table->integer('ciclo')->nullable();//1 ...12
            $table->integer('docente_otro_id')->unsigned()->nullable();
            $table->integer('programa_ncgt_id')->unsigned();
            $table->foreign('programa_ncgt_id')->references('id')->on('programa_ncgts')->onDelete('cascade');
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
        Schema::dropIfExists('curso_ncgt_disponibles');
    }
}
