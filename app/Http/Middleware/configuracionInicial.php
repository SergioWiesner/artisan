<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Source\Tools\ConfiguracionInit;
use Spatie\Sitemap\SitemapGenerator;
use Closure;

class configuracionInicial
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
        if (!Auth::guest()) {
            if (!Session::has('menu')) {
                ConfiguracionInit::generarMenu();
            }
            if (!Session::has('configinit')) {
                ConfiguracionInit::sistemaConfig();
            }
        }
        return $next($request);
    }
}
