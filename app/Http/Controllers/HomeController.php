<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source\Productos\productos;

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
        return view('page.essence.home')->with('productos', $productos->listarCategoriasProductos());
    }
}
