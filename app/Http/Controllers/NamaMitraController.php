<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaMitra;

class NamaMitraController extends Controller
{
    public function index()
    {
        $nm = NamaMitra::all();
        return view('NamaMitra')->with('nm', $nm);
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
        //
    }

    public function update(Request $req, $id)
    {
        $input = $req->all();
        $nama = NamaMitra::find($id);
        $nama->update($input);
        return back();
    }

    public function destroy($id)
    {
        NamaMitra::destroy($id);
        return back();
    }
}
