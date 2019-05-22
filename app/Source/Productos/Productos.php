<?php

namespace App\Source\Productos;


use Illuminate\Support\Facades\Session;
use App\Source\Tools\Basics;
use App\Source\Tools\formateo;


class productos
{
    const ubicacion = "/public/productos/";
    const ubicacionlogs = "productos";

    public function listarProductosPaginados()
    {
        return Modelo::listarProductospaginados();
    }

    public function listarProductosPaginadosRandom()
    {
        return Modelo::listarProductospaginadosRamdon();
    }

    public function listarProductos()
    {
        return Basics::collectionToArray(Modelo::listarProductos());
    }

    public function listarCategoriasProductos()
    {
        return Basics::collectionToArray(Modelo::listarCategoriasProductos());
    }

    public function agregarCategoriaProductos($datos)
    {
        $ruta = Basics::Subirimagenes($datos['rutaimg'], self::ubicacion . 'categoria');
        $datos['rutaimg'] = $ruta;
        if (Modelo::agregarCategoriaProducto($datos)) {
            Session::put('success', ["Categoria '" . $datos['nombre'] . "' creada"]);
        } else {
            Session::put('error', ["Error, no se puedo crear la categoria"]);
        }

        return redirect()->back();
    }


    public function eliminarCategoriaProducto($id)
    {
        if (Modelo::eliminarCategoriaProducto($id)) {
            Session::put('success', ["Categoria eliminada"]);
        } else {
            Session::put('error', ["Error, no se puedo eliminar la categoria"]);
        }

        return redirect()->back();
    }

    public function actualizarCategoria($datos, $id)
    {
        $datos = Basics::determinarRutaimg($datos, self::ubicacion);
        if (Modelo::ActualizarCategoriaProductos($datos, $id)) {
            Session::put('success', ["Categoria actualizada"]);
        } else {
            Session::put('error', ["Error, no se puedo actualizar la categoria"]);
        }
        return redirect()->back();
    }

    public function agregarProducto($request)
    {
        try {
            $ruta = Basics::Subirimagenes($request['imagenproducto'], self::ubicacion . 'productos');
            $request['rutaimg'] = $ruta;
            $request['referencia'] = Basics::obtenerReferencia($request);
            $producto = Modelo::agregarProducto($request);
            if (isset($request['propiedades']['propiedad'])) {
                for ($a = 0; $a < count($request['propiedades']['propiedad']); $a++) {
                    if (isset($request['propiedades']['Precio'][$a])) {
                        Modelo::agregarRelacionPropiedadProducto($request['propiedades']['propiedad'][$a], $request['propiedades']['valorpropiedad'][$a], $request['propiedades']['stock'][$a], $request['propiedades']['Precio'][$a], $producto->id);
                    } else {
                        Modelo::agregarRelacionPropiedadProducto($request['propiedades']['propiedad'][$a], $request['propiedades']['valorpropiedad'][$a], 0, 0, $producto->id);
                    }
                }
            }
            Session::put('success', ["Producto creado correctamente"]);
        } catch (\Exception $e) {
            Basics::agregarLog('Error al agregar el producto', $e->getMessage(), self::ubicacionlogs);
            Session::put('error', ["Error, no se puedo agregar el producto"]);
        }

        return redirect()->back();
    }

    public function actualizarProducto($datos)
    {
        try {
            $datos = Basics::determinarRutaimg($datos, self::ubicacion);
            Modelo::actualizarProductos($datos);
            Modelo::eliminarPropiedadesProductos($datos['id']);
            if (isset($datos['propiedadanterior'])) {
                for ($a = 0; $a < count($datos['propiedadanterior']['propiedad']); $a++) {
                    Modelo::agregarRelacionPropiedadProducto($datos['propiedadanterior']['propiedad'][$a], $datos['propiedadanterior']['valorpropiedad'][$a], $datos['id']);
                }
            }
            if (isset($datos['propiedades'])) {
                for ($a = 0; $a < count($datos['propiedades']['propiedad']); $a++) {
                    if (isset($datos['propiedades']['Precio'][$a])) {
                        Modelo::agregarRelacionPropiedadProducto($datos['propiedades']['propiedad'][$a], $datos['propiedades']['valorpropiedad'][$a], $datos['propiedades']['stock'][$a], $datos['propiedades']['Precio'][$a], $datos['id']);
                    } else {
                        Modelo::agregarRelacionPropiedadProducto($datos['propiedades']['propiedad'][$a], $datos['propiedades']['valorpropiedad'][$a], 0, 0, $datos['id']);
                    }

                }
            }
            Session::put('success', ["Producto acturalizado correctamente"]);
        } catch (\Exception $e) {
            Basics::agregarLog('Error al eliminar el producto', $e->getMessage(), self::ubicacionlogs);
            Session::put('error', ["Error, no se puedo eliminar el producto " . $e->getMessage()]);
        }

        return redirect()->back();
    }

    public function eliminarproducto($id)
    {
        if (Modelo::eliminarProdcuto($id)) {
            Session::put('success', ["Producto eliminado correctamente"]);
        } else {
            Session::put('error', ["Error, no se puedo eliminar el producto"]);
        }
        return redirect()->back();
    }

    public function verProducto($id)
    {
        $arr = Basics::collectionToArray(Modelo::traerDetallesProducto($id));
        $arr[0]['propiedades'] = formateo::ordenarPropiedadesValores($arr[0]['propiedades']);
        return $arr;
    }

    public function productosPorCategoria($datos)
    {
        return Modelo::traerProductosPorCategoria($datos);
    }

    public function buscarProducto($nombre)
    {
        return Modelo::buscarProducto($nombre);
    }

    public function buscarProductoId($id)
    {
        $arr = Basics::collectionToArray(Modelo::traerDetallesProducto($id));
        $arr[0]['propiedades'] = formateo::ordenarPropiedadesValores($arr[0]['propiedades']);
        return $arr;
    }
}
