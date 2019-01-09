<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source\Productos\Propiedades\Propiedades;

class AppController extends Controller
{
    public function __construct()
    {

    }

    public function home()
    {
        return view('system.home');
    }

    public function propiedades()
    {
        $propiedades = new propiedades();
        return view('system.productos.propiedades.listar')
            ->with('categoriapropiedades', $propiedades->listarCategoriaPropiedades())
            ->with('propiedades', $propiedades->listarPropiedades());
    }

    public function productos()
    {
        return view('system.productos.listar');
    }
}
