<?php

namespace App\Http\Controllers;

use App\Propiedades;
use App\Source\Productos\Propiedades\propiedades as pr;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propiedades $propiedades
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedades $propiedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propiedades $propiedades
     * @return \Illuminate\Http\Response
     */
    public function edit(Propiedades $propiedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Propiedades $propiedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propiedades $propiedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propiedades $propiedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedades $propiedades)
    {
        //
    }

    public function delete($id)
    {
        $propiedad = new pr();
        return $propiedad->eliminarPropiedad($id);
    }

    public function toogle($id, $estado)
    {
        $propiedad = new pr();
        return $propiedad->tooglearEstado($id, $estado);
    }
}
