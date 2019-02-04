<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class firstseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('bodegas_user')->insert([
            'bodegas_id' => 1,
            'user_id' => 1
        ]);

        DB::table('perfiles_permisos')->insert([
            'perfiles_id' => 1,
            'permisos_id' => 1
        ]);

        DB::table('perfiles_permisos')->insert([
            'perfiles_id' => 1,
            'permisos_id' => 2
        ]);

        DB::table('perfiles_permisos')->insert([
            'perfiles_id' => 1,
            'permisos_id' => 3
        ]);

        DB::table('perfiles_users')->insert([
            'users_id' => 1,
            'perfiles_id' => 1
        ]);
    }
}
