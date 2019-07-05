<?php

namespace App\Source\Carrito;

use App\Carrito;

class manager
{
    public function AgregarCarrito($idproducto){
     Carrito::create([
         'idproducto',
         'cantidad',
         'lote',
         'usuario_id',
         'venta_id'
     ]);

    }
}
