<?php

namespace App\Http\Controllers;
use App\Models\TambahKerjasama;

use Illuminate\Http\Request;

class TambahKerjasamaController extends Controller
{
    public function index()
    {
        /*$kerjasama = TambahKerjasama::all();*/
        return view('Kerjasama')/*->with('kerjasama',$kerjasama)*/;
    }

    public function create()
    {
        return view('TambahKerja');
    }

    public function edit()
    {
        return view('TambahKerja');
    }
}