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
        DB::table('rols')->insert([
                'rol' => 'PersonalAdmi',
                'descripcion' => 'Personal de Admision',
        ]); 
        DB::table('rols')->insert([
                'rol' => 'AdmiAdmi',
                'descripcion' => 'Administrador Admision',
        ]);
         DB::table('rols')->insert([
                'rol' => 'AdmiCepre',
                'descripcion' => 'Administrador CEPREVAL',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiPos',
                'descripcion' => 'Administrador Escuela de Posgrado',
        ]);
         DB::table('rols')->insert([
                'rol' => 'AdmiSeEs',
                'descripcion' => 'Administrador Segunda Especialidad',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiEsCo',
                'descripcion' => 'Administrador Estudios Complementarios',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiIdiomas',
                'descripcion' => 'Administrador Centro de Idiomas',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiEsDis',
                'descripcion' => 'Administrador Estudios a Distancia',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiDiplomado',
                'descripcion' => 'Administrador Diplomados',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiProcatp',
                'descripcion' => 'Administrador PROCATP',
        ]);
          DB::table('rols')->insert([
                'rol' => 'AdmiPromaster',
                'descripcion' => 'Administrador PROMASTER',
        ]);
          DB::table('rols')->insert([
                'rol' => 'DirecAdmi',
                'descripcion' => 'Director de Admision',
        ]);
          DB::table('rols')->insert([
                'rol' => 'CoordiCepre',
                'descripcion' => 'Coordinador General de CEPREVAL',
        ]);
           DB::table('rols')->insert([
                'rol' => 'PosgradoAdmi',
                'descripcion' => 'Presidente de la Comisión de Admision de Posgrado',
        ]);
           DB::table('rols')->insert([
                'rol' => 'EncarSegunEsEdu',
                'descripcion' => 'Encargado de Segunda Especialidad Educacion',
        ]);
           DB::table('rols')->insert([
                'rol' => 'EncarSegunEsEnf',
                'descripcion' => 'Encargado de Segunda Especialidad Enfermeria',
        ]);
           DB::table('rols')->insert([
                'rol' => 'EncarEstuCom',
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
                'rol' => 'EncargadoDipl',
                'descripcion' => 'Encargado de Diplomados',
        ]);
           DB::table('rols')->insert([
                'rol' => 'EncargadoProc',
                'descripcion' => 'Encargado de PROCATP',
        ]);
           DB::table('rols')->insert([
                'rol' => 'EncargadoProm',
                'descripcion' => 'Encargado de PROMASTER',
        ]);
          //Fin usuarios Jhonattan 
    }
}
