<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimController;
use App\Http\Controllers\IphoneController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\AndroidController;
use App\Http\Controllers\AksesorisController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PhonesController::class, 'home']);

Route::get('/phones', [PhonesController::class, 'index']);

Route::get('/sim', function () {
    return view('sim');
});

Route::get('/android', function () {
    return view('androids');
});

Route::get('/sims', [SimController::class, 'index']);
Route::get('/androids', [AndroidController::class, 'index']);
Route::get('/products', function () {
    return view('products');
});

// iPhone
Route::get('/iphones', function () {
    return view('iphones');
});
Route::get('/iphones', [IphoneController::class, 'index']);

// Aksesoris
Route::get('/aksesoris', function () {
    return view('aksesoris');
});
Route::get('/aksesoris' , [AksesorisController::class, 'index']);

Route::get('/kontak', function () {
    return view('kontak');
});