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

    public function store(Request $req)
    {
        $input = $req->all();
        LingkupKerja::create($input);
        return back();
    }

    public function update(Request $req, $id)
    {
        $input = $req->all();
        $lingkup = LingkupKerja::find($id);
        $lingkup->update($input);
        return back();
    }

    public function delete($id)
    {
        LingkupKerja::destroy($id);
        return back();
    }
}
