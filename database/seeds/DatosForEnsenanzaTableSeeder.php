<?php

use Illuminate\Database\Seeder;

class DatosForEnsenanzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Actividades no lectivas
        DB::table('act_no_lectivas')->insert([
                ['actividad' => 'Investigación','descripcion' => 'Horas dedicadas a la semana al desarrollo de la Investigación',],
                ['actividad' => 'Responsabilidad Social','descripcion' => 'Horas dedicadas a la semana al desarrollo de la Responsabilidad Social',],
                ['actividad' => 'Tutoría y Consejería','descripcion' => 'Horas dedicadas a la semana al desarrollo de la Tutoría y Consejería',],
                ['actividad' => 'Producción Intelectual','descripcion' => 'Horas dedicadas a la semana al desarrollo de su Producción Intelectual',],
                ['actividad' => 'Comisiones','descripcion' => 'Horas dedicadas a la semana al desarrollo de las actividades y responsabilidades como miembro de alguna comisión',],
                ['actividad' => 'Capacitaciones','descripcion' => 'Horas dedicadas a la semana al desarrollo de capacitaciones de fortalecimiento de capacidades',]                
            ]);

        //
        DB::table('tipo_ambientes')->insert([
                ['nombre' => 'Aula',],
                ['nombre' => 'Taller',],
                ['nombre' => 'Laboratorio',],
                ['nombre' => 'Biblioteca',],
                ['nombre' => 'Centro de Computo',],
                ['nombre' => 'Auditorio',],                
            ]);
    }
}
