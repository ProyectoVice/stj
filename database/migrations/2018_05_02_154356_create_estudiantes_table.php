<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->primary('user_id');
            $table->string('cod_univ',10)->unique();
            $table->integer('dependencia_escuela_id')->unsigned();
            $table->string('estado',2)->default('1');
            //1: en curso, 2:retirado, 3: culminado, 4:retirado
            $table->string('modalidad_ingreso',2)->default('17');
            /*
                '1' => 'CENTRO PRE UNIVERSITARIO',
                '2' => 'DEPORTISTAS CALIFICADOS',
                '3' => 'TRASLADO EXTERNO',
                '4' => 'PRIMEROS PUESTOS',
                '5' => 'DISCAPACITADOS',
                '6' => 'EGRESADO CNA APLICACION - UNHEVAL',
                '7' => 'EGRESADO DE COLEGIO AGROPECUARIO MAMR',
                '8' => 'EGRESADO DE COLEGIO MAYOR',
                '9' => 'EXAMEN PREFERENCIAL QUINTO AÑO',
                '10' => 'HIJO DE COMUNIDADES CAMPESINAS/NATIVAS',
                '11' => 'LICENCIADO DE LAS FUERZAS ARMADAS',
                '12' => 'NO ESPECIFICADO',
                '13' => 'OBEC',
                '14' => 'PERSONAL ADMINISTRATIVO - UNHEVAL',
                '15' => 'PROGRAMA BECA 18',
                '16' => 'SEGUNDA OPCION',
                '17' => 'SELECCION GENERAL',
                '18' => 'VICTIMAS DEL TERRORISMO',
                '19' => 'BACHILLER Y/O PROFESIONAL',
                '20' => 'Otros',
            */
            $table->date('f_ingreso')->nullable();
            $table->date('f_egreso')->nullable();
            $table->integer('anio_estudio')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('dependencia_escuela_id')->references('id')->on('dependencias')->onDelete('cascade');
            
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
        Schema::dropIfExists('estudiantes');
    }
}
