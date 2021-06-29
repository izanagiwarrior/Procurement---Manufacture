<?php

use App\Http\Controllers\danaController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\pengambilanController;
use App\Http\Controllers\pengolahanController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\vendorController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/vendor', [vendorController::class, 'index']);
Route::post('/vendor/create', [vendorController::class, 'create']);
Route::put('/vendor/update/{id}', [vendorController::class, 'update']);
Route::delete('/vendor/delete/{id}', [vendorController::class, 'delete']);

// bagian dana
Route::get('/dana', [danaController::class, 'index']);
Route::post('/dana/create', [danaController::class, 'create']);
Route::put('/dana/update/{id}', [danaController::class, 'update']);
Route::delete('/dana/delete/{id}', [danaController::class, 'delete']);

// bagian pengolahan baku
Route::get('/pengolahan-baku', [pengolahanController::class, 'index']);
Route::post('/pengolahan-baku/create', [pengolahanController::class, 'create']);
Route::delete('/pengolahan-baku/delete/{id}', [pengolahanController::class, 'delete']);
Route::put('pengolahan-baku/update/{id}', [pengolahanController::class, 'update']);

// bagian transaksi
Route::get('/transaksi', [transaksiController::class, 'index']);
Route::post('/transaksi/create', [transaksiController::class, 'create']);
Route::delete('/transaksi/delete/{id}', [transaksiController::class, 'delete']);
Route::put('/transaksi/update/{id}', [transaksiController::class, 'update']);

// bagian order
Route::get('/order', [orderController::class, 'index']);
Route::post('/order/create', [orderController::class, 'create']);
Route::delete('/order/delete/{id}', [orderController::class, 'delete']);
Route::put('/order/update/{id}', [orderController::class, 'update']);

// bagian pengambilan barang
Route::get('/pengambilan-barang', [pengambilanController::class, 'index']);
Route::post('/pengambilan-barang/create', [pengambilanController::class, 'create']);
Route::delete('/pengambilan-barang/delete/{id}', [pengambilanController::class, 'delete']);
Route::put('/pengambilan-barang/update/{id}', [pengambilanController::class, 'update']);
