<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Closure;

class verificacionPermisos
{
    public function handle($request, Closure $next)
    {
//        if (count(Session::get('menu')) > 0) {
//            for ($a = 0; $a < count(Session::get('menu')); $a++) {
//                if (Request::url() == route('home') && Auth::user()->nivelaccesso >= Session::get('menu')[$a]['nivel']) {
        return $next($request);
//                }
//            }
//        }
        return redirect()->back()->withErrors("Usted no tiene el permiso suficiente para esta acción su nivel de accesos es " . Auth::user()->nivelaccesso . " y se necesita ");
    }
}
