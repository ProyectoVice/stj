<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_users', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('rol_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('estado',1)->default('1');
            $table->primary(['rol_id','user_id']);
            

            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_users');
    }
}
