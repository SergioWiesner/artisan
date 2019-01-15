<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Firstuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Super Admin",
            'email' => "admin@codwelt.com",
            'password' => Hash::make("admincodwelt"),
            'telefono' => "3203368199",
            'documento' => "1033784376",
            'tipodocumento' => 1,
            'direccion' => "Colombia",
            'ciudad' => 1,
            'nivelaccesso' => 10
        ]);
    }
}
