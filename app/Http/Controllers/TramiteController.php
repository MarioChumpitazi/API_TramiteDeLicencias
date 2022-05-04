<?php

namespace App\Http\Controllers;

use App\Models\Tramite;

use Illuminate\Http\Response;
use App\Http\Requests\StoreTramiteRequest;
use App\Http\Requests\UpdateTramiteRequest;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tramites = Tramite::all();
        return response()->json([
            "data"=>$tramites,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTramiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTramiteRequest $request)
    {
        $tramite = Tramite::create($request->all());
        return response()->json([
            "message"=>"El Tramite ha sido creado correctamente",
            "data"=>$tramite,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function show(Tramite $tramite)
    {
        return response()->json([
            "data"=>$tramite,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTramiteRequest  $request
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTramiteRequest $request, Tramite $tramite)
    {
        $tramite->update($request->all());
        return response()->json([
            "message"=>"El Tramite ha sido actualizado correctamente",
            "data"=>$tramite,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tramite $tramite)
    {
        $tramite->delete();
        return response()->json([
            "message"=>"El Tramite ha sido eliminado correctamente",
            "data"=>$tramite,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
