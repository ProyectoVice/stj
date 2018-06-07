<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionModuloNcgtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_modulo_ncgts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscripcion_ncgt_id')->unsigned();
            $table->integer('curso_ncgt_disponible_id')->unsigned();
            $table->float('nota');
            $table->foreign('inscripcion_ncgt_id')->references('id')->on('inscripcion_ncgts')->onDelete('cascade');
            $table->foreign('curso_ncgt_disponible_id')->references('id')->on('curso_ncgt_disponibles')->onDelete('cascade');
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
        Schema::dropIfExists('inscripcion_modulo_ncgts');
    }
}
