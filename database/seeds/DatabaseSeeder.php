<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call('UsersTableSeeder');
        $this->call(categoriapropiedades::class);
        $this->call(metodoenvio::class);
        $this->call(metodopago::class);
        $this->call(tipodocumento::class);
    }
}
