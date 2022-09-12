<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKerjasamaController extends Controller
{
    public function index()
    {
        return view('Kerjasama');
    }

    public function tambah() //sama aja dengan fungsi create
    {
        return view('TambahKerja');
    }
}
