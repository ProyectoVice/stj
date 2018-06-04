<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->date('dia_inicio');
            $table->integer('estado_horario')->default(1);
            $table->integer('carga_lectiva_id')->unsigned();
            $table->integer('ambiente_id')->unsigned();

            //$table->foreign('carga_lectiva_id')->references('id')->on('carga_lectivas')->onDelete('cascade');

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
        Schema::dropIfExists('horarios');
    }
}
