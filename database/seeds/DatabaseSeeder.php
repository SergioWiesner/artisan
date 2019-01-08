<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriaPropiedades::class);
        $this->call(MetodosEnvio::class);
        $this->call(MetodosPago::class);
        $this->call(Productos::class);
        $this->call(propiedades::class);
        $this->call(TipoDocumento::class);
    }
}
