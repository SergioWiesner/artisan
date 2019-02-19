<?php

namespace App\Source\Productos;

use App\Source\Usuarios\Model;
use Illuminate\Support\Facades\Session;
use App\Source\Productos\Modelo;
use App\Source\Tools\Basics;
use Zend\Diactoros\Request;
use Carbon\Carbon;

class productos
{
    const ubicacion = "/public/productos/";

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
        //try {
        $ruta = Basics::Subirimagenes($request['imagenproducto'], self::ubicacion . 'productos');
        $request['rutaimg'] = $ruta;
        $request['referencia'] = Basics::obtenerReferencia($request);
        $producto = Modelo::agregarProducto($request);
        for ($a = 0; $a < count($request['propiedades']); $a++) {
            Modelo::agregarRelacionPropiedadProducto($request['propiedades'][$a], $producto->id);
        }
        Session::put('success', ["Producto creado correctamente"]);
        //} catch (\Exception $e) {
        //  Session::put('error', ["Error, no se puedo agregar el producto"]);
        //}

        return redirect()->back();
    }

    public function actualizarProducto($datos)
    {
        try {
            $datos = Basics::determinarRutaimg($datos, self::ubicacion);
            Modelo::actualizarProductos($datos);
            Modelo::eliminarPropiedadesProductos($datos['id']);
            if (isset($datos['propiedadanterior'])) {
                for ($a = 0; $a < count($datos['propiedadanterior']); $a++) {
                    Modelo::agregarRelacionPropiedadProducto($datos['propiedadanterior'][$a], $datos['id']);
                }
            }
            if (isset($datos['propiedades'])) {
                for ($a = 0; $a < count($datos['propiedades']); $a++) {
                    Modelo::agregarRelacionPropiedadProducto($datos['propiedades'][$a], $datos['id']);
                }
            }
            Session::put('success', ["Producto acturalizado correctamente"]);
        } catch (\Exception $e) {
            Session::put('error', ["Error, no se puedo eliminar el producto " . $e->getMessage()]);
        }

        return redirect()->back();
    }

    public
    function eliminarproducto($id)
    {
        if (Modelo::eliminarProdcuto($id)) {
            Session::put('success', ["Producto eliminado correctamente"]);
        } else {
            Session::put('error', ["Error, no se puedo eliminar el producto"]);
        }
        return redirect()->back();
    }

    public
    function verProducto($id)
    {
        return Modelo::traerDetallesProducto($id);
    }

    public
    function productosPorCategoria($datos)
    {
        return Modelo::traerProductosPorCategoria($datos);
    }

    public
    function buscarProducto($nombre)
    {
        return Modelo::buscarProducto($nombre);
    }

    public
    function buscarProductoId($id)
    {
        return Modelo::buscarProductoId($id);
    }
}
