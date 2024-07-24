<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KesatuanController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\BerandaController;
// use adalah memanggil file yang dituju


// dibawah ini adalah route langsung view tanpa controller
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);

route::group(['middleware' => ['auth', 'role:admin|personel']], function(){



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

route::group(['middleware' => ['role:admin']], function(){


Route::get('/kesatuan', [KesatuanController::class, 'index']);
Route::get('/kesatuan/create', [KesatuanController::class, 'create'])->name('kesatuancreate');
// kesatuan/create membuat url untuk diarahkan ke file admin/kesatuan/create.blade.php
Route::post('/kesatuan/store', [KesatuanController::class, 'store'])->name('kesatuanstore');
// route post digunakan untuk mengirimkan data secara tertutup
Route::post('/kesatuan/update/{id}', [KesatuanController::class, 'update'])->name('kesatuanupdate');


// digunakan jika ada kesamaan fungsi class, maka menggunakan (name)
Route::get('/agama', [AgamaController::class, 'index'])->name('agama');
Route::get('/agama/create', [AgamaController::class, 'create'])->name('agamacreate');
// agama/create membuat url untuk diarahkan ke file admin/agama/create.blade.php
Route::post('/agama/store', [AgamaController::class, 'store'])->name('agamastore');
// route post digunakan untuk mengirimkan data secara tertutup

Route::get('/pimpinan', [PimpinanController::class, 'index'])->name('pimpinan');
Route::get('/pimpinan/create', [PimpinanController::class, 'create'])->name('pimpinancreate');
// pimpinan/create membuat url untuk diarahkan ke file admin/pimpinan/create.blade.php
Route::post('/pimpinan/store', [PimpinanController::class, 'store'])->name('pimpinanstore');
// route post digunakan untuk mengirimkan data secara tertutup

Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');
Route::get('/tugas/create', [TugasController::class, 'create'])->name('tugascreate');
// tugas/create membuat url untuk diarahkan ke file admin/tugas/create.blade.php
Route::post('/tugas/store', [TugasController::class, 'store'])->name('tugasstore');
// route post digunakan untuk mengirimkan data secara tertutup
Route::get('/tugas/show/{id}', [TugasController::class, 'show'])->name('tugasshow');
// route show adalah url untuk melihat detail data per line atau id
Route::get('/tugas/delete/{id}', [TugasController::class, 'destroy'])->name('tugasdestroy');
// route delete adalah url untuk menghapus data per line atau id
Route::get('/tugas/cetak_pdf/{id}', [TugasController::class, 'cetak_pdf'])->name('cetak_pdf');
Route::get('/tugas/edit/{id}', [TugasController::class, 'edit'])->name('tugasedit');
Route::post('/tugas/update/{id}', [TugasController::class, 'update'])->name('tugasupdate');

Route::get('/personel', [PersonelController::class, 'index'])->name('personel');
Route::get('/personel/create', [PersonelController::class, 'create'])->name('personelcreate');
// personel/create membuat url untuk diarahkan ke file admin/personel/create.blade.php
Route::post('/personel/store', [PersonelController::class, 'store'])->name('personelstore');
// route post digunakan untuk mengirimkan data secara tertutup
Route::get('/personel/edit/{id}', [PersonelController::class, 'edit'])->name('personeledit');
Route::post('/personel/update/{id}', [PersonelController::class, 'update'])->name('personelupdate');
Route::get('/personel/personelPDF', [PersonelController::class, 'personelPDF'])->name('personelPDF');
});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
