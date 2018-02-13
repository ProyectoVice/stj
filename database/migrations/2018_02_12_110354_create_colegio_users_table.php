<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegioUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio_users', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->primary('users_id');
            
            $table->integer('anioiv');
            $table->integer('aniov');
            $table->integer('colegioiv_id')->unsigned();
            $table->integer('colegiov_id')->unsigned();
            
            $table->foreign('colegioiv_id')->references('id')->on('colegios')->onDelete('cascade');
            $table->foreign('colegiov_id')->references('id')->on('colegios')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('colegio_users');
    }
}
