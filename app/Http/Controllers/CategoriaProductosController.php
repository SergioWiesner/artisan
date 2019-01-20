<?php

namespace App\Http\Controllers;

use App\CategoriaProductos;
use Illuminate\Http\Request;
use App\Source\Productos\productos;
use App\Http\Requests\CategoriaProductos as categoriarequest;

class CategoriaProductosController extends Controller
{

    public $productos;

    public function __construct()
    {
        $this->productos = new productos();
    }

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
    public function store(categoriarequest $request)
    {
        dd($request->all());
        $this->productos->
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaProductos $categoriaProductos
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaProductos $categoriaProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaProductos $categoriaProductos
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaProductos $categoriaProductos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\CategoriaProductos $categoriaProductos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaProductos $categoriaProductos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaProductos $categoriaProductos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaProductos $categoriaProductos)
    {
        //
    }
}
