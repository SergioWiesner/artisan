<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{


    public function home()
    {
        return view('system.home');
    }

    public function propiedades()
    {
        return view('system.productos.listar');
    }
}
