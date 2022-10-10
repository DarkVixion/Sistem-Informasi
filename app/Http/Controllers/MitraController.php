<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LingkupKerja;
use App\Models\JenisMitra;
use App\Models\TambahKerjasama;

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
        return view('Mitra')->with('tks', $tks);
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
        return view('AdminViewMitra')->with('tks', $tks);
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
        $lkerja = LingkupKerja::all();
        $jmitra = JenisMitra::all();
        return view('AdminViewMitraEdit')->with('tks', $tks)
                                         ->with('lk', $lkerja)
                                         ->with('jm', $jmitra);
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

}
