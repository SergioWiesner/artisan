<?php

namespace App\Source\Configuracion;

use App\ConfiguracionSystem;
use App\Source\Configuracion\Modelo;
use App\Source\Tools\Basics;
use App\Source\Tools\formateo;

class Configuracion
{

    const ubicacion = "/public/configuracion";

    public function configuracion()
    {
        return Modelo::traerConfiguracion();
    }

    public function configuracionpublica()
    {
        return Modelo::configuracionpublica();
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

    public function agregregarConfiguracion($datos)
    {
        $data = Basics::determinarRutaimg($datos, self::ubicacion);
        Modelo::crearConfiguracion($data);
        return redirect()->back();
    }

    public function traerRelacionPerfilesPermisos($id)
    {
        return Basics::collectionToArray(Modelo::buscarRelacionPerfilesPermisos($id));
    }

    public function validacionConfiguracion()
    {
        return Modelo::validacionConfiguracion();
    }

    public function relacionPerfilesPermisos($request)
    {
        Modelo::eliminarRelacionPerfil($request['perfil']);
        if (isset($request['permiso'])) {
            Modelo::relacionPerfilesPermisos($request['perfil'], $request['permiso']);
        }
        return redirect()->back();
    }


    public function actualizarConfiguracion($data)
    {
        $data = Basics::determinarRutaimg($data, self::ubicacion);
        Modelo::actualizarConfiguracion($data);
        return redirect()->back();
    }
}
