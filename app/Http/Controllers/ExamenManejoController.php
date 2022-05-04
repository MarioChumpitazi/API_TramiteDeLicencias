<?php

namespace App\Http\Controllers;

use App\Models\ExamenManejo;

use Illuminate\Http\Response;
use App\Http\Requests\StoreExamenManejoRequest;
use App\Http\Requests\UpdateExamenManejoRequest;

class ExamenManejoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenManejos = ExamenManejo::all();
        return response()->json([
            "data"=>$examenManejos,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExamenManejoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamenManejoRequest $request)
    {
        $examenManejo = ExamenManejo::create($request->all());
        return response()->json([
            "message"=>"El Distrito ha sido creado correctamente",
            "data"=>$examenManejo,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenManejo  $examenManejo
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenManejo $examenManejo)
    {
        return response()->json([
            "data"=>$examenManejo,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamenManejoRequest  $request
     * @param  \App\Models\ExamenManejo  $examenManejo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamenManejoRequest $request, ExamenManejo $examenManejo)
    {
        $examenManejo->update($request->all());
        return response()->json([
            "message"=>"El Examnen de Manejo ha sido actualizado correctamente",
            "data"=>$examenManejo,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenManejo  $examenManejo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenManejo $examenManejo)
    {
        $examenManejo->delete();
        return response()->json([
            "message"=>"El Examnen de Manejo ha sido eliminado correctamente",
            "data"=>$examenManejo,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
