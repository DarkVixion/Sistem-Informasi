<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahKerjasamaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\JenisMitraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LingkupKerjaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AdminUserMenuController;
use App\Http\Controllers\KerjasamaController;
use App\Models\AdminViewUser;
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
    $sum = DB::table('moas')->sum('nilaikontrak');
    $countmoa = DB::table('moas')->count('id');
    $countmou = DB::table('mous')->count('id');
    $summitra = DB::table('tambahkerjasama')->count('namamitra');

    return view('AdminDashboard')->with('sum', $sum)
        ->with('countmoa', $countmoa)
        ->with('countmou', $countmou)
        ->with('summitra', $summitra);
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
Route::get('/preview/{path}', [TambahKerjasamaController::class, 'preview'])->name('preview');

Route::get('JenisMitra', [JenisMitraController::class, 'index']);
Route::post('JenisMitra', [JenisMitraController::class, 'store'])->name('tambah_mitra');
Route::delete('JenisMitra/{id}', [JenisMitraController::class, 'delete'])->name('hapus_mitra');
Route::match(['put', 'patch'], '/JenisMitra/{id}/edit', [JenisMitraController::class, 'update'])->name('edit_mitra');

Route::get('LingkupKerja', [LingkupKerjaController::class, 'index']);
Route::post('LingkupKerja', [LingkupKerjaController::class, 'store'])->name('tambah_lingkup');
Route::delete('LingkupKerja/{id}', [LingkupKerjaController::class, 'delete'])->name('hapus_lingkup');
Route::match(['put', 'patch'], '/LingkupKerja/{id}/edit', [LingkupKerjaController::class, 'update'])->name('edit_lingkup');

// Route::get('InformasiMitra', function () {
//     return view('InformasiMitra');
// });

Route::get('Mitra', [MitraController::class, 'index']);
Route::get('AdminEditMitra/{id}', [MitraController::class, 'edit'])->name('edit_mitra1');
Route::match(['put', 'patch'], 'AdminEditMitra/{id}', [MitraController::class, 'update'])->name('update_mitra');
Route::get('TambahMitra', [KerjasamaController::class, 'index'])->name('tambah_mitra');

Route::get('AdminShowUser', [AdminUserMenuController::class, 'index2']);

// ---TESTING---
Route::get('getData/{id}', function ($id) {
    $data = AdminViewUser::find($id);
    return response()->json($data);
});


// <-- BAGIAN USER -->
Route::get('AdminUserMenu', function () {
    return view('AdminUserMenu');
});
Route::post('/AdminUserMenuStore', [AdminUserMenuController::class, 'store'])->name('inputdataakunuser');
Route::get('/AdminUserMenu', [AdminUserMenuController::class, 'testuser']);
Route::get('/AdminViewUser/{id}', [AdminUserMenuController::class, 'show'])->name('view_user');
Route::delete('/AdminViewUser/{id}', [AdminUserMenuController::class, 'delete'])->name('hapus_user');
Route::match(['put', 'patch'], '/AdminEditUser/{id}', [AdminUserMenuController::class, 'edit'])->name('edit_user');

// <-- BAGIAN IMPORT EXCEL -->
Route::get('/importexcel', [TambahKerjasamaController::class, 'importExcel'])->name('import_excel');
Route::post('/uploadexcel', [TambahKerjasamaController::class, 'uploadExcel'])->name('upload_excel');

Route::get('UserDashboard', function () {
    return view('UserDashboard');
});

// <-- TESTING DASHBOARD -->
Route::get('testsum', [TambahKerjasamaController::class, 'sumnilaikontrak']);

Route::get('UserAkun', function () {
    return view('UserAkun');
});

Route::get('UserRekap', function () {
    return view('UserRekap');
});

Route::get('UserMitra', function () {
    return view('Mitra');
});

Route::get('template', function () {
    return view('template');
});

Route::get('D3', function () {
    return view('D3');
});
