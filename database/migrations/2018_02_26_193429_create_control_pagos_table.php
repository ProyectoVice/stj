<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscripcion_ncgt_id')->unsigned();
            $table->integer('pago_id')->unsigned();
            $table->integer('tipo');
            $table->foreign('inscripcion_ncgt_id')->references('id')->on('inscripcion_ncgts')->onDelete('cascade');
            $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('cascade');
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
        Schema::dropIfExists('control_pagos');
    }
}
