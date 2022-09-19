<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
use App\Models\MoU;
use App\Models\MoA;
use Illuminate\Support\Facades\Redirect;

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
        $input = $req->all();
        $input = TambahKerjasama::Select("select * from tambahkerjasama");

        TambahKerjasama::create($input);

        $data = $req->validate([
            'namaperjanjian' => 'required',
            'path' => 'required',
            'jenis' => 'required'
        ]);

        $new_file = TambahKerjasama::create($data);

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
        return redirect('Kerjasama');
    }
}
