<?php

namespace App\Source\Productos;

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

    public function listarProductos()
    {
        return Basics::collectionToArray(Modelo::listarProductos());
    }


    public function agregarCategoriaProductos($datos)
    {
        $ruta = Basics::Subirimagenes($datos['rutaimg'], self::ubicacion . 'categoria/');
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
        if (isset($datos['rutaimg'])) {
            $ruta = Basics::Subirimagenes($datos['rutaimg'], self::ubicacion . 'categoria');
            $datos['rutaimg'] = $ruta;
        } else {
            $datos['rutaimg'] = $datos['rutaimagenold'];
        }

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
        return Modelo::traerDetallesProducto($id);
    }

    public function productosPorCategoria($datos)
    {
        return Modelo::traerProductosPorCategoria($datos);
    }
}
