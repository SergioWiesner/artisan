<?php

namespace App\Source\Configuracion\Perfiles;

use App\Source\Configuracion\Perfiles\Modelo;
use Illuminate\Support\Facades\Session;

class Perfiles
{

    public $modelo;

    public function __construct()
    {
        $this->modelo = new Modelo();
    }


    public function crearPerfil($data)
    {
        if ($this->modelo->crearPerfiles($data)) {
            Session::put('success', ["Perfil '" . $data['nombre'] . "' creada"]);
        } else {
            Session::put('error', ["Error, no se puedo crear el perfil"]);
        }
        return redirect()->back();
    }
}
