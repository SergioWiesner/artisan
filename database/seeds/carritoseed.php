<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class carritoseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
            'subtotal' => 1000000,
            'impuestos' => 0,
            'total' => 1000000,
            'idvendedor' => 1,
            'metodopago' => 1,
            'metodoenvio' => 1
        ]);

        DB::table('carritos')->insert([
            'idproducto' => 1,
            'cantidad' => 2,
            'lote' => 1,
            'usuario_id' => 1,
            'venta_id' => 1
        ]);
    }
}
