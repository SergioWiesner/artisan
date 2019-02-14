<?php

namespace App\Source\Configuracion;

use App\ConfiguracionSystem;
use App\Perfiles;
use App\Permisos;
use App\Source\Tools\Basics;
use Illuminate\Support\Facades\DB;

class Modelo
{
    public static function traerConfiguracion()
    {
        return Basics::collectionToArray(ConfiguracionSystem::first()->get());
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

    public static function datosDispositivosConfiguracion()
    {
        return ConfiguracionSystem::all();
    }

    public static function crearConfiguracion($data)
    {
        return DB::table('configuracionsystem')->insert([
            'nombresistema' => $data['nombresistema'],
            'logosistema' => $data['rutaimg'],
            'direccionsistema' => $data['direccionsistema'],
            'telefono' => $data['telefono'],
            'ciudad' => 1,
            'hostmail' => $data['hostmail'],
            'usuariomail' => $data['usuariomail'],
            'mailpuerto' => $data['mailpuerto'],
            'mailencryption' => $data['mailencryption'],
            'clavemail' => $data['clavemail'],
            'desde' => $data['desde'],
            'nombredesde' => $data['desde']
        ]);
    }

    public static function validacionConfiguracion()
    {
        if (count(ConfiguracionSystem::all()) > 0) {
            return true;
        }
        return false;
    }

    public static function eliminarRelacionPerfil($idperfil)
    {
        return DB::table('perfiles_permisos')->where('perfiles_id', $idperfil)->delete();
    }

    public static function relacionPerfilesPermisos($idperfil, $idpermiso)
    {
        for ($d = 0; $d < count($idpermiso); $d++) {
            DB::table('perfiles_permisos')->insert([
                'perfiles_id' => $idperfil,
                'permisos_id' => $idpermiso[$d]
            ]);
        }
    }

    public static function actualizarConfiguracion($data)
    {
        return DB::table('configuracionsystem')
            ->where('id', 1)
            ->update([
                'nombresistema' => $data['nombresistema'],
                'logosistema' => $data['rutaimg'],
                'direccionsistema' => $data['direccionsistema'],
                'telefono' => $data['telefono'],
                'ciudad' => 1,
                'hostmail' => $data['hostmail'],
                'usuariomail' => $data['usuariomail'],
                'mailpuerto' => $data['mailpuerto'],
                'mailencryption' => $data['mailencryption'],
                'clavemail' => $data['clavemail'],
                'desde' => $data['desde'],
                'nombredesde' => $data['desde']
            ]);
    }

    public static function buscarRelacionPerfilesPermisos($id)
    {
        return Perfiles::where('id', $id)->with('permisos')->get();
    }
}
