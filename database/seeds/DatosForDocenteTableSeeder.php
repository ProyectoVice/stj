<?php

use Illuminate\Database\Seeder;

class DatosForDocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docente_categorias')->insert([
                ['docente_categoria' => 'Principal'],
                ['docente_categoria' => 'Asociado'],
                ['docente_categoria' => 'Auxiliar']        
        ]);

        DB::table('docente_condicions')->insert([
                ['docente_condicion' => 'Nombrado'],
                ['docente_condicion' => 'Contratado']        
        ]);
        DB::table('docente_dedicacions')->insert([
                ['docente_dedicacion' => 'Exclusiva'],
                ['docente_dedicacion' => 'Completa'],
                ['docente_dedicacion' => 'Parcial']         
        ]);

    }
}
