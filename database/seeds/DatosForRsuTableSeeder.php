<?php

use Illuminate\Database\Seeder;

class DatosForRsuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ejes
    	DB::table('rsu_ejes')->insert([
                ['eje' => 'Proyección Social','abr' => 'PS',],
                ['eje' => 'Extención Cultural','abr' => 'EC',],
                ['eje' => 'Medio Ambiente','abr' => 'MA'],
        ]);
        //Lineamientos
    	DB::table('rsu_lineamientos')->insert([
         ['rsu_eje_id' => '1','lineamiento' => 'Identidad de las profesiones',],
         ['rsu_eje_id' => '1','lineamiento' => 'Servicio social educativo',],
         ['rsu_eje_id' => '1','lineamiento' => 'Consultoría asesoría e intervención',],
         ['rsu_eje_id' => '1','lineamiento' => 'Prestación de servicios integrales en salud',],
         ['rsu_eje_id' => '2','lineamiento' => 'Cultura',],
         ['rsu_eje_id' => '2','lineamiento' => 'Desarrollo educativo',],
         ['rsu_eje_id' => '3','lineamiento' => 'Prevención de la contaminación',],
         ['rsu_eje_id' => '3','lineamiento' => 'Uso sostenible de los recursos',],
         ['rsu_eje_id' => '3','lineamiento' => 'Mitigación y adaptación al cambio climático',],
         ['rsu_eje_id' => '3','lineamiento' => 'Protección del medio ambiente, biodiversidad y restauración de hábitats naturales',],
        ]);

        //Nivel
        DB::table('rsu_nivels')->insert([
                ['rsu_nivel' => 'Universidad',],
                ['rsu_nivel' => 'Facultad',],
        ]);

        //Responsabilidad de los integrantes
        DB::table('rsu_responsabilidads')->insert([
                ['rsu_responsabilidad' => 'Docente - Responsable',],
                ['rsu_responsabilidad' => 'Docente - Integrante',],
                ['rsu_responsabilidad' => 'Estudiante',],
        ]);
    }
}
