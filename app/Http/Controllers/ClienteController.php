<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Departamento;
use App\Models\Perfil;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json([
            "data"=>$clientes,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = Cliente::create($request->all());

                return response()->json([
            "message"=>"El cliente ha sido creado correctamente",
            "data"=>$cliente,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        $perfil = Perfil::findOrFail($cliente->id);
        $departamento = Departamento::findOrFail($cliente->id);
        return response()->json([
            "cliente"=>$cliente,
            "perfil"=>$perfil,
            "departamento"=>$departamento,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return response()->json([
            "message"=>"El Cliente ha sido actualizado correctamente",
            "data"=>$cliente,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json([
            "message"=>"El Cliente ha sido eliminado correctamente",
            "data"=>$cliente,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
