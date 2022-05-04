<?php

namespace App\Http\Controllers;

use App\Models\Licencia;

use Illuminate\Http\Response;
use App\Http\Requests\StoreLicenciaRequest;
use App\Http\Requests\UpdateLicenciaRequest;
use PharIo\Manifest\License;

class LicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licencias = Licencia::all();
        return response()->json([
            "data"=>$licencias,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLicenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenciaRequest $request)
    {
        $licencia = Licencia::create($request->all());
        return response()->json([
            "message"=>"La Licencia ha sido creada correctamente",
            "data"=>$licencia,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(Licencia $licencia)
    {
        return response()->json([
            "data"=>$licencia,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenciaRequest  $request
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenciaRequest $request, Licencia $licencia)
    {
        $licencia->update($request->all());
        return response()->json([
            "message"=>"La Licencia ha sido actualizada correctamente",
            "data"=>$licencia,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licencia $licencia)
    {
        $licencia->delete();
        return response()->json([
            "message"=>"La Licencia ha sido eliminada correctamente",
            "data"=>$licencia,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
