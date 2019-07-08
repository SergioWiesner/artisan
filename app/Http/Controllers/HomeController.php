<?php

namespace App\Http\Controllers;

use App\Source\Productos\Propiedades\propiedades;
use App\Source\Productos\productos;
use  App\Source\Tools\Basics;
use Illuminate\Http\Request;
use OpenGraph;
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
        if (Basics::isMobil()) {
            return view('movil.index')
                ->with('productos', $productos->listarProductos())
                ->with('categoria', $propiedades->listarCategoriaProductos());
        } else {
            return view('page.essence.home')
                ->with('productos', $productos->listarProductos())
                ->with('categoria', $propiedades->listarCategoriaProductos());
        }
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
            OpenGraph::addImage($seo[0]['rutaimg']);
            if (Basics::isMobil()) {
                return view('movil.category')
                    ->with('productos', $datos)
                    ->with('categoria', $propiedades->listarCategoriaProductos());
            } else {
                return view('page.essence.category')
                    ->with('productos', $datos)
                    ->with('categoria', $propiedades->listarCategoriaProductos());
            }
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
            OpenGraph::addImage($datos[0]['rutaimagen']);
            if (Basics::isMobil()) {
                return view('movil.product')
                    ->with('producto', $datos);
            } else {
                return view('page.essence.product')
                    ->with('producto', $datos);
            }
        } catch (\Exception $e) {
            return view('page.essence.404');
        }
    }

    public function contactenos()
    {
        return view('page.essence.contact');
    }
}
