<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StoreDistritoRequest;
use App\Http\Requests\UpdateDistritoRequest;

class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distritos = Distrito::all();
        return response()->json([
            "data"=>$distritos,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDistritoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDistritoRequest $request)
    {
        $distrito = Distrito::create($request->all());
        return response()->json([
            "message"=>"El Distrito ha sido creado correctamente",
            "data"=>$distrito,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function show(Distrito $distrito)
    {
        return response()->json([
            "data"=>$distrito,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDistritoRequest  $request
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDistritoRequest $request, Distrito $distrito)
    {
        $distrito->update($request->all());
        return response()->json([
            "message"=>"El Distrito ha sido actualizado correctamente",
            "data"=>$distrito,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distrito $distrito)
    {
        $distrito->delete();
        return response()->json([
            "message"=>"El Distrito ha sido eliminado correctamente",
            "data"=>$distrito,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
