<?php

namespace App\Http\Controllers;

use App\Source\Productos\Propiedades\propiedades;
use App\Source\Productos\productos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('configinit');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('system.home');
    }

    public function inicio()
    {
        $productos = new productos();
        $propiedades = new propiedades();
        return view('page.essence.home')
            ->with('productos', $productos->listarProductos())
            ->with('categoria', $propiedades->listarCategoriaProductos());
    }

    public function categoria($nombre)
    {
        $productos = new productos();
        $propiedades = new propiedades();
        return view('page.essence.category')
            ->with('productos', $productos->listarProductosPorCategorias($nombre))
            ->with('categoria', $propiedades->listarCategoriaProductos());
    }

    public function productos($id)
    {
        $productos = new productos();
        return view('page.essence.product')
            ->with('producto', $productos->buscarproductofrontend($id));
    }

}
