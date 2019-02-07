<?php

namespace App\Source\Configuracion;

use App\Source\Configuracion\Modelo;
use App\Source\Tools\Basics;
use App\Source\Tools\formateo;

class Configuracion
{

    const ubicacion = "/public/configuracion/";

    public function configuracion()
    {
        return Modelo::traerConfiguracion();
    }

    public function editarConfiguracion($data)
    {
        $data = Basics::determinarRutaimg($data, self::ubicacion);
        Modelo::actualizarConfiguracion($data);
        return redirect()->back();
    }

    public function agregarPermiso($data)
    {
        Modelo::agregarPermiso($data);
        return redirect()->back();
    }

    public function traerPermisos()
    {
        return Basics::collectionToArray(Modelo::listarPermisos());
    }

    public function traerPerfiles()
    {
        return Basics::collectionToArray(Modelo::listarPerfiles());
    }

    public function traerDatosDispositivos()
    {
        $data = Basics::collectionToArray(Modelo::datosDispositivosConfiguracion());
        return formateo::formateoDatosDispositivos($data);
    }
}
