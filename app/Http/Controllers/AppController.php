<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source\Productos\Propiedades\Propiedades;
use App\Source\Productos\productos;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function __construct()
    {

    }

    public function home()
    {
        if (Auth::guest()) {
            return view('page.home');

        } else {
            return view('system.home');
        }
    }

    public function propiedades()
    {
        $propiedades = new propiedades();
        return view('system.productos.propiedades.listar')
            ->with('propiedades', $propiedades->listarPropiedades())
            ->with('categoriapropiedades', $propiedades->listarCategoriaPropiedades());
    }

    public function productos()
    {
        $propiedades = new propiedades();
        $productos = new productos();
        return view('system.productos.listar')
            ->with('productos', $productos->listarProductosPaginados())
            ->with('propiedades', $propiedades->listarPropiedades())
            ->with('categoria', $propiedades->listarCategoriaProductos());
    }
}
