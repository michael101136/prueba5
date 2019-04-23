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
    return view('frondend/inicio');
});


Route::get('nosotros','PublicController@nosotros')->name('nosotros');
Route::get('/equipo_trabajo','PublicController@equipoTrabajo');
Route::get('servicios','PublicController@servicios')->name('servicios');
Route::get('contacto','PublicController@contacto')->name('contacto');


//------------admin------------
Route::get('/home', 'HomeController@index')->name('home');
//----------fin-----------
Route::get('/modulo','ModuloController@modulo')->name('modulo');
Route::get('/listarServicios','ServiciosController@listarServicios')->name('listarServicios');

// Route::get('/servicios', function () {
//     return view('admin.servicios.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
