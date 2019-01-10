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

Route::get('/', 'AppController@home');
Route::get('/productos/', 'AppController@productos')->name('productos')->middleware('auth');
Route::get('/productos/propiedades/', 'AppController@propiedades')->name('propiedades')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


/** RUTAS DE PRODUCTOS Y PROPIEDADES **/

Route::get('/productos/propiedades/eliminar/{id}', 'PropiedadesController@delete')->name('eliminarpropiedad')->middleware('auth');
Route::get('/productos/propiedades/toogle/{id}/{estado}', 'PropiedadesController@toogle')->name('tooglepropiedad')->middleware('auth');

/** RUTAS DE PRODUCTOS Y PROPIEDADES **/

/** RUTAS DE USUARIOS **/

