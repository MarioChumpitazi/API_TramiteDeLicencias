<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

use Illuminate\Http\Response;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json([
            "data"=>$empleados,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpleadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleadoRequest $request)
    {
        $empleado = Empleado::create($request->all());
        return response()->json([
            "message"=>"El Empleado ha sido creado correctamente",
            "data"=>$empleado,
            "status"=>Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return response()->json([
            "data"=>$empleado,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadoRequest  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpleadoRequest $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return response()->json([
            "message"=>"El Empleado ha sido actualizado correctamente",
            "data"=>$empleado,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return response()->json([
            "message"=>"El Empleado ha sido eliminado correctamente",
            "data"=>$empleado,
            "status"=>Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
