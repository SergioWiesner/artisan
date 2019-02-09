<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/** RUTAS DE PROPIEDADES PARA LOS PRODUCTOS**/

/** RUTAS DE PROPIEDADES PARA LOS PRODUCTOS**/
Route::middleware(['auth:api', 'auth'])->group(function () {
    Route::resource('ApiPropiedades', 'PropiedadesController');
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::resource('ApiUsuarios', 'UsuariosController');
});


Route::get('/inicio', 'ApiController@index');
