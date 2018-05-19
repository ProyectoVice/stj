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
            ['rol' => 'ZenoSama', 'descripcion' => 'Super Admin',],//1
            ['rol' => 'Administrador General','descripcion' => 'Administrador General: Gestiona Usuarios',],//2
            ['rol' => 'Docente', 'descripcion' => 'Docente: El que enseña, dicta cursos en la UNHEVAL',],//3
            ['rol' => 'Estudiante', 'descripcion' => 'Estudiante: Estudia en la UNHEVAL',],//4
            ['rol' => 'DRSU', 'descripcion' => 'Director de Responsabilidad Social Universitaria',],//5
            ['rol' => 'DRSU-F', 'descripcion' => 'Director de Responsabilidad Social Universitaria de Facultad',],//6
            //Roles creados por Jhonattan
            //para poder acceder al modulo admisión todos tienen que tener primero el rol de PersonalAdmision rol 7
            ['rol' => 'PersonalAdmision', 'descripcion' => 'Personal de Admision',],//7
            ['rol' => 'Administrador Admision', 'descripcion' => 'Administrador Admision',],//8
            ['rol' => 'Administrador CEPREVAL', 'descripcion' => 'Administrador CEPREVAL',],//9
            ['rol' => 'Administrador Posgrado', 'descripcion' => 'Administrador Escuela de Posgrado',],//10
            ['rol' => 'Administrador_Segunda_E_Educacion', 'descripcion' => 'Administrador Segunda Especialidad Educacion',],//11
            ['rol' => 'Administrador_Segunda_E_Enfermeria', 'descripcion' => 'Administrador Segunda Especialidad Enfermeria',],//12
            ['rol' => 'Administrador_Estudios_C_Educacion', 'descripcion' => 'Administrador Estudios Complementarios Educación',],//13
            ['rol' => 'Administrador Idiomas', 'descripcion' => 'Administrador Centro de Idiomas',],//14
            ['rol' => 'Administrador Estudios a Distancia', 'descripcion' => 'Administrador Estudios a Distancia',],//15
            ['rol' => 'Administrador Diplomados', 'descripcion' => 'Administrador Diplomados',],//16
            ['rol' => 'Administrador PROCATP', 'descripcion' => 'Administrador PROCATP',],//17
            ['rol' => 'Administrador PROMASTER', 'descripcion' => 'Administrador PROMASTER',],//18
            ['rol' => 'Director de Admision', 'descripcion' => 'Director de Admision',],//19
            ['rol' => 'Coordinador CEPREVAL', 'descripcion' => 'Coordinador General de CEPREVAL',],//20
            ['rol' => 'Posgrado_Admi', 'descripcion' => 'Presidente de la Comisión de Admision de Posgrado',],//21
            ['rol' => 'Encargado_Segunda_E_Educacion', 'descripcion' => 'Encargado de Segunda Especialidad Educacion',],//22
            ['rol' => 'Encargado_Segunda_E_Enfermeria', 'descripcion' => 'Encargado de Segunda Especialidad Enfermeria',],//23
            ['rol' => 'EEstudiosComp', 'descripcion' => 'Encargado de Estudios Complementarios Educacion',],//24
            ['rol' => 'DirectorCI', 'descripcion' => 'Director de Centro de Idiomas',],//25
            [ 'rol' => 'DirectorEC', 'descripcion' => 'Director de Estudios a Distancia y Complementarios',],//26
            ['rol' => 'Encargado de Diplomados', 'descripcion' => 'Encargado de Diplomados',],//27
            ['rol' => 'Encargado de PROCATP', 'descripcion' => 'Encargado de PROCATP',],//28
            [ 'rol' => 'Encargado de PROMASTER', 'descripcion' => 'Encargado de PROMASTER',],//29
            ['rol' => 'UsuarioAsuntos', 'descripcion' => 'Asuntos Académicos: Realiza la Programación',],//30
            [ 'rol' => 'ViceAcademico', 'descripcion' => 'Vicerrector Académico: Visualisa la programación',],//31
            [ 'rol' => 'DirEscuela', 'descripcion' => 'Director de Escuela: Gestiona la Escuela Profesional',]//32
        ]);
    }
}
