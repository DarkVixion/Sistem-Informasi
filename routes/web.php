<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahKerjasamaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\JenisMitraController;
use App\Http\Controllers\LingkupKerjaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AdminUserMenuController;
use App\Http\Controllers\NamaMitraController;
use App\Models\AdminViewUser;
use App\Models\TambahKerjasama;
use App\Http\Controllers\LoginController;
use App\Models\AdminUserMenu;
use App\Models\MoA;
use App\Models\MoU;

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

Route::get('/', function(){
    return redirect('/Login');
});

// <-- BAGIAN ADMIN -->
Route::get('/AdminDashboard', [LoginController::class, 'admin']);

Route::match(['put', 'patch'], '/Akun/{id}', [AkunController::class, 'edit'])->name('editdataakun');
Route::get('/Akun', [AkunController::class, 'show']);

// <-- BAGIAN TEST AKUN ADMIN -->
Route::get('/NamaMitra', [NamaMitraController::class, 'index']);
Route::post('/NamaMitra', [NamaMitraController::class, 'store'])->name('tambah_nama');
Route::delete('NamaMitra/{id}', [NamaMitraController::class, 'destroy'])->name('hapus_nama');
Route::match(['put', 'patch'], '/NamaMitra/{id}/edit', [NamaMitraController::class, 'update'])->name('edit_nama');

Route::get('Kerjasama', [TambahKerjasamaController::class, 'index']);
Route::get('Kerjasama/edit/{id}', [TambahKerjasamaController::class, 'edit'])->name('edit_kerjasama');
Route::delete('Kerjasama/{id}', [TambahKerjasamaController::class, 'delete'])->name('hapus_kerjasama');
Route::match(['put', 'patch'], 'Kerjasama/{id}', [TambahKerjasamaController::class, 'update'])->name('update_kerjasama');
Route::get('TambahKerja', [TambahKerjasamaController::class, 'create']);
Route::post('Tambahkerja', [TambahKerjasamaController::class, 'store'])->name('tambah_kerjasama');
Route::get('/preview/{path}', [TambahKerjasamaController::class, 'preview'])->name('preview');

Route::get('JenisMitra', [JenisMitraController::class, 'index']);
Route::post('JenisMitra', [JenisMitraController::class, 'store'])->name('tambah_jenis');
Route::delete('JenisMitra/{id}', [JenisMitraController::class, 'delete'])->name('hapus_mitra');
Route::match(['put', 'patch'], '/JenisMitra/{id}/edit', [JenisMitraController::class, 'update'])->name('edit_mitra');

Route::get('LingkupKerja', [LingkupKerjaController::class, 'index']);
Route::post('LingkupKerja', [LingkupKerjaController::class, 'store'])->name('tambah_lingkup');
Route::delete('LingkupKerja/{id}', [LingkupKerjaController::class, 'delete'])->name('hapus_lingkup');
Route::match(['put', 'patch'], '/LingkupKerja/{id}/edit', [LingkupKerjaController::class, 'update'])->name('edit_lingkup');

Route::get('Mitra', [MitraController::class, 'index']);
Route::get('AdminEditMitra/{id}', [MitraController::class, 'edit'])->name('edit_mitra1');
Route::match(['put', 'patch'], 'AdminEditMitra/{id}', [MitraController::class, 'update'])->name('update_mitra');
Route::get('TambahMitra', [MitraController::class, 'index2']);
Route::post('TambahMitra', [MitraController::class, 'store'])->name('tambah_mitra');

Route::get('AdminShowUser', [AdminUserMenuController::class, 'index']);

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

// <-- TESTING DASHBOARD -->
Route::get('testsum', [TambahKerjasamaController::class, 'sumnilaikontrak']);

Route::get('/UserAkun', function () {
    $akun = AdminUserMenu::where('id', session('id'))->first();

    if($akun != null)
    {
        return view('UserAkun')->with('akun', $akun);
    }
    
    return redirect('/Login');
});

Route::get('UserRekap', function () {
    $tks = TambahKerjasama::all();
    return view('UserRekap')->with('kerjasama', $tks);
});

Route::get('UserMitra', function () {
    $tks = TambahKerjasama::all();
    $user = AdminViewUser::all();
    return view('UserMitra')->with('tks', $tks)
    ->with('user', $user);
});

Route::get('/Login', [LoginController::class, 'index']);
Route::post('/Login/check', [LoginController::class, 'login'])->name('checking');
Route::get('/Logout', [LoginController::class, 'logout']);


Route::get('template', function () {
    return view('template');
});

Route::get('D3', function () {
    return view('D3');
});
