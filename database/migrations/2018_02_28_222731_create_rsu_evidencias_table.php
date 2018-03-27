<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsuEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsu_evidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rsu_proyecto_id')->unsigned();
            $table->string('file');
            $table->foreign('rsu_proyecto_id')
            ->references('id')->on('rsu_proyectos')->onDelete('cascade');
                                                                     
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
        Schema::dropIfExists('rsu_evidencias');
    }
}
