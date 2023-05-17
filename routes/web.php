<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produk;
use App\Http\Controllers\pelanggancontroller;
use App\Http\Controllers\mahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [produk::class, 'index']);
Route::get('/show', [produk::class, 'show']);

Route::get('/halaman',function(){
    $title =  'GABUNGAN BRIDGE SELURUH INDONESIA';
    $konten = 'AYO BELAJAR BRIDGE';
    return view('konten.halaman',compact('title','konten'));
});

Route::get('/pelanggan', [pelanggancontroller::class, 'index']);

Route::resource('mahasiswa', mahasiswaController::class);