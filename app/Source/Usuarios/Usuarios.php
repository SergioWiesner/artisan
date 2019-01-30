<?php

namespace App\Source\Usuarios;

use App\Source\Usuarios\Model;
use App\Source\Tools\Basics;
use App\TipoDocumento;

class Usuarios
{


    public function listarUsuariosPaginados()
    {
        dd(Model::listarUsuariospaginados());
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
}
