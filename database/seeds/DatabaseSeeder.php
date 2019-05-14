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
        $this->call(coniguracionSeed::class);
        $this->call(bodegaseed::class);
        $this->call(CategoriaProducto::class);
        $this->call(CategoriaPropiedades::class);
        $this->call(codliveditorconfini::class);
        $this->call(Configcodviewseed::class);
        $this->call(firstseed::class);
        $this->call(Firstuser::class);
        $this->call(MetodosEnvio::class);
        $this->call(MetodosPago::class);
        $this->call(perfilesseed::class);
        $this->call(permisoseed::class);
        $this->call(Productos::class);
        $this->call(propiedades::class);
        $this->call(TipoDocumento::class);
        $this->call(carritoseed::class);
    }
}
