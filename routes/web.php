<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Searchntroller;
use App\Http\Controllers\KodePosController;
use App\Http\Controllers\PoscodeController;



Route::get('/', function () {
    return view('beranda');
});

Route::get('/faq', function () {
    return view('footer.Faq');
});

Route::get('/bantuan', function () {
    return view('footer.bantuan');
});

Route::get('/kontak', function () {
    return view('footer.kontak');
});

Route::get('/layanan', function () {
    return view('footer.layanan');
});

Route::get('/privasi', function () {
    return view('footer.privasi');
});


Route::get('/home', [PoscodeController::class, 'index']);
Route::get('/province/{id}', [PoscodeController::class, 'show']);
Route::get('/cari', [Searchntroller::class, 'search']);
Route::get('/kodepos', [KodePosController::class, 'index']);

