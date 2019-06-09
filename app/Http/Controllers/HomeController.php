<?php

namespace App\Http\Controllers;

use App\Source\Productos\Propiedades\propiedades;
use App\Source\Productos\productos;
use  App\Source\Tools\Basics;
use Illuminate\Http\Request;
use SEO;

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

    public function categoria($nombre = null)
    {
        try {
            $productos = new productos();
            $propiedades = new propiedades();
                $datos = $productos->listarProductosPorCategorias($nombre);
                $seo = $datos->all();
                SEO::setTitle($seo[0]['nombre']);
                SEO::setDescription($seo[0]['descripcion']);
                SEO::opengraph()->addProperty('type', 'category');
            return view('page.essence.category')
                ->with('productos', $datos)
                ->with('categoria', $propiedades->listarCategoriaProductos());
        } catch (\Exception $e) {
            return view('page.essence.404');
        }
    }

    public function productos($nombre = null, $id)
    {
        try {
            $productos = new productos();
            $datos = $productos->buscarProductoId($id);
            SEO::setTitle($datos[0]['nombre']);
            SEO::setDescription($datos[0]['descripcion']);
            SEO::opengraph()->addProperty('type', 'articles');
            return view('page.essence.product')
                ->with('producto', $datos);
        } catch (\Exception $e) {
            return view('page.essence.404');
        }
    }

}
