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
            $table->integer('rsu_proyecto_id')->unsigned();
            $table->primary('rsu_proyecto_id');
            $table->string('actividad');
            $table->string('descripcion',600);
            $table->date('fecha');
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
