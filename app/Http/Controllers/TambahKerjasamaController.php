<?php

namespace App\Http\Controllers;

use App\Models\TambahKerjasama;

use Illuminate\Http\Request;

/*Kalo error maklumin masih on progress*/

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

    public function store(Request $request)
    {
        $this->validate($request, [
            'filejudulmou' => 'required|mimes:pdf|max:2048',
        ]);

        $new_mou = time() . '.' . $request->filejudulmou->extension();

        $request->filejudulmou->move(public_path('files'), $new_mou);

        return back()->with('success', 'Added');
        /** show success message after storing product and image*/
    }
}
