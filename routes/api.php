<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/sims', [\App\Http\Controllers\SimController::class, 'index']);
Route::get('/androids', [\App\Http\Controllers\AndroidController::class, 'index']);
Route::get('/iphones', [\App\Http\Controllers\IphoneController::class, 'index']);
Route::get('/aksesoris', [\App\Http\Controllers\AksesorisController::class, 'index']);