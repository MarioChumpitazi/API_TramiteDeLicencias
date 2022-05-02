<?php

namespace App\Http\Controllers;

use App\Models\Provincia;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreProvinciaRequest;
use App\Http\Requests\UpdateProvinciaRequest;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = Provincia::all();
        return response()->json([
            "data"=>$provincias,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProvinciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProvinciaRequest $request)
    {
        $provincia = Provincia::create($request->all());
        return response()->json([
            "message"=>"La Provincia ha sido creada correctamente",
            "data"=>$provincia,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincia)
    {
        return response()->json([
            "data"=>$provincia,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProvinciaRequest  $request
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProvinciaRequest $request, Provincia $provincia)
    {
        $provincia->update($request->all());
        return response()->json([
            "message"=>"La Provincia ha sido actualizada correctamente",
            "data"=>$provincia,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincia)
    {
        $provincia->delete();
        return response()->json([
            "message"=>"La Provincia ha sido eliminada correctamente",
            "data"=>$provincia,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
