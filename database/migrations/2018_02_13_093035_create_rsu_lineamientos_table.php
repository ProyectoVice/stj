<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsuLineamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsu_lineamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rsu_eje_id')->unsigned();
            $table->string('lineamiento');
            $table->foreign('rsu_eje_id')->references('id')->on('rsu_ejes')->onDelete('cascade');
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
        Schema::dropIfExists('rsu_lineamientos');
    }
}
