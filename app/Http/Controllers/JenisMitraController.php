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
        return redirect('JenisMitra')->with('flash_message','Jenis Mitra Terdaftar!');;
    }
}
