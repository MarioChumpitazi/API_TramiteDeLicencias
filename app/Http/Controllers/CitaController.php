<?php

namespace App\Http\Controllers;

use App\Models\Cita;

use Illuminate\Http\Response;

use App\Http\Requests\StoreCitaRequest;
use App\Http\Requests\UpdateCitaRequest;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();
        return response()->json([
            "data"=>$citas,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitaRequest $request)
    {
        $cita = Cita::create($request->all());
        return response()->json([
            "message"=>"La Cita ha sido creada correctamente",
            "data"=>$cita,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        return response()->json([
            "data"=>$cita,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCitaRequest  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitaRequest $request, Cita $cita)
    {
        $cita->update($request->all());
        return response()->json([
            "message"=>"La Cita ha sido actualizada correctamente",
            "data"=>$cita,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return response()->json([
            "message"=>"La Cita ha sido eliminada correctamente",
            "data"=>$cita,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
