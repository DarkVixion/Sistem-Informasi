<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerjasama;
use App\Models\JenisMitra;
use App\Models\TambahKerjasama;
use App\Models\AdminViewUser;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**Ini controller untuk page tambahmitra*/
    public function index()
    {
        $tks = TambahKerjasama::all();
        $user = AdminViewUser::all();
        $jmitra = JenisMitra::all();
        return view('TambahMitra')->with('tks', $tks)
            ->with('user', $user)
            ->with('jm', $jmitra);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //dd($mitrabaru);

        $mitrabaru = new Kerjasama;

        $mitrabaru->status = $req['status'];
        $mitrabaru->namamitra = $req['namamitra'];
        $mitrabaru->jenismitra = $req['jenismitra'];
        $mitrabaru->bulaninput = $req['bulaninput'];
        $mitrabaru->alamat = $req['alamat'];
        $mitrabaru->website = $req['website'];
        $mitrabaru->notelpmitra = $req['notelpmitra'];
        $mitrabaru->negara = $req['negara'];

        $mitrabaru->save();

        return redirect('/Mitra');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function show(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerjasama $kerjasama)
    {
        //
    }
}
