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
                'rol' => 'ZenoSama',
                'descripcion' => 'Super Admin',
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
        //Usuarios Jhonattan
        //para poder acceder al modulo admisión todos tienen que tener primero el rol de PersonalAdmision rol 7
        DB::table('rols')->insert([
                'rol' => 'PersonalAdmision',
                'descripcion' => 'Personal de Admision',
        ]); 
        DB::table('rols')->insert([
                'rol' => 'Administrador Admision',
                'descripcion' => 'Administrador Admision',
        ]);
         DB::table('rols')->insert([
                'rol' => 'Administrador CEPREVAL',
                'descripcion' => 'Administrador CEPREVAL',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Administrador Posgrado',
                'descripcion' => 'Administrador Escuela de Posgrado',
        ]);
         DB::table('rols')->insert([
                'rol' => 'AdministradorSegundaEEdu',
                'descripcion' => 'Administrador Segunda Especialidad Educacion',
        ]);
         DB::table('rols')->insert([
                'rol' => 'AdministradorSegundaEEnf',
                'descripcion' => 'Administrador Segunda Especialidad Enfermeria',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdministradorEstudiosCompEdu',
                'descripcion' => 'Administrador Estudios Complementarios Educación',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Administrador idiomas',
                'descripcion' => 'Administrador Centro de Idiomas',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Administrador Estudios a Distancia',
                'descripcion' => 'Administrador Estudios a Distancia',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Administrador Diplomados',
                'descripcion' => 'Administrador Diplomados',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Administrador PROCATP',
                'descripcion' => 'Administrador PROCATP',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Administrador PROMASTER',
                'descripcion' => 'Administrador PROMASTER',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Director de Admision',
                'descripcion' => 'Director de Admision',
        ]);
          DB::table('rols')->insert([
                'rol' => 'Coordinador Cepre',
                'descripcion' => 'Coordinador General de CEPREVAL',
        ]);
           DB::table('rols')->insert([
                'rol' => 'PosgradoAdmi',
                'descripcion' => 'Presidente de la Comisión de Admision de Posgrado',
        ]);
           DB::table('rols')->insert([
                'rol' => 'ESegundaEsEdu',
                'descripcion' => 'Encargado de Segunda Especialidad Educacion',
        ]);
           DB::table('rols')->insert([
                'rol' => 'ESegundaEsEnf',
                'descripcion' => 'Encargado de Segunda Especialidad Enfermeria',
        ]);
           DB::table('rols')->insert([
                'rol' => 'EEstudiosComp',
                'descripcion' => 'Encargado de Estudios Complementarios Educacion',
        ]);
           DB::table('rols')->insert([
                'rol' => 'DirectorCI',
                'descripcion' => 'Director de Centro de Idiomas',
        ]);
           DB::table('rols')->insert([
                'rol' => 'DirectorEC',
                'descripcion' => 'Director de Estudios a Distancia y Complementarios',
        ]);
           DB::table('rols')->insert([
                'rol' => 'Encargado de Diplomados',
                'descripcion' => 'Encargado de Diplomados',
        ]);
           DB::table('rols')->insert([
                'rol' => 'Encargado de PROCATP',
                'descripcion' => 'Encargado de PROCATP',
        ]);
           DB::table('rols')->insert([
                'rol' => 'Encargado de PROMASTER',
                'descripcion' => 'Encargado de PROMASTER',
        ]);
          //Fin usuarios Jhonattan 
    }
}
