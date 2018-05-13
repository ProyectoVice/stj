<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionNcgtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_ncgts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();           
            $table->integer('programa_ncgt_id')->unsigned();
            $table->integer('cancelacion')->default(0);//aun no cancela todo

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('programa_ncgt_id')->references('id')->on('programa_ncgts')->onDelete('cascade');
            
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
        Schema::dropIfExists('inscripcion_ncgts');
    }
}
