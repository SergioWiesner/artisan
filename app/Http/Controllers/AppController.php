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

    public function verproductodetalles($id)
    {
        $productos = new productos();
        $propiedades = new propiedades();
        $datos = $productos->verProducto($id);
        if (count($datos) > 0) {
            return view('system.productos.observar')->with('detalles', $datos)
                ->with('relacionados', $productos->productosPorCategoria($datos))
                ->with('productos', $productos->listarProductos())
                ->with('categorias', $propiedades->listarCategoriaProductos());
        } else {
            return redirect()->route('productos');
        }

    }
}
