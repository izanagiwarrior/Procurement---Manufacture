<?php

use App\Http\Controllers\danaController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\pengambilanController;
use App\Http\Controllers\pengolahanController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\vendorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// bagian vendor
Route::get('/vendor', [vendorController::class, 'indexView'])->name('vendor');
Route::get('/vendor/create', [vendorController::class, 'createView']);
Route::post('/vendor/create', [vendorController::class, 'createData'])->name('createVendor');
Route::get('/vendor/update/{id}', [vendorController::class, 'updateView']);
Route::put('/vendor/update/{id}', [vendorController::class, 'updateData'])->name('updateVendor');

// bagian dana
Route::get('/dana', [danaController::class, 'indexView'])->name('dana');
Route::get('/dana/create', [danaController::class, 'createView']);
Route::post('/dana/create', [danaController::class, 'createData'])->name('createDana');
Route::get('/dana/update/{id}', [danaController::class, 'updateView']);
Route::put('/dana/update/{id}', [danaController::class, 'updateData'])->name('updateDana');

// bagian pengolahan baku
Route::get('/pengolahan-baku', [pengolahanController::class, 'indexView'])->name('pengolahan');
Route::get('/pengolahan-baku/create', [pengolahanController::class, 'createView']);
Route::post('/pengolahan-baku/create', [pengolahanController::class, 'createData'])->name('createPengolahan');
Route::get('/pengolahan-baku/update/{id}', [pengolahanController::class, 'updateView']);
Route::put('pengolahan-baku/update/{id}', [pengolahanController::class, 'updateData'])->name('updatePengolahan');

// bagian transaksi
Route::get('/transaksi', [transaksiController::class, 'indexView'])->name('transaksi');
Route::get('/transaksi/create', [transaksiController::class, 'createView']);
Route::post('/transaksi/create', [transaksiController::class, 'createData'])->name('createTransaksi');
Route::get('/transaksi/update/{id}', [transaksiController::class, 'updateView'])->name('updateView');
Route::put('/transaksi/update/{id}', [transaksiController::class, 'updateData'])->name('updateTransaksi');

// bagian order
Route::get('/order', [orderController::class, 'indexView'])->name('order');
Route::get('/order/create', [orderController::class, 'createView']);
Route::post('/order/create', [orderController::class, 'createData'])->name('createOrder');
Route::get('/order/update/{id}', [orderController::class, 'updateView']);
Route::put('/order/update/{id}', [orderController::class, 'updateData'])->name('updateOrder');

// bagian pengambilan barang
Route::get('/pengambilan-barang', [pengambilanController::class, 'indexView'])->name('pengambilan');
Route::get('/pengambilan-barang/create', [pengambilanController::class, 'createView']);
Route::post('/pengambilan-barang/create', [pengambilanController::class, 'createData'])->name('createPengambilan');
Route::get('/pengambilan-barang/update/{id}', [pengambilanController::class, 'updateView']);
Route::put('/pengambilan-barang/update/{id}', [pengambilanController::class, 'updateData'])->name('updatePengambilan');
