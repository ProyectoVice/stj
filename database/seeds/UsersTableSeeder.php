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
        //Usuarios Saúl
        DB::table('users')->insert([
                ['dni' => '00000001',
                'nombres' => 'Administrador ',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000001@hotmail.com',
                'password' => bcrypt('00000001'),
                ],
                [
                'dni' => '00000002',
                'nombres' => 'Docente ',
                'apellido_paterno' => 'APaterno2',
                'apellido_materno' => 'Amaterno2',
                'email' => '00000002@hotmail.com',
                'password' => bcrypt('00000002'),
                ],
                [
                'dni' => '00000003',
                'nombres' => 'Estudiante',
                'apellido_paterno' => 'APaterno3',
                'apellido_materno' => 'Amaterno3',
                'email' => '00000003@hotmail.com',
                'password' => bcrypt('00000003'),
                ],
                [
                'dni' => '48315690',
                'nombres' => 'Saúl',
                'apellido_paterno' => 'Escandón',
                'apellido_materno' => 'Munguía',
                'email' => 'aescandonmunguia@hotmail.com',
                'password' => bcrypt('12345678'),
                ],
                
         ]);     
        //Usuario Teddy
        DB::table('users')->insert([
                'dni' => '44485816',
                'nombres' => 'Teddy',
                'apellido_paterno' => 'Tafur',
                'apellido_materno' => 'Guerra',
                'email' => 'ttafurg@gmail.com',
                'password' => bcrypt('pichoncito'),
                'dependencia_id_depende' => 30,
        ]); 
        //Usuario Jhonattan 
        DB::table('users')->insert([
                'dni' => '46181970',
                'nombres' => 'Jhonattan',
                'apellido_paterno' => 'Carlos',
                'apellido_materno' => 'Simon',
                'email' => 'yotacs14@gmail.com',
                'password' => bcrypt('freedon'),
        ]); 
        DB::table('users')->insert([
                'dni' => '00000004',
                'nombres' => 'Pepe',
                'apellido_paterno' => 'Ramos',
                'apellido_materno' => 'Simon',
                'email' => 'pepe@gmail.com',
                'password' => bcrypt('00000004'),
        ]);
        DB::table('users')->insert([
                'dni' => '00000005',
                'nombres' => 'cepre',
                'apellido_paterno' => 'Ramos',
                'apellido_materno' => 'Simon',
                'email' => 'cepreval@gmail.com',
                'password' => bcrypt('00000005'),
        ]);
        DB::table('users')->insert([
            'dni' => '00000006',
            'nombres' => 'Juanito',
            'apellido_paterno' => 'Martel',
            'apellido_materno' => 'Lopez',
            'email' => 'juanito@gmail.com',
            'password' => bcrypt('00000006'),
        ]);

        //Otros usuarios saúl
         DB::table('users')->insert([
                [//id = 10
                'dni' => '00000010',
                'nombres' => 'DRSU-F',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000010@hotmail.com',
                'password' => bcrypt('00000010'),
                ],
                [//id = 11
                'dni' => '00000011',
                'nombres' => 'DRSU',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000011@hotmail.com',
                'password' => bcrypt('00000011'),
                ]
        ]);
        //===================================================
        //RolesUsuario Generales
            //Administrador General
        DB::table('rol_users')->insert([
            'user_id' => '1',
            'rol_id' => '2',
        ]);
            //Docente
        DB::table('rol_users')->insert([
            'user_id' => '2',
            'rol_id' => '3',
        ]);

        //DRSU-F
        DB::table('rol_users')->insert([
            [
              'user_id' => '10',
              'rol_id' => '3',
            ],
            [
              'user_id' => '10',
              'rol_id' => '6',
            ]
        ]);
        //DRSU
        DB::table('rol_users')->insert([
            [
              'user_id' => '11',
              'rol_id' => '3',
            ],
            [
              'user_id' => '11',
              'rol_id' => '5',
            ]
        ]);

        DB::table('docentes')->insert([
            [//usuario Docente por defecto
             'user_id'=>'2',
             'escuela_id'=>'10',
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dep_academico_id'=>'10',
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente DRSU-F
             'user_id'=>'10',
             'escuela_id'=>'10',
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dep_academico_id'=>'10',
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente DRSU
             'user_id'=>'11',
             'escuela_id'=>'7',
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dep_academico_id'=>'7',
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
        ]);
            //Estudiante
        DB::table('rol_users')->insert([
                'user_id' => '3',
                'rol_id' => '4',
        ]);
        DB::table('estudiantes')->insert([
             'user_id'=>'3',
             'cod_univ'=>'2012000012',
             'escuela_id'=>'12',
             'estado'=>'1',
             'modalidad_ingreso'=>'17',
             'f_ingreso'=>'2012-03-03',
             'f_egreso'=>'2017-12-20',
        ]);
        //Roles Saúl
            //all
        DB::table('rol_users')->insert([
                ['user_id' => '4', 'rol_id' => '2',],
                ['user_id' => '4', 'rol_id' => '3',],
                //['user_id' => '4', 'rol_id' => '4',],
                ['user_id' => '4', 'rol_id' => '5',],
                ['user_id' => '4', 'rol_id' => '6',]
        ]);

        DB::table('docentes')->insert([
             'user_id'=>'4',
             'escuela_id'=>'15',
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dep_academico_id'=>'1',
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
        ]);

            //DRSU
        //DB::table('rol_users')->insert([
                //'user_id' => '5',
                //'rol_id' => '5',
        //]);
            //DRSU-F
        //DB::table('rol_users')->insert([
                //'user_id' => '6',
                //'rol_id' => '6',
        //]);

        //Usuarios Teddy
        DB::table('rol_users')->insert([
    
                 ['user_id' => '5', 'rol_id' => '2',],
                 ['user_id' => '5', 'rol_id' => '30',],
                 ['user_id' => '5', 'rol_id' => '31',],
                 ['user_id' => '5', 'rol_id' => '32',]                
        ]);
        
        //Usuario-Rol Jhonattan 
        DB::table('rol_users')->insert([
    
                 [
                    'user_id' => '6',
                    'rol_id' => '2',
                ],
                [
                    'user_id' => '6',
                    'rol_id' => '7',
                ],
                [
                    'user_id' => '6',
                    'rol_id' => '8',
                ]
        ]);
        DB::table('rol_users')->insert([
    
                 [
                    'user_id' => '7',
                    'rol_id' => '7',
                ],
                 [
                    'user_id' => '7',
                    'rol_id' => '8',
                ]
              
        ]);
           DB::table('rol_users')->insert([
    
                 [
                    'user_id' => '8',
                    'rol_id' => '7',
                ],
                 [
                    'user_id' => '8',
                    'rol_id' => '9',
                ]
              
        ]);
    }
}
