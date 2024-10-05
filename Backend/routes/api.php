<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\BarrioController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CuidadoController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\CitasMedicaController;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\DetalleCitaController;
use App\Http\Controllers\MedicamentoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PaisController::class)->group(function () {
    Route::post('/pais/save','save');
    Route::get('/pais/datos','getData');
    Route::put('/pais/update','update');
    Route::delete('/pais/delete','delete');
});

Route::controller(DepartamentoController::class)->group(function () {
    Route::post('/Departamento/save','save');
    Route::get('/Departamento/datos','getData');
    Route::put('/Departamento/update','update');
    Route::delete('/Departamento/delete','delete');
});

Route::controller(MunicipioController::class)->group(function () {
    Route::post('/Municipio/save','save');
    Route::get('/Municipio/datos','getData');
    Route::put('/Municipio/update','update');
    Route::delete('/Municipio/delete','delete');
});

Route::controller(BarrioController::class)->group(function () {
    Route::post('/Barrio/save','save');
    Route::get('/Barrio/datos','getData');
    Route::put('/Barrio/update','update');
    Route::delete('/Barrio/delete','delete');
});

Route::controller(PropietarioController::class)->group(function () {
    Route::post('/Propietario/save','save');
    Route::get('/Propietario/datos','getData');
    Route::put('/Propietario/update','update');
    Route::delete('/Propietario/delete','delete');
});

Route::controller(MascotaController::class)->group(function () {
    Route::post('/Mascota/save','save');
    Route::get('/Mascota/datos','getData');
    Route::put('/Mascota/update','update');
    Route::delete('/Mascota/delete','delete');
});

Route::controller(CuidadoController::class)->group(function () {
    Route::post('/Cuidado/save','save');
    Route::get('/Cuidado/datos','getData');
    Route::put('/Cuidado/update','update');
    Route::delete('/Cuidado/delete','delete');
});

Route::controller(RazaController::class)->group(function () {
    Route::post('/Raza/save','save');
    Route::get('/Raza/datos','getData');
    Route::put('/Raza/update','update');
    Route::delete('/Raza/delete','delete');
});

Route::controller(VacunaController::class)->group(function () {
    Route::post('/Vacuna/save','save');
    Route::get('/Vacuna/datos','getData');
    Route::put('/Vacuna/update','update');
    Route::delete('/Vacuna/delete','delete');
});

Route::controller(CitasMedicaController::class)->group(function () {
    Route::post('/CitasMedica/save','save');
    Route::get('/CitasMedica/datos','getData');
    Route::put('/CitasMedica/update','update');
    Route::delete('/CitasMedica/delete','delete');
});

Route::controller(VeterinarioController::class)->group(function () {
    Route::post('/Veterinario/save','save');
    Route::get('/Veterinario/datos','getData');
    Route::put('/Veterinario/update','update');
    Route::delete('/Veterinario/delete','delete');
});

Route::controller(DetalleCitaController::class)->group(function () {
    Route::post('/DetalleCita/save','save');
    Route::get('/DetalleCita/datos','getData');
    Route::put('/DetalleCita/update','update');
    Route::delete('/DetalleCita/delete','delete');
});

Route::controller(MedicamentoController::class)->group(function () {
    Route::post('/Medicamento/save','save');
    Route::get('/Medicamento/datos','getData');
    Route::put('/Medicamento/update','update');
    Route::delete('/Medicamento/delete','delete');
});
