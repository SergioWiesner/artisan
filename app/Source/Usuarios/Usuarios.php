<?php

namespace App\Source\Usuarios;

use App\Source\Usuarios\Model;
use App\Source\Tools\Basics;
use App\TipoDocumento;

class Usuarios
{

    const ubicacion = "/public/users/";

    public function listarUsuariosPaginados()
    {
        return Model::listarUsuariospaginados();
    }

    public function listarTipoDocumentos()
    {
        return Basics::collectionToArray(TipoDocumento::all());
    }

    public function listaUsuariosTodasLasRelaciones()
    {
        return Basics::collectionToArray(Model::todasLasPropiedades());
    }

    public function listaUsuariosTodasLasRelacionesPaginados()
    {
        return Model::todasLasPropiedadesPaginados();
    }

    public function buscarUsuario($id)
    {
        return Basics::collectionToArray(Model::observarDetalles($id));
    }

    public function eliminarUsuario($id)
    {
        Model::eliminarUsuario($id);
        return redirect()->back();
    }

    public function editarUsuarios($id, $data)
    {
        $data = Basics::determinarRutaimg($data, self::ubicacion);
        Model::editarUsuario($id, $data);
        return redirect()->back();
    }

    public function crearUsuario($data)
    {
        $data = Basics::determinarRutaimg($data, self::ubicacion);
        $insercion = Model::crearUsuario($data);
        Model::relacionBodegas($data['bodegasId'], $insercion->id);
        return redirect()->back();
    }
}
