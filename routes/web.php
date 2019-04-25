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

Route::get('/','PublicController@principal')->name('inicio');
Route::get('/inicio','PublicController@principal')->name('inicio');
Route::get('nosotros','PublicController@nosotros')->name('nosotros');
Route::get('/equipo_trabajo','PublicController@equipoTrabajo');
Route::get('/organigrama','PublicController@organigrama');
Route::get('servicios/{servicio?}','PublicController@servicios')->name('servicios');
Route::get('contacto','PublicController@contacto')->name('contacto');


//------------admin------------
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/modulo','ModuloController@modulo')->name('modulo');
Route::get('/service','ServiciosController@servicios');
Route::get('/servicetype','ServiciosController@servicetype');
Route::get('/servicetypecreate','ServiciosController@servicetypecreate');
Route:: POST('/servicetypeinsert', [
    'uses' => 'ServiciosController@servicetypeinsert',
    'as' => 'servicetypeinsertPost'
]);
Route::resource('/services','ServiciosController');
Route::Resource('/usuarios' , 'UsersController');
//----------fin-----------


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
