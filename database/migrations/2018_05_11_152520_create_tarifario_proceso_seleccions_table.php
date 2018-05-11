<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifarioProcesoSeleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifario_proceso_seleccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tarifario_id')->unsigned();
            $table->integer('proceso_selecion_id')->unsigned();

            $table->foreign('tarifario_id')->references('id')->on('tarifarios')->onDelete('cascade');
            $table->foreign('proceso_selecion_id')->references('id')->on('proceso_seleccions')->onDelete('cascade');
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
        Schema::dropIfExists('tarifario_proceso_seleccions');
    }
}
