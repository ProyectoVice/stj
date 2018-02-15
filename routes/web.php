<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('plantilla.usuario');
	return view('ingreso');
});

// Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');       
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//RSU
Route::resource('rsu-misproyectos', 'modulos\rsu\MisProyectosController');
Route::get('departamentos', function () {
    //return view('plantilla.usuario');
    $variable=App\Distrito::find('38')->provincia->departamento;
	return $variable;
});
//Fin RSU

