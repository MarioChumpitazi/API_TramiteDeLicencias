<?php

namespace App\Http\Controllers;

use App\Models\ExamenConocimiento;

use Illuminate\Http\Response;
use App\Http\Requests\StoreExamenConocimientoRequest;
use App\Http\Requests\UpdateExamenConocimientoRequest;

class ExamenConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenConocimientos = ExamenConocimiento::all();
        return response()->json([
            "data"=>$examenConocimientos,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExamenConocimientoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamenConocimientoRequest $request)
    {
        $examenConocimiento = ExamenConocimiento::create($request->all());
        return response()->json([
            "message"=>"El Examen de Conocimiento ha sido creado correctamente",
            "data"=>$examenConocimiento,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenConocimiento  $examenConocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenConocimiento $examenConocimiento)
    {
        return response()->json([
            "data"=>$examenConocimiento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamenConocimientoRequest  $request
     * @param  \App\Models\ExamenConocimiento  $examenConocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamenConocimientoRequest $request, ExamenConocimiento $examenConocimiento)
    {
        $examenConocimiento->update($request->all());
        return response()->json([
            "message"=>"El Examen de Conocimiento ha sido actualizado correctamente",
            "data"=>$examenConocimiento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenConocimiento  $examenConocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenConocimiento $examenConocimiento)
    {
        $examenConocimiento->delete();
        return response()->json([
            "message"=>"El DiExamen de Conocimientostrito ha sido eliminado correctamente",
            "data"=>$examenConocimiento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
