<?php

namespace App\Http\Controllers;

use App\Models\Permiso;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StorePermisoRequest;
use App\Http\Requests\UpdatePermisoRequest;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permiso::all();
        return response()->json([
            "data"=>$permisos,
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
     * @param  \App\Http\Requests\StorePermisoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermisoRequest $request)
    {
        $permiso = Permiso::create($request->all());
        return response()->json([
            "message"=>"El permiso ha sido creado correctamente",
            "data"=>$permiso,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Permiso $permiso)
    {
        return response()->json([
            "data"=>$permiso,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit(Permiso $permiso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermisoRequest  $request
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermisoRequest $request, Permiso $permiso)
    {
        $permiso->update($request->all());
        return response()->json([
            "message"=>"El Permiso ha sido actualizado correctamente",
            "data"=>$permiso,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permiso $permiso)
    {
        $permiso->delete();
        return response()->json([
            "message"=>"El Permiso ha sido eliminado correctamente",
            "data"=>$permiso,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
