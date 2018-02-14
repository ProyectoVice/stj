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
        $array = array('Panao', 'Aucayacu','Huacrachuco','Baños','Llata','Dos de mayo','Monzon','Huacaybamba');

        for ($i=0; $i<count($array); $i++) { 
    		DB::table('sedes')->insert([
                'sede' => $array[$i],
        	]);
            }
        DB::table('escuela_sedes')->insert([
                ['sede_id' => '1', 'escuela_id' => '1',],
                ['sede_id' => '1', 'escuela_id' => '5',],
                ['sede_id' => '2', 'escuela_id' => '6',],
                ['sede_id' => '2', 'escuela_id' => '8',],
                ['sede_id' => '3', 'escuela_id' => '3',],
                ['sede_id' => '4', 'escuela_id' => '4',],
                ['sede_id' => '5', 'escuela_id' => '2',],
                ['sede_id' => '6', 'escuela_id' => '10',],
                ['sede_id' => '7', 'escuela_id' => '12',]               
        ]);
    }
}
