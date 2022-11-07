<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaMitra;
use App\Models\JenisMitra;

class NamaMitraController extends Controller
{
    public function index()
    {
        $nm = NamaMitra::all();
        $jm = JenisMitra::all();
        return view('NamaMitra', compact('nm', 'jm'));
    }

    public function create()
    {
        //
    }

    public function store(Request $req)
    {
        $input = $req->all();
        NamaMitra::create($input);
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jm = JenisMitra::all();
        $tks = NamaMitra::find($id);
        return view('NamaMitraEdit', compact('jm', 'tks'));
    }

    public function update(Request $req, $id)
    {
        $tks = NamaMitra::find($id);
        $tks->nama = $req['nama'];
        $tks->jenismitra = $req['jenismitra'];
        $tks->alamat = $req['alamat'];
        $tks->website = $req['website'];
        $tks->notelpmitra = $req['notelpmitra'];

        $tks->save();

        return redirect('Mitra');
    }

    public function destroy($id)
    {
        NamaMitra::destroy($id);
        return back();
    }
}
