<?php

use Illuminate\Database\Seeder;

class SedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sedes
        DB::table('sedes')->insert([
                ['sede' => 'HUANUCO', 'distrito_id' => '887',],
                ['sede' => 'CHAVINILLO', 'distrito_id' => '955',],
                ['sede' => 'OBAS', 'distrito_id' => '960',],
                ['sede' => 'MONZON', 'distrito_id' => '925',],
                ['sede' => 'CHAVIN DE PARIARCA', 'distrito_id' => '921',],
                ['sede' => 'LLATA', 'distrito_id' => '919',],
                ['sede' => 'JACAS GRANDE', 'distrito_id' => '922',],
                ['sede' => 'PANAO', 'distrito_id' => '939',],
                ['sede' => 'LA UNION', 'distrito_id' => '906',],
                ['sede' => 'BAÑOS', 'distrito_id' => '949',],
                ['sede' => 'JESUS', 'distrito_id' => '948',],
                ['sede' => 'CODO DEL POZUSO', 'distrito_id' => '944',],
                ['sede' => 'HUACRACHUCO', 'distrito_id' => '936',],
                ['sede' => 'CANCHABAMBA', 'distrito_id' => '916',],
                ['sede' => 'AUCAYACU', 'distrito_id' => '933',],
                ['sede' => 'HUACAR', 'distrito_id' => '902',],
                ['sede' => 'CHURUBAMBA/CP TAMBOGAN', 'distrito_id' => '890',]                             
        ]);
        //escuela sedes
        DB::table('escuela_sedes')->insert([
                ['sede_id' => '1', 'escuela_id' => '1',],
                ['sede_id' => '1', 'escuela_id' => '2',],
                ['sede_id' => '1', 'escuela_id' => '4',],
                ['sede_id' => '1', 'escuela_id' => '5',],
                ['sede_id' => '1', 'escuela_id' => '6',],
                ['sede_id' => '1', 'escuela_id' => '7',],
                ['sede_id' => '1', 'escuela_id' => '8',],
                ['sede_id' => '1', 'escuela_id' => '9',],
                ['sede_id' => '1', 'escuela_id' => '10',],
                ['sede_id' => '1', 'escuela_id' => '11',],
                ['sede_id' => '1', 'escuela_id' => '12',],
                ['sede_id' => '1', 'escuela_id' => '13',],
                ['sede_id' => '1', 'escuela_id' => '14',],
                ['sede_id' => '1', 'escuela_id' => '15',],
                ['sede_id' => '1', 'escuela_id' => '16',],
                ['sede_id' => '1', 'escuela_id' => '17',],
                ['sede_id' => '1', 'escuela_id' => '18',],
                ['sede_id' => '1', 'escuela_id' => '19',],
                ['sede_id' => '1', 'escuela_id' => '20',],
                ['sede_id' => '1', 'escuela_id' => '21',],
                ['sede_id' => '1', 'escuela_id' => '22',],
                ['sede_id' => '1', 'escuela_id' => '23',],
                ['sede_id' => '1', 'escuela_id' => '24',],
                ['sede_id' => '1', 'escuela_id' => '25',],
                ['sede_id' => '1', 'escuela_id' => '26',],
                ['sede_id' => '1', 'escuela_id' => '27',],
                ['sede_id' => '1', 'escuela_id' => '28',],
                ['sede_id' => '2', 'escuela_id' => '1',],
                ['sede_id' => '3', 'escuela_id' => '11',],
                ['sede_id' => '3', 'escuela_id' => '16',],
                ['sede_id' => '4', 'escuela_id' => '1',],
                ['sede_id' => '5', 'escuela_id' => '11',],
                ['sede_id' => '6', 'escuela_id' => '11',],
                ['sede_id' => '6', 'escuela_id' => '27',],
                ['sede_id' => '7', 'escuela_id' => '16',],
                ['sede_id' => '8', 'escuela_id' => '1',],
                ['sede_id' => '8', 'escuela_id' => '11',],
                ['sede_id' => '9', 'escuela_id' => '2',],
                ['sede_id' => '10', 'escuela_id' => '11',],
                ['sede_id' => '10', 'escuela_id' => '28',],
                ['sede_id' => '11', 'escuela_id' => '11',],
                ['sede_id' => '12', 'escuela_id' => '28',],
                ['sede_id' => '13', 'escuela_id' => '11',],
                ['sede_id' => '13', 'escuela_id' => '1',],
                ['sede_id' => '14', 'escuela_id' => '16',],
                ['sede_id' => '15', 'escuela_id' => '9',],
                ['sede_id' => '16', 'escuela_id' => '11',],
                ['sede_id' => '17', 'escuela_id' => '16',]
                           
        ]);
        //escuela_modalidad
       /* DB::table('escuela_modalidads')->insert([
        ['escuela_sede_id' => '1', 'modalidad_id' => '1', 'colegio_tipo_id'=>'2', 'postulacion_tipo_id'=>'1', 'costo'=>'280',],
        ['escuela_sede_id' => '2', 'modalidad_id' => '1', 'colegio_tipo_id'=>'2', 'postulacion_tipo_id'=>'1', 'costo'=>'280',],
        ['escuela_sede_id' => '', 'modalidad_id' => '', 'colegio_tipo_id'=>'', 'postulacion_tipo_id'=>'', 'costo'=>'',]
        ]);*/
      
    }
}
