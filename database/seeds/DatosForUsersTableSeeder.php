<?php

use Illuminate\Database\Seeder;

class DatosForUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Religión
    	DB::table('religions')->insert([
                ['religion' => 'Católico',],
                ['religion' => 'Evangélico',],
                ['religion' => 'Mormón',],
                ['religion' => 'Adventista',],
                ['religion' => 'Otros',],
                ['religion' => 'No Especifica',],
        	]);
    	//Estado Civil
    	DB::table('est_civils')->insert([
                ['est_civil' => 'Soltero(a)',],
                ['est_civil' => 'Casado(a)',],
                ['est_civil' => 'Conviviente',],
                ['est_civil' => 'Separado',],
                ['est_civil' => 'Divorciado(a)',],
                ['est_civil' => 'Viudo',],
                ['est_civil' => 'No Especifica',]
        	]);
    	
    }
}
