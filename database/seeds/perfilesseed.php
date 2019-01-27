<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class perfilesseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfiles')->insert([
            'nombre' => 'deault',
            'nivelacceso' => 10
        ]);
    }
}
