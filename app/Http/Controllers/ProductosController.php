<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Http\Requests\Productos as Productosrequest;
use App\Source\Productos\productos as productosmanager;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public $producto;

    public function __construct()
    {
        $this->producto = new productosmanager();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Productosrequest $request)
    {
        return $this->producto->agregarProducto($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }

    public function delete($id)
    {
        return $this->producto->eliminarproducto($id);
    }
}
