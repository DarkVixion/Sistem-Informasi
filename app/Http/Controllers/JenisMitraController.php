<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisMitraController extends Controller
{
    public function index()
    {
        return view('JenisMitra');
    }

    public function create()
    {
        return view('JenisMitra');
    }
}
