<?php

namespace App\Http\Controllers;
use App\Models\JenisMitra;

use Illuminate\Http\Request;

class JenisMitraController extends Controller
{
    public function index()
    {
        $jmitra = JenisMitra::all();
        return view('JenisMitra')->with('jm',$jmitra);
    }

    public function store(Request $req)
    {
        $input = $req->all();
        JenisMitra::create($input);
        return back();
    }

    public function update(Request $req, $id)
    {
        $input = $req->all();
        $jenis = JenisMitra::find($id);
        $jenis->update($input);
        return back();
    }

        public function delete($id)
    {
        JenisMitra::destroy($id);
        return back();
    }
}
