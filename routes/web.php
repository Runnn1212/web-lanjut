<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;

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
// Pada ssat client meminta url "/" yang akan return view yang dibaca adalah string setelah /
Route::get('/', function () {
    return view('welcome');
});

Route::get('/lat', function () {
    return view('latihan');
});

Route::get('/bio', function () {
    return view('biodata');
});
Route::get('nama', function () {
    return view('nama',['name' => 'Muhammad Fandi Nurcahya']);
});
Route::get('nilai1', function () {
    return view('getnilai1');
});
Route::get('nilai2', function () {
    return view('getnilai2');
});

// Route::get('produk', function () {
//     return view('layouts.produk');
// });

// Route::get('home', function () {
//     return view('layouts.home');
// });

// Route::get('transaksi', function () {
//     return view('layouts.transaksi');
// });

// Route::get('laporan', function () {
//     return view('layouts.laporan');
// });

Route::get('home',[LatihanController::class,'home']);
Route::get('produk',[LatihanController::class,'produk']);
Route::get('transaksi',[LatihanController::class,'transaksi']);
Route::get('laporan',[LatihanController::class,'laporan']);