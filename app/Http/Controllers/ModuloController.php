<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use App\Models\Tramite;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StoreModuloRequest;
use App\Http\Requests\UpdateModuloRequest;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();
        return response()->json([
            "data"=>$modulos,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
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
     * @param  \App\Http\Requests\StoreModuloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModuloRequest $request)
    {
        $modulo = Modulo::create($request->all());
        return response()->json([
            "message"=>"El Modulo ha sido creado correctamente",
            "data"=>$modulo,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show(Modulo $modulo)
    {
        $tramite = Tramite::findOrFail($modulo->id());
        return response()->json([
            "modulo"=>$modulo,
            "tramite"=>$tramite,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulo $modulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModuloRequest  $request
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModuloRequest $request, Modulo $modulo)
    {
        $modulo->update($request->all());
        return response()->json([
            "message"=>"El Modulo ha sido actualizado correctamente",
            "data"=>$modulo,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulo $modulo)
    {
        $modulo->delete();
        return response()->json([
            "message"=>"El Modulo ha sido eliminado correctamente",
            "data"=>$modulo,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
