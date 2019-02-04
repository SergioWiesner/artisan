<?php

namespace App\Source\Bodegas;

use App\Source\Bodegas\Modelo;
use App\Source\Usuarios\Model;
use Illuminate\Support\Facades\Redirect;

class Bodegas
{


    public function AgregarBodega($data)
    {
        Modelo::AgregarBodega($data);
        return Redirect()->back();
    }
}
