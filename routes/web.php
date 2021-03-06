<?php
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
//Ajustar Usuario
Route::group(['prefix' => 'ajustes'],function(){
	Route::get('index', 'Auth\AjustesUserController@index')->name('ajustes.index');
	Route::post('update', 'Auth\AjustesUserController@update')->name('ajustes.update');
	Route::put('foto', 'Auth\AjustesUserController@img_update')->name('ajustes.foto');
});

//RSU
Route::group(['prefix' => 'rsu'],function(){
	//Mis proyectos
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
		Route::post('show-msj','modulos\rsu\MisProyectosController@show_msj')->name('rsu.mp.show-msj');

	});
	//Proyectos Facultad
	Route::group(['prefix' => 'proyectos_facultad'],function(){
		Route::get('/','modulos\rsu\ProyectosFacultadController@index')->name('rsu.pf.index');
		Route::get('datos','modulos\rsu\ProyectosFacultadController@datatables')->name('rsu.pf.datos');
		Route::get('ver/{id}','modulos\rsu\ProyectosFacultadController@ver_detalle')->name('rsu.pf.ver');
		Route::get('calendario/{id}','modulos\rsu\ProyectosFacultadController@cal_index')->name('rsu.pf.cal');
		Route::get('ver-file/{id}','modulos\rsu\ProyectosFacultadController@ver_archivos')->name('rsu.pf.ver-file');
		Route::post('e-msj','modulos\rsu\ProyectosFacultadController@e_msj')->name('rsu.pf.e-msj');
		Route::post('show-msj','modulos\rsu\ProyectosFacultadController@show_msj')->name('rsu.pf.show-msj');
		Route::post('estado','modulos\rsu\ProyectosFacultadController@estado')->name('rsu.pf.estado');
	});
	//Proyectos UNHEVAL
	Route::group(['prefix' => 'proyectos_unheval'],function(){
		Route::get('/','modulos\rsu\ProyectosUnhevalController@index')->name('rsu.pu.index');
		Route::get('datos','modulos\rsu\ProyectosUnhevalController@datatables')->name('rsu.pu.datos');
		Route::get('ver/{id}','modulos\rsu\ProyectosUnhevalController@ver_detalle')->name('rsu.pf.ver');
		Route::get('calendario/{id}','modulos\rsu\ProyectosUnhevalController@cal_index')->name('rsu.pu.cal');
		Route::get('ver-file/{id}','modulos\rsu\ProyectosUnhevalController@ver_archivos')->name('rsu.pu.ver-file');
		Route::post('e-msj','modulos\rsu\ProyectosUnhevalController@e_msj')->name('rsu.pu.e-msj');
		Route::post('show-msj','modulos\rsu\ProyectosUnhevalController@show_msj')->name('rsu.pu.show-msj');
		Route::post('estado','modulos\rsu\ProyectosUnhevalController@estado')->name('rsu.pf.estado');
	});
	//Proyectos Repositorio
	Route::group(['prefix' => 'repositorio'],function(){
		Route::get('/','modulos\rsu\RepositorioController@index')->name('rsu.pr.index');
		Route::get('datos','modulos\rsu\RepositorioController@datatables')->name('rsu.pr.datos');
		Route::get('ver-file/{id}','modulos\rsu\RepositorioController@ver_archivos')->name('rsu.pr.ver-file');
	});
	Route::get('pdf/ver_detalles/{id}','modulos\rsu\PdfController@pdf')->name('rsu.pdf.vd');
}); 
//Fin RSU
//Adminsión
Route::group(['prefix' => 'adminsion'],function(){
	Route::group(['prefix' => 'inscripciones'],function(){
		Route::get('/','modulos\admision\AdmisionController@index')->name('adminsion.ins.index');
		Route::post('create', 'modulos\admision\AdmisionController@create')->name('adminsion.ins.create');
		Route::get('listaescuela/{id}', 'modulos\admision\AdmisionController@listaescuela')->name('adminsion.ins.lista');
		Route::post('store', 'modulos\admision\AdmisionController@store')->name('adminsion.ins.store');
		Route::post('validar', 'modulos\admision\AdmisionController@validar')->name('adminsion.ins.validar');		
		Route::get('datos','modulos\admision\AdmisionController@datatables')->name('adminsion.ins.datos');
		Route::delete('delete/{id}','modulos\admision\AdmisionController@destroy')->name('adminsion.ins.delete');
		Route::get('editar/{id}','modulos\admision\AdmisionController@edit')->name('adminsion.ins.edit');
		Route::put('update/{id}','modulos\admision\AdmisionController@update')->name('adminsion.ins.update');
        Route::get('mostrar/{id}','modulos\admision\AdmisionController@show')->name('adminsion.ins.show');
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
        Route::get('mostrar/{id}','modulos\diplomado\DiplomadoController@show')->name('diplomado.ins.show');

	});
        //Route::get('get','ReprogramacionController@get')->name('admin.reprogramacion.get');        
});
//Usuarios
Route::group(['prefix' => 'usuario'],function(){
	Route::get('actualizar','Auth\UsersController@actualizar')->name('usuario.nue.actualizar');
	Route::group(['prefix' => 'nuevo'],function(){
		Route::get('/','Auth\UsersController@index')->name('usuario.nue.index');
		Route::get('datos','Auth\UsersController@datatables')->name('usuario.nue.datos');
		Route::post('validar', 'Auth\UsersController@validar')->name('usuario.nue.validar');	
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
Route::group(['prefix' => 'unheval1'],function() {
    Route::resource('/', 'modulos\inscripcion\publico\PublicoController');
    Route::group(['prefix' => 'inscripciones'],function() {
        Route::get('/{tipo}',           'modulos\inscripcion\publico\DiplomadoController@index')->name('publico.diplomado.ins.index');
        Route::post('/{tipo}/create',   'modulos\inscripcion\publico\DiplomadoController@create')->name('publico.diplomado.ins.create');
        Route::post('/{tipo}/validar',  'modulos\inscripcion\publico\DiplomadoController@validar')->name('publico.diplomado.ins.validar');
        Route::post('/{tipo}/store',  'modulos\inscripcion\publico\DiplomadoController@store')->name('publico.diplomado.ins.store');

    });
});


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
        Route::get('/horario/{id}','modulos\CargaController@horario')->name('academico.carga.horario.index');
        Route::post('/horario/{id}','modulos\CargaController@saveHorario')->name('academico.carga.horario.save');
        Route::get('/acciones/{id}','modulos\CargaController@acciones')->name('academico.carga.acciones.index');
        Route::post('/acciones/{id}','modulos\CargaController@saveAcciones')->name('academico.carga.acciones.save');
        Route::post('/acciones/{id}/del','modulos\CargaController@deleteAcciones')->name('academico.carga.acciones.delete');
        Route::get('/micargalectiva/imprimir/{id}','modulos\CargaController@imprimir')->name('academico.mi.carga.imprimir');
        Route::get('/micargalectiva/{anio}/{semestre}','modulos\CargaController@micargaLectiva')->name('academico.mi.carga.index');
        Route::get('/noLectiva/{ciclo}/{anio}','modulos\CargaController@noLectiva')->name('academico.carga.no_lectiva.index');
        Route::get('/noLectivaPrint/{ciclo}/{anio}','modulos\CargaController@PrintNoLectiva')->name('academico.carga.no_lectiva.print');
        Route::post('/noLectiva/{ciclo}/{anio}','modulos\CargaController@SaveNoLectiva')->name('academico.carga.no_lectiva.save');
        Route::post('/noLectiva/{ciclo}/{anio}/del','modulos\CargaController@DeleteNoLectiva')->name('academico.carga.no_lectiva.delete');//actividades silabos
        Route::get('/{plan}/{anio}/{semestre}/show','modulos\CargaController@show')->name('academico.carga.show');
        Route::get('/{plan}/{semestre}/edit','modulos\CargaController@index')->name('academico.carga.index');
        Route::post('/{plan}/{ciclo}/{anio}/{semestre}/store','modulos\CargaController@store')->name('academico.carga.store');


//reporte carga
    	Route::get('reporte','modulos\CargaController@index1')->name('academico.reportecarga.index1');
    });

//-------------------------------------------------------------------------------------------------------------

//Administrador 
    Route::group(['prefix' => 'admin'],function(){
    	//cargar datos
    	Route::group(['prefix' => 'cargar'],function(){
    		//estudiantes
    		Route::get('estudiantes','admin\CargarDatosController@estudiantes')->name('admin.cargar.docentes');
    		//docentes
    		Route::get('docentes','admin\CargarDatosController@docentes')->name('admin.cargar.docentes');
    	});
        
    });