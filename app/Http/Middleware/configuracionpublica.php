<?php

namespace App\Http\Middleware;

use App\Source\Tools\ConfiguracionInit;
use Illuminate\Support\Facades\Session;
use Closure;


class configuracionpublica
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
        if (!Session::has('configuracionpublica')) {
            ConfiguracionInit::configuracionPublica();
        }
        return $next($request);
    }
}
