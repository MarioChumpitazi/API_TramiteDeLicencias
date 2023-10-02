<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ExamenConocimientoController;
use App\Http\Controllers\ExamenManejoController;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\UserController;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Empleado;
use App\Models\ExamenConocimiento;
use App\Models\ExamenManejo;
use App\Models\Licencia;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::apiResource('/clientes',ClienteController::class);
});
*/

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('/clientes',ClienteController::class);
    Route::apiResource('/departamentos',DepartamentoController::class);
    Route::apiResource('/provincias',ProvinciaController::class);
    Route::apiResource('/distritos',DistritoController::class);
    Route::apiResource('/empleados',EmpleadoController::class);
    Route::apiResource('/tramites',TramiteController::class);
    Route::apiResource('/examenConocimientos',ExamenConocimientoController::class);
    Route::apiResource('/examenManejos',ExamenManejoController::class);
    Route::apiResource('/licencias',LicenciaController::class);
    Route::apiResource('/citas',CitaController::class);

    Route::apiResource('/perfils',PerfilController::class);
    Route::apiResource('/permisos',PermisoController::class);
    Route::apiResource('/modulos',ModuloController::class);
});