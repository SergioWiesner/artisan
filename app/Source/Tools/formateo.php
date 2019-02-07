<?php

namespace App\Source\Tools;


use Illuminate\Support\Facades\URL;

class formateo
{


    public static function formateoDatosDispositivos($datos)
    {
        return [
            'tienda' => $datos[0]['nombresistema'],
            'logo' => URL::to('/').$datos[0]['logosistema']
        ];

    }
}
