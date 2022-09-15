<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahKerjasamaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\JenisMitraController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/Kerjasama', [TambahKerjasamaController::class, 'index']);

Route::get('/TambahKerja', [TambahKerjasamaController::class, 'create']);

Route::post('/tambah_kerjasama', [TambahKerjasamaController::class, 'store'])->name('berlin');

Route::get('/JenisMitra', [JenisMitraController::class, 'index']);

Route::get('/EditKerja', [TambahKerjasamaController::class, 'edit']);

Route::get('/SkalaKerja', function () {
    return view('SkalaKerja');
});
