<?php

namespace App\Source\Configuracion;

use App\Source\Configuracion\Modelo;
use App\Source\Tools\Basics;

class Configuracion
{

    const ubicacion = "/public/configuracion/";
    public function configuracion(){
        return Modelo::traerConfiguracion();
    }

    public function editarConfiguracion($data){
        $data = Basics::determinarRutaimg($data, self::ubicacion);
        Modelo::actualizarConfiguracion($data);
        return redirect()->back();
    }
}
