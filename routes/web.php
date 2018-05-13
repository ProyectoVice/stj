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
		Route::get('ver-file/{id}','modulos\rsu\MisProyectosController@ver_archivos')->name('rsu.mp.ver-file');
		Route::put('informe/subir/{id}','modulos\rsu\MisProyectosController@update_file')->name('rsu.mp.file-up');
		Route::get('equipo/{id}','modulos\rsu\MisProyectosController@equipo_show')->name('rsu.mp.equipo-show');
		Route::get('users/{id}','modulos\rsu\MisProyectosController@equipo_users')->name('rsu.mp.users');
		Route::post('users_n','modulos\rsu\MisProyectosController@equipo_users_new')->name('rsu.mp.users_new');
		Route::get('users_d/{id}','modulos\rsu\MisProyectosController@equipo_users_d')->name('rsu.mp.users_d');

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
		Route::get('create/{dni}', 'modulos\admision\AdmisionController@create')->name('adminsion.ins.create');
		Route::get('listaescuela/{id}', 'modulos\admision\AdmisionController@listaescuela')->name('adminsion.ins.lista');
		Route::post('store', 'modulos\admision\AdmisionController@store')->name('adminsion.ins.store');
		Route::post('validar', 'modulos\admision\AdmisionController@validar')->name('adminsion.ins.validar');		
		Route::get('datos','modulos\admision\AdmisionController@datatables')->name('adminsion.ins.datos');
		//Route::get('lineas/{id}', 'modulos\admision\AdmisionController@lineas')->name('Adminsion.ins.lineas');
		Route::delete('delete/{id}','modulos\admision\AdmisionController@destroy')->name('adminsion.ins.delete');
		Route::get('editar/{id}','modulos\admision\AdmisionController@edit')->name('adminsion.ins.edit');
		Route::put('update/{id}','modulos\admision\AdmisionController@update')->name('adminsion.ins.update');		
	});
        //Route::get('get','ReprogramacionController@get')->name('admin.reprogramacion.get');        
}); 
//Adminsión
Route::group(['prefix' => 'diplomado'],function(){
	Route::group(['prefix' => 'inscripciones'],function(){
		Route::get('/','modulos\diplomado\DiplomadoController@index')->name('diplomado.ins.index');
		Route::post('create', 'modulos\diplomado\DiplomadoController@create')->name('diplomado.ins.create');
		Route::post('store', 'modulos\diplomado\DiplomadoController@store')->name('diplomado.ins.store');
		Route::post('validar', 'modulos\diplomado\DiplomadoController@validar')->name('diplomado.ins.validar');
		Route::post('validar1', 'modulos\diplomado\DiplomadoController@validar_pago')->name('diplomado.ins.validar_pago');
        Route::post('validar2', 'modulos\diplomado\DiplomadoController@validar_descuento')->name('diplomado.ins.validar_descuento');
        Route::get('datos','modulos\diplomado\DiplomadoController@datatables')->name('diplomado.ins.datos');
		Route::delete('delete/{id}','modulos\diplomado\DiplomadoController@destroy')->name('diplomado.ins.delete');
		Route::get('editar/{id}','modulos\diplomado\DiplomadoController@edit')->name('diplomado.ins.edit');
		Route::put('update/{id}','modulos\diplomado\DiplomadoController@update')->name('diplomado.ins.update');			
	});
        //Route::get('get','ReprogramacionController@get')->name('admin.reprogramacion.get');        
});
//Usuarios
Route::group(['prefix' => 'usuario'],function(){
	Route::group(['prefix' => 'nuevo'],function(){
		Route::get('/','Auth\UsersController@index')->name('usuario.nue.index');
		Route::get('datos','Auth\UsersController@datatables')->name('usuario.nue.datos');
		Route::get('create/{dni}', 'Auth\UsersController@create')->name('usuario.nue.create');		
		Route::post('store', 'Auth\UsersController@store')->name('usuario.nue.store');
		Route::post('validar', 'Auth\UsersController@validar')->name('usuario.nue.validar');		
		Route::get('editar/{id}','Auth\UsersController@edit')->name('usuario.nue.edit');
		Route::put('update/{id}','Auth\UsersController@update')->name('usuario.nue.update');
		Route::get('mostrar/{id}','Auth\UsersController@show')->name('usuario.nue.show');

	});
        //Route::get('get','ReprogramacionController@get')->name('admin.reprogramacion.get');        
});
/*Route::resource('inscripcion-general', 'modulos\admision\AdmisionController');
Route::get('prov/{id}', 'modulos\admision\AdmisionController@provincia')->name('provincia');
Route::get('dist/{id}', 'modulos\admision\AdmisionController@distrito')->name('distrito');*/   
//Fin Admisión
//Inscripciones-UNHEVAL
/*Route::group(['prefix' => 'unheval'],function(){
	Route::group(['prefix' => 'inscripcion'],function(){
		Route::get('unheval1','modulos\inscripcion\ProgramasController@index')->name('unheval.ins.index');

		Route::get('create/{dni}', 'modulos\inscripcion\ProgramasController@create')->name('unheval.ins.create');
		Route::post('store', 'modulos\admision\AdmisionController@store')->name('adminsion.ins.store');
		Route::post('validar', 'modulos\inscripcion\ProgramasController@validar')->name('unheval.ins.validar');		
		Route::get('datos','modulos\admision\AdmisionController@datatables')->name('adminsion.ins.datos');
		Route::get('lineas/{id}', 'modulos\admision\AdmisionController@lineas')->name('Adminsion.ins.lineas');
		Route::delete('delete/{id}','modulos\inscripcion\ProgramasController@destroy')->name('unheval.ins.delete');
		Route::get('editar/{id}','modulos\inscripcion\ProgramasController@edit')->name('unheval.ins.edit');
		Route::put('update/{id}','modulos\inscripcion\ProgramasController@update')->name('unheval.ins.update');		
	});
        Route::get('get','ReprogramacionController@get')->name('admin.reprogramacion.get');       
}); */
//Inscripciones-UNHEVAL
Route::resource('unheval', 'modulos\inscripcion\UnhevalController');
Route::get('maar/{id}', 'modulos\inscripcion\UnhevalController@maestria')->name('maestria');
Route::get('prov/{id}', 'modulos\inscripcion\UnhevalController@provincia')->name('provincia');
Route::get('dist/{id}', 'modulos\inscripcion\UnhevalController@distrito')->name('distrito');
//Inscripciones-UNHEVAL
//Route::resource('unheval1', 'modulos\inscripcion\ProgramasController');
//Calendario
    Route::group(['prefix' => 'calendario'],function(){
        Route::get('{tipo}','modulos\academico\AcademicoController@index')->name('academico.calendario.index');
        Route::get('{tipo}/data','modulos\academico\AcademicoController@cal_date')->name('academico.calendario.data');
        Route::post('{tipo}/new','modulos\academico\AcademicoController@cal_new')->name('academico.calendario.new');
        Route::post('{tipo}/del','modulos\academico\AcademicoController@cal_del')->name('academico.calendario.del');
        Route::post('{tipo}/act','modulos\academico\AcademicoController@cal_act')->name('academico.calendario.act');
        Route::get('{tipo}/tabla','modulos\academico\AcademicoController@cal_tabla')->name('academico.calendario.tabla');
    });
// carga lectiva
    Route::group(['prefix' => 'carga'],function(){
        Route::get('/{plan}/{ciclo}/{anio}','modulos\CargaController@index')->name('academico.carga.index');
        Route::get('/{plan}/{ciclo}/{anio}/data','modulos\CargaController@cal_tabla')->name('academico.carga.tabla');

    });
