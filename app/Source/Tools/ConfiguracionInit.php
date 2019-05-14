<?php

namespace App\Source\Tools;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Source\Configuracion;
use App\User;

class ConfiguracionInit
{


    public static function generarMenu()
    {
        $perfiles = User::where('id', Auth::user()->id)->with(['perfiles.permisos' => function ($query) {
            $query->orderBy('permisos.ordenmenu', 'asc');
        }])->get()->toArray();
        $x = 0;
        for ($a = 0; $a < count($perfiles[0]['perfiles']); $a++) {
            for ($b = 0; $b < count($perfiles[0]['perfiles'][$a]['permisos']); $b++) {
                if (Auth::user()->nivelaccesso >= $perfiles[0]['perfiles'][$a]['permisos'][$b]['nivelacceso'] && $perfiles[0]['perfiles'][$a]['permisos'][$b]['estado'] == 1) {
                    $dat[$x++] = [
                        'item' => '<li class="nav-item"><a class="nav-link" href="' . $perfiles[0]['perfiles'][$a]['permisos'][$b]['url'] . '">' . $perfiles[0]['perfiles'][$a]['permisos'][$b]['nombre'] . '</a></li>',
                        'url' => $perfiles[0]['perfiles'][$a]['permisos'][$b]['url'],
                        'nivel' => $perfiles[0]['perfiles'][$a]['permisos'][$b]['nivelacceso'],
                    ];
                }
            }
        }
        if (isset($dat)) {
            Session::put('menu', $dat);
        } else {
            return redirect()->back()->withErrors("Existe un problema con este usuario, comuniquese con el administrador");
        }
    }

    public static function sistemaConfig()
    {
        $config = new Configuracion\Configuracion();
        $dat = $config->configuracion()[0];
        Session::put('configinit', $dat);
    }
}
