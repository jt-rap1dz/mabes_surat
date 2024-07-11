<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KesatuanController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PersonelController;
// use adalah memanggil file yang dituju


// dibawah ini adalah route langsung view tanpa controller
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

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/kesatuan', function () {
//     return view('admin.kesatuan');
// });


// dibawah ini adalah route menggunakan controller
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/kesatuan', [KesatuanController::class, 'index']);

// digunakan jika ada kesamaan fungsi class, maka menggunakan (name)
Route::get('/agama', [AgamaController::class, 'index'])->name('agama');
Route::get('/agama/create', [AgamaController::class, 'create'])->name('agamacreate');
// agama/create membuat url untuk diarahkan ke file admin/agama/create.blade.php
Route::post('/agama/store', [AgamaController::class, 'store'])->name('agamastore');
// route post digunakan untuk mengirimkan data secara tertutup

Route::get('/pimpinan', [PimpinanController::class, 'index'])->name('pimpinan');
Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');
Route::get('/personel', [PersonelController::class, 'index'])->name('personel');