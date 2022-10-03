<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahKerjasamaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\JenisMitraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LingkupKerjaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AdminUserMenuController;
use App\Http\Controllers\AdminViewUserController;

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

Route::post('/edit_akun', [AkunController::class, 'store'])->name('inputdataakun');
Route::match(['put', 'patch'], '/Akun/{id}', [AkunController::class, 'edit'])->name('editdataakun');
Route::get('/Akun', [AkunController::class, 'isiakun']);

// <-- BAGIAN TEST AKUN ADMIN -->
//Route::get('/AkunTampil', [AkunController::class, 'test']); //untuk testing


Route::get('Kerjasama', [TambahKerjasamaController::class, 'index']);
Route::get('Kerjasama/edit/{id}', [TambahKerjasamaController::class, 'edit'])->name('edit_kerjasama');
Route::delete('Kerjasama/{id}', [TambahKerjasamaController::class, 'delete'])->name('hapus_kerjasama');
Route::match(['put', 'patch'], 'Kerjasama/{id}', [TambahKerjasamaController::class, 'update'])->name('update_kerjasama');
Route::get('TambahKerja', [TambahKerjasamaController::class, 'create']);
Route::post('Tambahkerja', [TambahKerjasamaController::class, 'store'])->name('tambah_kerjasama');

Route::get('JenisMitra', [JenisMitraController::class, 'index']);
Route::post('JenisMitra', [JenisMitraController::class, 'store'])->name('tambah_mitra');
Route::delete('JenisMitra/{id}', [JenisMitraController::class, 'delete'])->name('hapus_mitra');
Route::match(['put', 'patch'], '/JenisMitra/{id}/edit', [JenisMitraController::class, 'update'])->name('edit_mitra');

Route::get('LingkupKerja', [LingkupKerjaController::class, 'index']);
Route::post('LingkupKerja', [LingkupKerjaController::class, 'store'])->name('tambah_lingkup');
Route::delete('LingkupKerja/{id}', [LingkupKerjaController::class, 'delete'])->name('hapus_lingkup');
Route::match(['put', 'patch'], '/LingkupKerja/{id}/edit', [LingkupKerjaController::class, 'update'])->name('edit_lingkup');

Route::get('InformasiMitra', function () {
    return view('InformasiMitra');
});


Route::get('Mitra', [MitraController::class, 'index']);
Route::get('AdminViewMitra/{id}', [MitraController::class, 'show'])->name('show_mitra');
Route::get('AdminViewMitraEdit', [MitraController::class, 'edit']);
Route::match(['put', 'patch'], '/Mitra/{id}/edit', [MitraController::class, 'update'])->name('edit_mitra');

Route::get('AdminShowUser', function () {
    return view('AdminShowUser');
});
Route::get('AdminShowUser', [AdminUserMenuController::class, 'index']);

// <-- BAGIAN USER -->
Route::get('AdminUserMenu', function () {
    return view('AdminUserMenu');
});
Route::post('/AdminUserMenuStore', [AdminUserMenuController::class, 'store'])->name('inputdataakunuser');
Route::get('/AdminUserMenu', [AdminUserMenuController::class, 'testuser']);
Route::get('/AdminViewUser/{id}', [AdminViewUserController::class, 'show'])->name('view_user');

//Route::get('/AdminEditUser', [AdminViewUserController::class, 'index']);
Route::match(['put', 'patch'], '/AdminEditUser/{id}', [AdminViewUserController::class, 'edit'])->name('edit_user');

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
