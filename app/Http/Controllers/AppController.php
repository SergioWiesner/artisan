<?php

namespace App\Http\Controllers;

use App\Source\Productos\Propiedades\Propiedades;
use App\Source\Productos\productos;
use App\Source\Usuarios\Usuarios;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function home()
    {
        if (Auth::guest()) {
            return view('page.itsy.home');

        } else {
            $usuarios = new Usuarios();
            $productos = new productos();
            return view('system.home')
                ->with('productos', $productos->listarProductosPaginadosRandom())
                ->with('usuarios', $usuarios->listarUsuariosPaginados());
        }
    }

    public function propiedades()
    {
        $propiedades = new propiedades();
        return view('system.productos.propiedades.listar')
            ->with('propiedades', $propiedades->listarPropiedades())
            ->with('categoriapropiedades', $propiedades->listarCategoriaPropiedades());
    }

    public function productos()
    {
        $propiedades = new propiedades();
        $productos = new productos();
        return view('system.productos.listar')
            ->with('productos', $productos->listarProductosPaginados())
            ->with('propiedades', $propiedades->listarPropiedades())
            ->with('categoria', $propiedades->listarCategoriaProductos());
    }

    public function verproductodetalles($id)
    {
        $productos = new productos();
        $propiedades = new propiedades();
        $datos = $productos->verProducto($id);
        if (count($datos) > 0) {
            return view('system.productos.observar')->with('detalles', $datos)
                ->with('relacionados', $productos->productosPorCategoria($datos))
                ->with('productos', $productos->listarProductos())
                ->with('propiedades', $propiedades->listarPropiedadesSinPaginar())
                ->with('categorias', $propiedades->listarCategoriaProductos());
        } else {
            return redirect()->route('productos');
        }
    }

    public function usuarios()
    {

        $usuarios = new Usuarios();

        return view('system.usuarios.listar')
            ->with('bodegas', \App\Bodegas::all()->toArray())
            ->with('usuarios', $usuarios->listaUsuariosTodasLasRelacionesPaginados())
            ->with('documentos', $usuarios->listarTipoDocumentos());
    }

    public function verUsuarios($id)
    {
        $usuarios = new Usuarios();
        return view('system.usuarios.observar')
            ->with('detalles', $usuarios->buscarUsuario($id))
            ->with('documentos', $usuarios->listarTipoDocumentos());
    }

    public function configuracion()
    {
        return view('system.configuracion.configuracion');
    }
}
