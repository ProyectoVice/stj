<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargaNoLectivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_no_lectivas', function (Blueprint $table) {
            $table->increments('id');
            $table->time('hora');
            $table->string('estado');
            $table->string('semestre');
            $table->integer('docente_id')->unsigned();
            $table->integer('act_no_lectiva_id')->unsigned();

            $table->foreign('docente_id')->references('user_id')->on('docentes')->onDelete('cascade');
            $table->foreign('act_no_lectiva_id')->references('id')->on('carga_no_lectivas')->onDelete('cascade');
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
        Schema::dropIfExists('carga_no_lectivas');
    }
}
