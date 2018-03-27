<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalPregraEscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cal_pregra_escs', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('f_inicio');
            $table->datetime('f_fin');
            $table->string('actividad');
            $table->string('estado');
            $table->integer('escuela_id')->unsigned();
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
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
        Schema::dropIfExists('cal_pregra_escs');
    }
}
