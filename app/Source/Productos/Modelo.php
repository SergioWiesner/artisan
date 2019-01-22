<?php


namespace App\Source\Productos;

use App\Source\Tools\Basics;
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

    public static function listarProductospaginadosRamdon()
    {
        return Productos::with('propiedades')->with('catgorias')->inRandomOrder()->paginate(15);
    }

    public static function listarProductos()
    {
        return Productos::with('propiedades')->with('catgorias')->get();
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

    public static function actualizarProductos($datos)
    {
        return DB::table('productos')
            ->where('id', $datos['id'])
            ->update([
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'stock' => $datos['stock'],
                'valor' => $datos['valor'],
                'idcategoria' => $datos['categoria'],
                'rutaimagen' => $datos['rutaimg'],
                'idproductopadre' => $datos['productopadre']
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

    public static function actualizarRelacionPropiedadProducto($datos, $id)
    {
        return DB::table('productos_propiedades')->where([['productos_id', $id], ['propiedades_id', $datos['propiedad']]])->update([
            'valor' => $datos['valorpropiedad'],
        ]);
    }

    public static function eliminarProdcuto($id)
    {
        return DB::table('productos')->where('id', $id)->delete();
    }

    public static function traerDetallesProducto($id)
    {
        return Basics::collectionToArray(Productos::where('id', $id)->with('propiedades')->with('catgorias')->with('propiedadesvalor.propiedadesPadre')->get());
    }

    public static function traerProductosPorCategoria($datos)
    {
        return Basics::collectionToArray(Productos::where([['idcategoria', $datos[0]['idcategoria']], ['id', '<>', $datos[0]['id']]])->with('propiedades')->with('catgorias')->with('propiedadesvalor.propiedadesPadre')->inRandomOrder()->limit(10)->get());
    }

}
