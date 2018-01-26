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
        //===================================================
        DB::table('rols')->insert([
                'rol' => 'Docente',
                'descripcion' => 'El que enseña, dicta cursos',
        ]);

        DB::table('rols')->insert([
                'rol' => 'Estudiante',
                'descripcion' => 'lleva cursos',
        ]);
        //===================================================
        DB::table('rol_users')->insert([
                'user_id' => '1',
                'rol_id' => '1',
        ]);

        DB::table('rol_users')->insert([
                'user_id' => '2',
                'rol_id' => '2',
        ]);
    }
}
