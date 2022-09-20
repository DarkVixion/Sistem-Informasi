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

    public function store()
    {

        return redirect('JenisMitra');
    }
}
