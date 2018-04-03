<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(DistritosTableSeeder::class);
        $this->call(FacultadesTableSeeder::class);
        $this->call(EscuelasTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DatosForUsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DatosForAdmisionTableSeeder::class);
        $this->call(SedesTableSeeder::class);
        $this->call(DatosForRsuTableSeeder::class);   
        $this->call(DatosForEnsenanzaTableSeeder::class);
        $this->call(DatosForColegioTableSeeder::class);
        $this->call(DatosInscripcionTableSeeder::class);
        $this->call(DatosPosgradoTableSeeder::class);   
    }
}