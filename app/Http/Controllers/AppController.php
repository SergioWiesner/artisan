<?php

namespace App\Http\Controllers;

use App\ClienteApi;
use App\Source\Configuracion\Configuracion;
use App\Source\Productos\Propiedades\Propiedades;
use App\Source\Productos\productos;
use App\Source\Tools\Basics;
use App\Source\Tools\Permisos;
use App\Source\Usuarios\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            return view('system.productos.observar')
                ->with('detalles', $datos)
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
        $configuracion = new Configuracion();
        return view('system.usuarios.listar')
            ->with('bodegas', \App\Bodegas::all()->toArray())
            ->with('usuarios', $usuarios->listaUsuariosTodasLasRelacionesPaginados())
            ->with('documentos', $usuarios->listarTipoDocumentos())
            ->with('perfiles', $configuracion->traerPerfiles());
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
        $configuracion = new Configuracion();
        return view('system.configuracion.config')
            ->with('configuracion', $configuracion->configuracion());
    }


    public function crearClienteVista()
    {
        if (Auth::user()->nivelaccesso >= 10) {
            $clientes = Basics::collectionToArray(ClienteApi::all());
        } else {
            $clientes = Basics::collectionToArray(ClienteApi::where('user_id', Auth::user()->id)->get());
        }
        return view('system.configuracion.Api.ClienteApi.registrar')
            ->with('clientes', $clientes);
    }

    public function clientes()
    {
        $usuarios = new Usuarios();
        return view('system.clientes.listar')
            ->with('documentos', $usuarios->listarTipoDocumentos());
    }

    public function perfilespermisos($id = null)
    {
        $relacion = null;
        $conf = new Configuracion();
        if (!is_null($id)) {
            $relacion = $conf->traerRelacionPerfilesPermisos($id);
        }

        return view('system.configuracion.perfilespermisos')
            ->with('permiso', $conf->traerPermisos())
            ->with('perfiles', $conf->traerPerfiles())
            ->with('relacion', $relacion)
            ->with('perfilactual', $id);
    }

    public function ventas()
    {

        return view('system.ventas.lista');
    }

    public function ventaAgregada()
    {
        $usuarios = new Usuarios();
        return view('system.ventas.agregar')
            ->with('documentos', $usuarios->listarTipoDocumentos());
    }

    public function buscarProductos(Request $request)
    {
        $prod = new \App\Source\Productos\productos();
        return $prod->buscarProducto($request->valor);
    }

    public function buscarProductosId(Request $request)
    {
        $prod = new \App\Source\Productos\productos();
        return $prod->buscarProductoId($request->valor);
    }
}
