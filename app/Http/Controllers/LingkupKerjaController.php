<?php

namespace App\Http\Controllers;
use App\Models\LingkupKerja;

use Illuminate\Http\Request;

class LingkupKerjaController extends Controller
{
    public function index()
    {
        $lkerja = LingkupKerja::all();
        return view('LingkupKerja')->with('lk',$lkerja);
    }

    public function store()
    {

        return redirect('LingkupKerja');
    }
}
