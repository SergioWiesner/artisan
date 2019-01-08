<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodosPago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodo_pagos')->insert([
            'nombre' => "Efectivo",
        ]);
        DB::table('metodo_pagos')->insert([
            'nombre' => "Tarjeta de credito",
        ]);
        DB::table('metodo_pagos')->insert([
            'nombre' => "Cheques",
        ]);
        DB::table('metodo_pagos')->insert([
            'nombre' => "Caja",
        ]);
        DB::table('metodo_pagos')->insert([
            'nombre' => "Bono",
        ]);
    }
}
