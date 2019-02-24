<?php

namespace App\Source\Informes;

use App\Source\Usuarios\Usuarios;
use PDF;

class Informes
{
    public $usuarios;

    public function __construct()
    {
        $this->usuarios = new Usuarios();
    }

    public function informeUsuarios()
    {
        // return view('system.informes.templates.Usuarios')->with('data', $this->usuarios->listarUsuariosActivos());
        $pdf = PDF::loadView('system.informes.templates.Usuarios', ['data' => $this->usuarios->listarUsuariosActivos()]);
        return $pdf->download('informe.pdf');
    }
}

