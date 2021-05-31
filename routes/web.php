<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/coba', function () {
    return view('coba');
});

Route::resource('kategori', KategoriController::class);
Route::get('/laporan/kategori', [KategoriController::class, 'laporan']);

Route::resource('barang', BarangController::class);
Route::get('/laporan/barang', [BarangController::class, 'laporan']);

Route::resource('supplier', SupplierController::class);
Route::get('/laporan/supplier', [SupplierController::class, 'laporan']);
