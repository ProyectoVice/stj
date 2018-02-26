<?php
use Illuminate\Http\Request;
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

Route::resource('inscripcion-general', 'modulos\admision\AdmisionController');
Route::get('departamentos', function () {
    //return view('plantilla.usuario');
    $variable=App\Distrito::find('38')->provincia->departamento;
	return $variable;
});
//Fin RSU
Route::get('probar', function () {
    //return view('plantilla.usuario');
	return view('modulos.rsu.mis_proyectos.crear2');
});

Route::get('hola/{id}',function (Request $request, $id) {
    //return view('plantilla.usuario');
    if ($request->ajax()) {
          $qry=App\RsuLineamiento::join('rsu_ejes','rsu_ejes.id','=','rsu_lineamientos.rsu_eje_id')
                   ->where('rsu_lineamientos.rsu_eje_id',$id)
                   ->select('rsu_lineamientos.id','rsu_lineamientos.lineamiento','rsu_ejes.rsu_eje' )->get();
                return response()->json($qry);
    }
});