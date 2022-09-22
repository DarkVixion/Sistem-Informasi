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
        return redirect('JenisMitra');
    }

    // public function update(Request $req, $id)
    // {
    //     $jm = JenisMitra::find($id);
    //     $input = $req->all();
    //     $jm->update($input);
    //     return redirect('JenisMitra');
    // }

    public function delete($id)
    {
        JenisMitra::destroy($id);
        return redirect('JenisMitra');
    }
}
