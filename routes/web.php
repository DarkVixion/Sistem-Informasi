<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahKerjasamaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\JenisMitraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LingkupKerjaController;
use App\Models\TambahKerjasama;

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

// <-- BAGIAN ADMIN -->
Route::get('AdminDashboard', function () {
    return view('AdminDashboard');
});

Route::get('Akun', function () {
    return view('Akun');
});
Route::post('Akun', [AkunController::class, 'store'])->name('inputdataakun');

Route::get('Mitra', function () {
    return view('Mitra');
});

Route::get('Kerjasama', [TambahKerjasamaController::class, 'index']);
Route::get('TambahKerja', [TambahKerjasamaController::class, 'create']);
Route::post('tambah_kerjasama', [TambahKerjasamaController::class, 'store'])->name('tambahkerjasama');
Route::get('EditKerja', [TambahKerjasamaController::class, 'edit']);

Route::get('JenisMitra', [JenisMitraController::class, 'index']);
Route::post('JenisMitra', [JenisMitraController::class, 'store'])->name('tambah_mitra');
Route::delete('JenisMitra/{id}', [JenisMitraController::class, 'delete'])->name('hapus_mitra');
// Route::post('/JenisMitra/{id}/edit', [JenisMitraController::class, 'edit']);
// Route::match(['put','patch'], '/JenisMitra/{id}/edit', [JenisMitraController::class, 'update']);

Route::get('LingkupKerja', [LingkupKerjaController::class, 'index']);
Route::post('LingkupKerja', [LingkupKerjaController::class, 'store'])->name('tambah_lingkup');
Route::delete('LingkupKerja/{id}', [LingkupKerjaController::class, 'delete'])->name('hapus_lingkup');

Route::get('InformasiMitra', function () {
    return view('InformasiMitra');
});

Route::get('AdminShowUser', function () {
    return view('AdminShowUser');
});


// <-- BAGIAN USER -->
Route::get('AdminUserMenu', function () {
    return view('AdminUserMenu');
});

Route::get('UserDashboard', function () {
    return view('UserDashboard');
});

Route::get('UserAkun', function () {
    return view('UserAkun');
});

Route::get('UserInfo', function () {
    return view('UserInformation');
});

Route::get('template', function () {
    return view('template');
});

Route::get('D3', function () {
    return view('D3');
});
