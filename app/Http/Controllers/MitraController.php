<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LingkupKerja;
use App\Models\JenisMitra;
use App\Models\TambahKerjasama;
use App\Models\AdminViewUser;

use App\Imports\ExcelImports;
use App\Models\NamaMItra;
use Maatwebsite\Excel\Facades\Excel;


class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tks = TambahKerjasama::all();
        $user = AdminViewUser::all();
        $jmitra = JenisMitra::all();
        return view('Mitra')->with('tks', $tks)
            ->with('user', $user)
            ->with('jm', $jmitra);
    }

    public function create()
    {
        $tks = TambahKerjasama::all();
        $nm = NamaMitra::all();
        $user = AdminViewUser::all();
        $jmitra = JenisMitra::all();
        return view('TambahMitra')->with('tks', $tks)
            ->with('user', $user)
            ->with('jm', $jmitra)
            ->with('nm', $nm);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tks = TambahKerjasama::find($id);
        $user = AdminViewUser::all();
        $jmitra = JenisMitra::all();

        return view('AdminViewMitra')->with('tks', $tks)
            ->with('user', $user)
            ->with('jm', $jmitra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tks = TambahKerjasama::find($id);
        $user = AdminViewUser::all();
        $lkerja = LingkupKerja::all();
        $jmitra = JenisMitra::all();
        return view('AdminViewMitraEdit')->with('tks', $tks)
            ->with('lk', $lkerja)
            ->with('jm', $jmitra)
            ->with('user', $user);
    }

    public function store(Request $req)
    {
        $tks = new TambahKerjasama;

        $tks->status = $req['status'];
        $tks->namamitra = $req['namamitra'];
        $tks->jenismitra = $req['jenismitra'];
        $tks->bulaninput = $req['bulaninput'];
        $tks->alamat = $req['alamat'];
        $tks->website = $req['website'];
        $tks->notelpmitra = $req['notelpmitra'];
        $tks->negara = $req['negara'];

        $tks->save();

        return redirect('Mitra');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tks = TambahKerjasama::find($id);

        $tks->namamitra = $req['namamitra'];
        $tks->jenismitra = $req['jenismitra'];
        $tks->lingkupkerja = $req['lingkupkerja'];
        $tks->alamat = $req['alamat'];
        $tks->website = $req['website'];
        $tks->narahubung = $req['narahubung'];
        $tks->notelpnara = $req['notelpnara'];
        $tks->assignuserakun = $req['pic'];
        $tks->notelppic = $req['notelppic'];

        $tks->save();

        return redirect('Mitra');
    }

    public function importMitra()
    {
        return view('NamaMitra');
    }

    public function uploadMitra(Request $request)
    {
        $array = Excel::toArray(new ExcelImports, $request->file('path_excel'), 's3', \Maatwebsite\Excel\Excel::XLSX);

        $i = 0;

        foreach ($array[0] as $value) {
            if ($i > 0) {
                $mitra = new NamaMitra;
                $mitra->nama = $value[0];
                $mitra->jenismitra = $value[1];
                $mitra->alamat = $value[2];
                $mitra->negara = $value[3];
                $mitra->notelpmitra	 = $value[4];
                $mitra->website = $value[5];

                $mitra->save();
            }

            $i++;
        }
    }
}
