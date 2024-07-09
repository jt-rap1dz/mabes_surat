<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KesatuanController;
// use adalah memanggil file yang dituju



Route::get('/', function () {
    return view('welcome');
});
// routing tanpa diarahkan kemanapun
Route::get('/salam', function () {
    return "<h1>Selamat Belajar Laravel</h1>";
});
// jika ingin melihat hasilnya tinggal masuk ke browser
// dan ketikan http://127.0.0.1:8000/salam atau localhost:8000/salam
Route::get('/tampilan_pertama', function () {
    return view('hello');
});
// route diatas adalah routing yang tampilannya mengarahkan ke
// halaman view yang ada di dalam folder resources/views
Route::get('/tampilan_kedua', function () {
    return view('formulir');
});
Route::get('/tampilan_ketiga', function () {
    return view('form');
});
Route::get('/tampilan_keempat', function () {
    return view('utama.utama');
});
// return view diatas mengarahkan ke folder view utama
// mengunakan titik (.) untuk lokasinnya

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });


Route::get('/kesatuan', [KesatuanController::class, 'index']);

// Route::get('/kesatuan', function () {
//     return view('admin.kesatuan');
// });