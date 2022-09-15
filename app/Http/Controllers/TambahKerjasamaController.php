<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
use App\Models\MoU;
use App\Models\MoA;

/*Kalo error maklumin masih on progress*/

class TambahKerjasamaController extends Controller
{


    public function index()
    {
        $kerjasama = TambahKerjasama::all();
        return view('Kerjasama')->with('kerjasama', $kerjasama);
    }

    public function create()
    {
        $tambahkerjasama = TambahKerjasama::all();
        return view('TambahKerja')->with('tambahkerjasama', $tambahkerjasama);
    }

    public function edit()
    {
        return view('TambahKerja');
    }

    public function store(Request $req)
    {
        $data = $req->validate([
            'namaperjanjian' => 'required',
            'path' => 'required',
            'jenis' => 'required'
        ]);

        $new_file = TambahKerja::create($data);

        if ($req->has('path')) {
            foreach ($req->get('path') as $path) {
                $pathname = $data['path'] . time() . $path->extension;

                $path->move(public_path('files', $pathname));

                PerjanjianKerjasama::create([
                    'file_id' => $new_file->id,
                    'path' => $pathname

                ]);
            }
        }
        return back();
    }
}
