<?php
/** RUTAS DE LA PAGINA **/
Route::middleware(['configinit'])->group(function () {
    Route::get('/home', 'AppController@home');
    Route::get('/', 'HomeController@inicio');
    Route::get('/productos/propiedades/', 'AppController@propiedades')->name('propiedades');
    Route::get('/buscar/usuarios/{id?}/', 'AppController@verUsuarios')->name('detallesusuarios');
    Route::get('/informes.blade.php/', 'AppController@informes.blade.php')->name('informes.blade.php');
    Route::get('/perfiles/permisos/{id?}', 'AppController@perfilespermisos')->name('permisosperfiles');
    Route::get('/ventas/agregar/', 'AppController@ventaAgregada')->name('nuevaventa');

    /** RUTAS DE LA PAGINA **/
});

Route::middleware(['configinit', 'verificadorurl'])->group(function () {
    Route::get('/informes/', 'AppController@informes')->name('informes');
    Route::get('/ventas/', 'AppController@ventas')->name('ventas');
    Route::get('/clientes/', 'AppController@clientes')->name('clientes');
    Route::get('/configuracion/', 'AppController@configuracion')->name('configuracion');
    Route::get('/productos/', 'AppController@productos')->name('productos');
    Route::get('/usuarios/', 'AppController@usuarios')->name('listarusuarios');
});

Route::post('/buscar/productos', 'AppController@buscarProductos');
Route::post('/buscar/productos/id', 'AppController@buscarProductosId');
Route::post('/buscar/usuario/documento', 'AppController@buscarUsuarioDocumento');
Route::post('/buscar/propiedad/producto/id', 'AppController@buscarPropiedadId');
/** RUTAS DE CONFIGURACIÓN DE CLIENTES API **/
Route::get('/crear/cliente/api', 'AppController@crearClienteVista')->name('creaciondeclientesviews')->middleware('auth');
/** RUTAS DE CONFIGURACIÓN DE CLIENTES API**/

Route::get('/propiedades/lista/', 'PropiedadesController@index')->name('clientespropiedades')->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


/** RUTAS DE PRODUCTOS Y PROPIEDADES **/
/** RUTAS DE PROPIEDADES PARA LOS PRODUCTOS **/
Route::middleware(['auth'])->group(function () {
    Route::get('/productos/propiedades/eliminar/{id}', 'PropiedadesController@delete')->name('eliminarpropiedad');
    Route::get('/productos/propiedades/toogle/{id}/{estado}', 'PropiedadesController@toogle')->name('tooglepropiedad');
    Route::post('/productos/propiedades/agregar', 'PropiedadesController@store')->name('agregarpropiedad');
    Route::put('/productos/propiedades/editar/{id}', 'PropiedadesController@update')->name('editarpropiedad');
});
/** RUTAS DE PROPIEDADES PARA LOS PRODUCTOS **/

/** RUTA DE CATEGORIA DE PRODUCTOS **/
Route::middleware(['auth', 'configinit'])->group(function () {
    Route::post('/productos/agregar/categoria', 'CategoriaProductosController@store')->name('agregarcategoria');
    Route::patch('/productos/actualizar/categoria/{id}', 'CategoriaProductosController@update')->name('actualizarcategoria');
    Route::get('/productos/eliminar/categoria/{id}', 'CategoriaProductosController@delete')->name('eliminarcategoria');
    //Route::put('/productos/propiedades/editar/{id}', 'PropiedadesController@update')->name('editarpropiedad');
});
/** RUTA DE CATEGORIA DE PRODUCTOS **/

/** RUTA DE PRODUCTOS **/
Route::middleware(['auth'])->group(function () {
    Route::post('/productos/agregar', 'ProductosController@store')->name('agregarproducto');
    Route::patch('/productos/editar/{id}', 'ProductosController@update')->name('editarproducto');
    Route::get('/productos/eliminar/{id}', 'ProductosController@delete')->name('eliminarproducto');
    Route::get('/productos/ver/{id}', 'AppController@verproductodetalles')->name('verproducto');
});
/** RUTA DE PRODUCTOS **/
/** RUTAS DE PRODUCTOS Y PROPIEDADES **/


/** RUTAS DE USUARIOS **/
Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios/listar/json', 'UsuariosController@index')->name('usuario');
    Route::get('/usuarios/eliminar/{id}', 'UsuariosController@destroy')->name('usuarioeliminar');
    Route::post('/usuarios/crear/', 'UsuariosController@store')->name('usuarioscrear');
    Route::patch('/usuarios/editar/{id}', 'UsuariosController@update')->name('usuarioeditar');
});
/** RUTAS DE USUARIOS **/

/** RUTAS DE BODEGAS **/
Route::middleware(['auth'])->group(function () {
    Route::post('/bodega/crear/', 'BodegasController@store')->name('bodegacrear');
});
/** RUTAS DE BODEGAS **/


/** RUTAS DE CONFIGURACIÓN **/
Route::post('/permiso/crear/', 'ConfiguracionController@permisosStore')->name('permisocrear');
Route::post('/configuracion/crear/', 'ConfiguracionController@store')->name('configuracioncear');

/** RUTA DE PERMISOS **/
Route::post('/relacionar/permios/perfiles/', 'ConfiguracionController@permisoRelacion')->name('perfilespermisos');
/** RUTA DE PERMISOS **/

/** RUTAS DE CONFIGURACIÓN **/


/** RUTA DE CLIENTES **/

/** RUTA DE CLIENTES **/


/** RUTA DE VENTAS **/

/** RUTA DE VENTAS **/


/** RUTA DE INFORMES **/
Route::middleware(['auth'])->group(function () {
    Route::get('/decargar/informe/usuarios/acivos', 'InformesController@descargarInfomesUsuariosActivos')->name('Descargarusuarios');
});
/** RUTA DE INFORMES **/


/** RUTA DE PERFILES **/
Route::middleware(['auth'])->group(function () {
    Route::post('/perfiles/agregar', 'PerfilesController@store')->name('agregarperfiles');
});
/** RUTA DE PERFILES **/
