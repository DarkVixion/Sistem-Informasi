<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKerjasamaController extends Controller
{
    public function index()
    {
        return view('Kerjasama');
    }

    public function tambah()
    {
        return view('TambahKerja');
    }
}
