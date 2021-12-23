<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\Det_VentasController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/empresas',EmpresasController::class)->except([
    'create', 'edit'
]);
Route::resource('/categorias',CategoriasController::class)->except([
    'create', 'edit'
]);
Route::resource('/productos',ProductosController::class)->except([
    'create', 'edit'
]);
Route::resource('/locales',LocalesController::class)->except([
    'create', 'edit'
]);
Route::resource('/ventas',VentasController::class)->except([
    'create', 'edit'
]);
Route::resource('/det_ventas',Det_VentasController::class)->except([
    'create', 'edit'
]);