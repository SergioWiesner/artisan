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
        return Productos::with('propiedades')->with('catgorias')->inRandomOrder()->paginate(10);
    }

    public static function listarProductos()
    {
        return Productos::with('propiedades')->with('catgorias')->get();
    }

    public static function listarProductosCategorias($nombre)
    {
        return CategoriaProductos::where('nombre', $nombre)->with('productos')->paginate(30);
    }

    public static function eliminarCategoriaProducto($id)
    {
        return CategoriaProductos::where('id', $id)->delete();
    }

    public static function listarCategoriasProductos()
    {
        return CategoriaProductos::with(['productos' => function ($query) {
            return $query->limit(15);
        }])->get();
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
                'idproductopadre' => $datos['productopadre']
            ]);
    }

    public static function actualizarimgProductos($datos)
    {
        return DB::table('productos')
            ->where('id', $datos['id'])
            ->update([
                'rutaimagen' => $datos['rutaimg']['big'],
                'img_hover' => $datos['rutaimg']['hover'],
                'img_url_min' => $datos['rutaimg']['min'],
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
            'rutaimagen' => $datos['rutaimg']['big'],
            'img_hover' => $datos['rutaimg']['hover'],
            'img_url_min' => $datos['rutaimg']['min'],
            'idproductopadre' => $datos['productopadre']
        ]);
        return $dat;
    }


    public static function agregarRelacionPropiedadProducto($propiedad, $valor, $stock = 0, $precio = 0, $rebaja = 0, $id, $descripcion = null, $img, $sumable = 0, $activacion = 1)
    {
        if (!is_null($valor)) {
            return DB::table('productos_propiedades')->insert([
                'productos_id' => $id,
                'propiedades_id' => $propiedad,
                'valor' => $valor,
                'stock' => $stock,
                'precio' => $precio,
                'descripcion' => $descripcion,
                'rebaja' => $rebaja,
                'img' => $img['big'],
                'imghover' => $img['hover'],
                'sumable' => $sumable,
                'activacion' => $activacion
            ]);
        }
    }

    public static function actualizarRelacionPropiedadProducto($datos, $id)
    {
        return DB::table('productos_propiedades')->where([['productos_id', $id], ['propiedades_id', $datos['propiedad']]])->update([
            'valor' => $datos['valorpropiedad'],
        ]);
    }

    public static function eliminarPropiedadesProductos($id)
    {
        DB::table('productos_propiedades')->where('productos_id', $id)->delete();
    }

    public static function eliminarProdcuto($id)
    {
        return DB::table('productos')->where('id', $id)->delete();
    }

    public static function traerDetallesProducto($id)
    {
        return Productos::where('id', $id)->with(['propiedades.valorPropiedad' => function ($query) use ($id) {
            $query->where('productos_id', $id);
        }])->with(['catgorias.productos' => function ($query) use ($id) {
            return $query->whereNotIn('id', [$id])->inRandomOrder()->limit(5);
        }])->with('propiedadesvalor.propiedadesPadre')->get();
    }

    public static function traerProductosPorCategoria($datos)
    {
        return Basics::collectionToArray(Productos::where([['idcategoria', $datos[0]['idcategoria']], ['id', '<>', $datos[0]['id']]])->with('propiedades')->with('catgorias')->with('propiedadesvalor.propiedadesPadre')->inRandomOrder()->limit(10)->get());
    }

    public static function buscarProducto($nombre)
    {
        return Basics::collectionToArray(Productos::where([['nombre', 'like', '%' . $nombre . '%'], ['estado', 1]])->orWhere([['referencia', 'like', '%' . $nombre . '%'], ['estado', 1]])->get(['nombre', 'id']));
    }

    public static function buscarProductoId($id)
    {
        return Basics::collectionToArray(Productos::where([['id', $id], ['estado', 1]])->with('catgorias')->with(['propiedades.valorPropiedad' => function ($query) use ($id) {
            $query->where('productos_id', $id);
        }])->get());
    }

}
