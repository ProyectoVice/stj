<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargaLectivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_lectivas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestre');
            $table->string('estado')->default('1');
            $table->string('elaborar_clase');
            $table->integer('curso_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('docente_id')->references('user_id')->on('docentes')->onDelete('cascade');
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
        Schema::dropIfExists('carga_lectivas');
    }
}
