<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsuCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsu_calendarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rsu_proyecto_id')->unsigned();
            $table->string('title');
            $table->string('descripcion',600);
            $table->string('color')->default('#3A87AD');
            $table->string('textColor')->default('#FFF');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->foreign('rsu_proyecto_id')->references('id')->on('rsu_proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rsu_calendarios');
    }
}
