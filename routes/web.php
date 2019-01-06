<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');
$router->get('productos/', ['as' => 'productos', 'uses' => 'ProductosController@index']);
$router->get('productos/agregar', ['as' => 'productosagregar', 'uses' => 'ProductosController@show']);
$router->get('productos/propiedades', ['as' => 'productospropiedades', 'uses' => 'ProductosController@showpropiedades']);
$router->get('productos/propiedades/categorias', ['as' => 'productospropiedadescategorias', 'uses' => 'ProductosController@showpropiedadescategorias']);

