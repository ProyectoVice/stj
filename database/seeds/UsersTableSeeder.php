<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'dni' => '00000001',
                'nombres' => 'MiNombre',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000001@hotmail.com',
                'password' => bcrypt('00000001'),
        ]);
        DB::table('users')->insert([
        		'dni' => '00000002',
                'nombres' => 'MiNombre2',
                'apellido_paterno' => 'APaterno2',
                'apellido_materno' => 'Amaterno2',
                'email' => '00000002@hotmail.com',
                'password' => bcrypt('00000002'),
        ]);
        DB::table('users')->insert([
                'dni' => '00000003',
                'nombres' => 'MiNombre3',
                'apellido_paterno' => 'APaterno3',
                'apellido_materno' => 'Amaterno3',
                'email' => '00000003@hotmail.com',
                'password' => bcrypt('00000003'),
        ]);
        DB::table('users')->insert([
                'dni' => '44485816',
                'nombres' => 'Teddy',
                'apellido_paterno' => 'Tafur',
                'apellido_materno' => 'Guerra',
                'email' => 'ttafurg@gmail.com',
                'password' => bcrypt('pichoncito'),
        ]);   
        //===================================================
        DB::table('rol_users')->insert([
                'user_id' => '1',
                'rol_id' => '2',
        ]);
        DB::table('rol_users')->insert([
                'user_id' => '2',
                'rol_id' => '2',
        ]);
        DB::table('rol_users')->insert([
                'user_id' => '2',
                'rol_id' => '3',
        ]);
        DB::table('rol_users')->insert([
                'user_id' => '2',
                'rol_id' => '4',
        ]);
        DB::table('rol_users')->insert([
                'user_id' => '2',
                'rol_id' => '5',
        ]);
        DB::table('rol_users')->insert([
                'user_id' => '2',
                'rol_id' => '6',
        ]);
        //Usuarios Teddy
        DB::table('rol_users')->insert([

                [
                    'user_id' => '4',
                    'rol_id' => '2',
                ],
                [
                    'user_id' => '4',
                    'rol_id' => '3',
                ],
                [
                    'user_id' => '4',
                    'rol_id' => '4',
                ]
        ]);
    }
}
