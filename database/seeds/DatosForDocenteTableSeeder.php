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
                ['docente_categoria' => 'ASOCIADO'],
                ['docente_categoria' => 'AUXILIAR'],
                ['docente_categoria' => 'JEFE DE PRACTICA'],
                ['docente_categoria' => 'PRINCIPAL']        
        ]);

        DB::table('docente_condicions')->insert([
                ['docente_condicion' => 'Nombrado'],
                ['docente_condicion' => 'Contratado']        
        ]);
        DB::table('docente_dedicacions')->insert([
                ['docente_dedicacion' => 'DEDICACION EXCLUSIVA','h_lectivas' => '40', 'h_n_lectivas' => '10',],
                ['docente_dedicacion' => 'TIEMPO COMPLETO','h_lectivas' => '40', 'h_n_lectivas' => '10',],
                ['docente_dedicacion' => 'TIEMPO PARCIAL 08 HORAS','h_lectivas' => '8', 'h_n_lectivas' => '1',],
                ['docente_dedicacion' => 'TIEMPO PARCIAL 12 HORAS','h_lectivas' => '12', 'h_n_lectivas' => '1',],         
                ['docente_dedicacion' => 'TIEMPO PARCIAL 16 HORAS','h_lectivas' => '16', 'h_n_lectivas' => '1',],
                ['docente_dedicacion' => 'TIEMPO PARCIAL 18 HORAS','h_lectivas' => '18', 'h_n_lectivas' => '1',],
                ['docente_dedicacion' => 'TIEMPO PARCIAL 20 HORAS','h_lectivas' => '20', 'h_n_lectivas' => '1',]
        ]);

    }
}
