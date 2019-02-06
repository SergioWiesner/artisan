<?php

namespace App\Source\Configuracion;

use App\ConfiguracionSystem;
use App\Perfiles;
use App\Permisos;
use App\Source\Tools\Basics;
use Illuminate\Support\Facades\DB;

class Modelo
{

    public static function actualizarConfiguracion($datos)
    {
        return DB::table('configuracionsystem')
            ->where('id', 1)
            ->update([
                'nombresistema' => $datos['nombresistema'],
                'logosistema' => $datos['logosistema'],
                'hostmail' => $datos['hostmail'],
                'usuariomail' => $datos['usuariomail'],
                'mailpuerto' => $datos['mailpuerto'],
                'mailencryption' => $datos['mailencryption'],
                'clavemail' => $datos['clavemail'],
                'desde' => $datos['desde'],
                'nombredesde' => $datos['nombredesde']
            ]);
    }

    public static function traerConfiguracion()
    {
        return Basics::collectionToArray(ConfiguracionSystem::all()->get());
    }

    public static function agregarPermiso($data)
    {
        return DB::table('permisos')->insert([
            'nombre' => $data['nombre'],
            'url' => $data['url'],
            'categoria' => 1,
            'nivelacceso' => $data['nivelacceso'],
        ]);
    }

    public static function listarPermisos()
    {
        return Permisos::all();
    }

    public static function listarPerfiles()
    {
        return Perfiles::all();
    }
}