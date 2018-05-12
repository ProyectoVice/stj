<?php

use Illuminate\Database\Seeder;

class DatosForColegioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // Colegio
        DB::table('colegios')->insert([
                ['codigo_modular' => '0597443', 'colegio' => 'HELLEN KELLER', 'direccion' => 'JIRON GUZMAN BARRON 471', 'colegio_tipo' => '1', 'distrito_id' => '88'],
                ['codigo_modular' => '0411736', 'colegio' => '86001 SANTA ROSA DE VITERBO', 'direccion' => 'JIRON RAMON CASTILLA 1219', 'colegio_tipo' => '1', 'distrito_id' => '84'],
                ['codigo_modular' => '735688', 'colegio' => 'CENTRO DE EDUCACION ESPECIAL', 'direccion' => 'AVENIDA SANCHEZ DULANTO 700', 'colegio_tipo' => '2', 'distrito_id' => '109']
                           
            ]);
    }
}
