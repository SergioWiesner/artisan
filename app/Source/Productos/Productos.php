<?php

namespace App\Source\Productos;

use App\Source\Productos\Modelo;
use App\Source\Tools\Basics;

class productos
{

    public function listarProductosPaginados()
    {
        return Modelo::listarProductospaginados();
    }


    public function agregarCategoriaProductos($datos)
    {
        Modelo::agregarCategoriaProducto($datos);

    }

}
