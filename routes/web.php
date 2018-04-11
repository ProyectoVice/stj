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

Route::group(['prefix' => 'rsu'],function(){
	Route::group(['prefix' => 'mis_proyectos'],function(){
		Route::get('/','modulos\rsu\MisProyectosController@index')->name('rsu.mp.index');
		Route::post('store', 'modulos\rsu\MisProyectosController@store')->name('rsu.mp.store');
		Route::get('datos','modulos\rsu\MisProyectosController@datatables')->name('rsu.mp.datos');
		Route::get('lineas/{id}', 'modulos\rsu\MisProyectosController@lineas')->name('rsu.mp.lineas');
		Route::delete('delete/{id}','modulos\rsu\MisProyectosController@destroy')->name('rsu.mp.delete');
		Route::get('editar/{id}','modulos\rsu\MisProyectosController@edit')->name('rsu.mp.edit');
		Route::put('update/{id}','modulos\rsu\MisProyectosController@update')->name('rsu.mp.update');
		Route::post('img/{id}','modulos\rsu\MisProyectosController@img')->name('rsu.mp.img');
		Route::get('img-delete/{img}/{proy}','modulos\rsu\MisProyectosController@img_delete')->name('rsu.mp.img-d');
		Route::get('calendario/{id}','modulos\rsu\MisProyectosController@cal_index')->name('rsu.mp.cal');
		Route::get('calendario/data/{id}','modulos\rsu\MisProyectosController@cal_date')->name('rsu.mp.cal.date');
		Route::post('calendario/new','modulos\rsu\MisProyectosController@cal_new')->name('rsu.mp.cal-new');
		Route::post('calendario/del','modulos\rsu\MisProyectosController@cal_del')->name('rsu.mp.cal-del');
		Route::post('calendario/act','modulos\rsu\MisProyectosController@cal_act')->name('rsu.mp.cal-act');
		Route::get('calendario/table/{id}','modulos\rsu\MisProyectosController@cal_table')->name('rsu.mp.cal-table');
		Route::get('download/{id}','modulos\rsu\MisProyectosController@download')->name('rsu.mp.dw');
		Route::get('ver/{id}','modulos\rsu\MisProyectosController@ver_detalle')->name('rsu.mp.ver');
	});
        
});

//Route::resource('rsu-misproyectos', 'modulos\rsu\MisProyectosController');
 
//Route::get('rsu-datos', 'modulos\rsu\MisProyectosController@datatables')->name('datos'); 
//Route::post('evidencias/{post}/imagen', 'modulos\rsu\MisProyectosController@evidencias')->name('evidencias');  

//Fin RSU

//Adminsión
Route::group(['prefix' => 'adminsion'],function(){
	Route::group(['prefix' => 'inscripciones'],function(){
		Route::get('/','modulos\admision\AdmisionController@index')->name('adminsion.ins.index');
		Route::post('store', 'modulos\admision\AdmisionController@store')->name('adminsion.ins.store');
		Route::post('validar', 'modulos\admision\AdmisionController@validar')->name('adminsion.ins.validar');
		Route::get('create', 'modulos\admision\AdmisionController@create')->name('adminsion.ins.create');
		Route::get('datos','modulos\admision\AdmisionController@datatables')->name('adminsion.ins.datos');
		//Route::get('lineas/{id}', 'modulos\admision\AdmisionController@lineas')->name('Adminsion.ins.lineas');
		Route::delete('delete/{id}','modulos\admision\AdmisionController@destroy')->name('adminsion.ins.delete');
		Route::get('editar/{id}','modulos\admision\AdmisionController@edit')->name('adminsion.ins.edit');
		Route::put('update/{id}','modulos\admision\AdmisionController@update')->name('adminsion.ins.update');		
	});
        //Route::get('get','ReprogramacionController@get')->name('admin.reprogramacion.get');
        
}); 
/*Route::resource('inscripcion-general', 'modulos\admision\AdmisionController');
Route::get('prov/{id}', 'modulos\admision\AdmisionController@provincia')->name('provincia');
Route::get('dist/{id}', 'modulos\admision\AdmisionController@distrito')->name('distrito');*/   
//Fin Admisión

//Inscripciones-UNHEVAL
Route::resource('unheval', 'modulos\inscripcion\UnhevalController');
Route::get('maar/{id}', 'modulos\inscripcion\UnhevalController@maestria')->name('maestria');
Route::get('prov/{id}', 'modulos\inscripcion\UnhevalController@provincia')->name('provincia');
Route::get('dist/{id}', 'modulos\inscripcion\UnhevalController@distrito')->name('distrito');

//Inscripciones-UNHEVAL
Route::resource('unheval1', 'modulos\inscripcion\ProgramasController');