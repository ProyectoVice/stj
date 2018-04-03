<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcaptEspecialidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procapt_especialidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('procapt_especialidad');
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
        Schema::dropIfExists('procapt_especialidads');
    }
}