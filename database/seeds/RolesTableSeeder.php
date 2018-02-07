<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
                'rol' => 'SuperAdmin',
                'descripcion' => 'Zenosama',
        ]);
        DB::table('rols')->insert([
                'rol' => 'Administrador General',
                'descripcion' => 'Administrador General: Gestiona Usuarios',
        ]);
        DB::table('rols')->insert([
                'rol' => 'Docente',
                'descripcion' => 'Docente: El que enseña, dicta cursos en la UNHEVAL',
        ]);
        DB::table('rols')->insert([
                'rol' => 'Estudiante',
                'descripcion' => 'Estudiante: Estudia en la UNHEVAL',
        ]);
        DB::table('rols')->insert([
                'rol' => 'DRSU',
                'descripcion' => 'Director de Responsabilidad Social Universitaria',
        ]);
        DB::table('rols')->insert([
                'rol' => 'DRSU-F',
                'descripcion' => 'Director de Responsabilidad Social Universitaria de Facultad',
        ]);
    }
}
