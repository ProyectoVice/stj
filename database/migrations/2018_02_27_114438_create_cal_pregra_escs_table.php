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
        Schema::create('calendarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('descripcion',600);
            $table->string('color')->nullable();
            $table->string('textColor')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('responsable');
            $table->integer('escuela_id')->unsigned()->nullable();
            $table->integer('es_general')->unsigned();
            //$table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
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
        Schema::dropIfExists('calendarios');
    }
}
