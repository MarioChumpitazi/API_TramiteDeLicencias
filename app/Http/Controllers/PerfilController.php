<?php

namespace App\Http\Controllers;

use App\Models\Perfil;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfil::all();
        return response()->json([
            "data"=>$perfiles,
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
     * @param  \App\Http\Requests\StorePerfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerfilRequest $request)
    {
        $perfil = Perfil::create($request->all());
        return response()->json([
            "message"=>"El perfil ha sido creado correctamente",
            "data"=>$perfil,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return response()->json([
            "data"=>$perfil,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerfilRequest  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerfilRequest $request, Perfil $perfil)
    {
        $perfil->update($request->all());
        return response()->json([
            "message"=>"El Perfil ha sido actualizado correctamente",
            "data"=>$perfil,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return response()->json([
            "message"=>"El Perfil ha sido eliminado correctamente",
            "data"=>$perfil,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
