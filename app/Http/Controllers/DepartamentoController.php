<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreDepartamentoRequest;
use App\Http\Requests\UpdateDepartamentoRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return response()->json([
            "data"=>$departamentos,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartamentoRequest $request)
    {
        $departamento = Departamento::create($request->all());
        return response()->json([
            "message"=>"El Pago ha sido creado correctamente",
            "data"=>$departamento,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        return response()->json([
            "data"=>$departamento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartamentoRequest  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartamentoRequest $request, Departamento $departamento)
    {
        $departamento->update($request->all());
        return response()->json([
            "message"=>"El Departamento ha sido actualizado correctamente",
            "data"=>$departamento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return response()->json([
            "message"=>"El Pago ha sido eliminado correctamente",
            "data"=>$departamento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
