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
            ['dni' => '00000001', 'nombres' => 'Administrador ', 'apellido_paterno' => 'APaterno', 'apellido_materno' => 'Amaterno',
            'email' => '00000001@hotmail.com', 'password' => bcrypt('00000001'), 'dependencia_id_depende' => null,],//1
            ['dni' => '00000002', 'nombres' => 'Docente BD', 'apellido_paterno' => 'APaterno2', 'apellido_materno' => 'Amaterno2',
            'email' => '00000002@hotmail.com', 'password' => bcrypt('00000002'), 'dependencia_id_depende' => null,],//2
            ['dni' => '00000003', 'nombres' => 'Estudiante', 'apellido_paterno' => 'APaterno3', 'apellido_materno' => 'Amaterno3',
            'email' => '00000003@hotmail.com','password' => bcrypt('00000003'), 'dependencia_id_depende' => null,],//3
            ['dni' => '48315690', 'nombres' => 'Saúl', 'apellido_paterno' => 'Escandón', 'apellido_materno' => 'Munguía',
            'email' => 'aescandonmunguia@hotmail.com', 'password' => bcrypt('12345678'), 'dependencia_id_depende' => null,],//4 Usuarios Saúl
            [ 'dni' => '44485816', 'nombres' => 'Teddy', 'apellido_paterno' => 'Tafur', 'apellido_materno' => 'Guerra',
            'email' => 'ttafurg@gmail.com', 'password' => bcrypt('pichoncito'), 'dependencia_id_depende' => 30,],//5 Usuario Teddy
            ['dni' => '46181970', 'nombres' => 'Jhonattan', 'apellido_paterno' => 'Carlos', 'apellido_materno' => 'Simon',
            'email' => 'yotacs14@gmail.com', 'password' => bcrypt('yota'), 'dependencia_id_depende' => null,],//6 Usuario Jhonattan
            ['dni' => '00000004', 'nombres' => 'Pepe', 'apellido_paterno' => 'Ramos', 'apellido_materno' => 'Simon',
            'email' => 'pepe@gmail.com', 'password' => bcrypt('00000004'),'dependencia_id_depende' => null,],//
            ['dni' => '00000005', 'nombres' => 'Luciana', 'apellido_paterno' => 'Ramos', 'apellido_materno' => 'Simon',
            'email' => 'cepreval@gmail.com', 'password' => bcrypt('00000005'), 'dependencia_id_depende' => null,],//8
            ['dni' => '00000006', 'nombres' => 'Juanito', 'apellido_paterno' => 'Martel', 'apellido_materno' => 'Lopez',
            'email' => 'juanito@gmail.com', 'password' => bcrypt('00000006'), 'dependencia_id_depende' => null,]//9
         ]);
        //===================================================
        //RolesUsuario Generales

        DB::table('rol_users')->insert([
            ['user_id' => '1', 'rol_id' => '2',], //Administrador General
            ['user_id' => '2', 'rol_id' => '3',], //Docente
            ['user_id' => '3', 'rol_id' => '4',], //Estudiante
            //Roles Saúl
            ['user_id' => '4', 'rol_id' => '2',],
            ['user_id' => '4', 'rol_id' => '3',],
            ['user_id' => '4', 'rol_id' => '4',],
            ['user_id' => '4', 'rol_id' => '5',],
            ['user_id' => '4', 'rol_id' => '6',],
            //roles Tedy
            ['user_id' => '5', 'rol_id' => '2',],
            ['user_id' => '5', 'rol_id' => '30',],
            ['user_id' => '5', 'rol_id' => '31',],
            ['user_id' => '5', 'rol_id' => '32',],
            //roles Jhonattan
            ['user_id' => '6', 'rol_id' => '2',],
            ['user_id' => '6', 'rol_id' => '7',],
            ['user_id' => '6', 'rol_id' => '8',],
            ['user_id' => '6', 'rol_id' => '9',],
            ['user_id' => '6', 'rol_id' => '16',],
            //roles del usuario 7
            ['user_id' => '7', 'rol_id' => '7',],
            ['user_id' => '7', 'rol_id' => '8',],
            //roles del usuario 8
            ['user_id' => '8', 'rol_id' => '7',],
            ['user_id' => '8','rol_id' => '9',]
        ]);

        DB::table('docentes')->insert([
            [ 'user_id'=>'2', 'escuela_id'=>'30', 'docente_categoria_id'=>'1', 'docente_condicion_id'=>'1', 'docente_dedicacion_id'=>'1',
                'dep_academico_id'=>'1', 'h_lectivas'=>'12','h_n_lectivas'=>'12',]
        ]);
        DB::table('estudiantes')->insert([
            ['user_id'=>'3', 'cod_univ'=>'2012000012', 'escuela_id'=>'12', 'estado'=>'1', 'modalidad_ingreso'=>'17',
                'f_ingreso'=>'2012-03-03', 'f_egreso'=>'2017-12-20',]

        ]);
    }
}
