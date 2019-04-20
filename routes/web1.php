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

Route::resource('nosotros','NosotrosController');
Route::get('equipoTrabajo','NosotrosController@viewEquipoTrabajo');

Route::resource('servicios','ServiciosController');

Route::resource('contacto','ContactoController');
