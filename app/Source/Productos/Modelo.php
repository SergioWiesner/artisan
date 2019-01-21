<?php


namespace App\Source\Productos;

use Illuminate\Support\Facades\DB;
use App\CategoriaProductos;
use App\Productos;

class Modelo
{


    public static function agregarCategoriaProducto($datos)
    {
        return DB::table('categoria_productos')->insert([
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'rutaimg' => $datos['rutaimg'],
            'catgoriapadre' => $datos['catgoriapadre'],
        ]);
    }

    public static function listarProductospaginados()
    {
        return Productos::with('propiedades')->with('catgorias')->paginate(15);
    }

    public static function eliminarCategoriaProducto($id)
    {
        return CategoriaProductos::where('id', $id)->delete();
    }

    public static function ActualizarCategoriaProductos($datos, $id)
    {
        return DB::table('categoria_productos')
            ->where('id', $id)
            ->update([
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'rutaimg' => $datos['rutaimg'],
                'catgoriapadre' => $datos['catgoriapadre'],
            ]);
    }

    public static function agregarProducto($datos)
    {
        $dat = Productos::create([
            'referencia' => $datos['referencia'],
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'stock' => $datos['stock'],
            'valor' => $datos['valor'],
            'idcategoria' => $datos['categoria'],
            'rutaimagen' => $datos['rutaimg'],
            'idproductopadre' => $datos['productopadre']
        ]);
        return $dat;
    }


    public static function agregarRelacionPropiedadProducto($datos, $id)
    {
        return DB::table('productos_propiedades')->insert([
            'productos_id' => $id,
            'propiedades_id' => $datos['propiedad'],
            'valor' => $datos['valorpropiedad'],
        ]);
    }


}
