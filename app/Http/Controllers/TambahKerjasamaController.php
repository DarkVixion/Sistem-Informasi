<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
use Illuminate\Support\Facades\Redirect;
use App\Models\Pic;
use App\Models\MoU;
use App\Models\MoA;


/* KALO ERROR MAKLUMIN MASIH ON PROGRESS */

class TambahKerjasamaController extends Controller
{
    public function index() // untuk view hal Kerjasama
    {
        $kerjasama = TambahKerjasama::all();
        return view('Kerjasama')->with('kerjasama', $kerjasama);
    }

    public function create() // untuk view hal Tambah Kerjasama, smae as index
    {
        $tambahkerjasama = TambahKerjasama::all();
        return view('TambahKerja')->with('tambahkerjasama', $tambahkerjasama);
    }

    public function store(Request $req) // store input dari hal Tambah Kerjasama
    {

        /*$data = $req->validate([
            'status' => 'required',
            'namamitra' => 'required',
            'jenismitra' => 'required',
            'judulkerja' => 'required',
            'lingkupkerja' => 'required',
            'alamat' => 'required',
            'negara' => 'required',
            'notelpmitra' => 'required',
            'website' => 'required',
            'bulaninput' => 'required',
            'judul_mou' => 'required',
            'tglmulai' => 'required',
            'tglselesai' => 'required',
            'path_mou' => 'required',
            'judul_moa' => 'required',
            'nilaikontrak' => 'required',
            'path_moa' => 'required',
            'narahubung' => 'required',
            'notelpnara' => 'required',
            'emailnara' => 'required',
            'pic' => 'required'
        ]);*/

        $user = new TambahKerjasama;

        $user->status = $req['status'];
        $user->namamitra = $req['namamitra'];
        $user->jenismitra = $req['jenismitra'];
        $user->judulkerjasama = $req['judulkerjasama'];
        $user->lingkupkerja = $req['lingkupkerja'];
        $user->alamat = $req['alamat'];
        $user->negara = $req['negara'];
        $user->notelpmitra = $req['notelpmitra'];
        $user->website = $req['website'];
        $user->bulaninput = $req['bulaninput'];
        $user->judul_mou = $req['judul_mou'];
        $user->tglmulai = $req['tglmulai'];
        $user->tglselesai = $req['tglselesai'];
        //$user->path_mou = $req['path_mou'];
        $user->judul_moa = $req['judul_moa'];
        $user->nilaikontrak = $req['nilaikontra'];
        //$user->path_moa = $req['path_moa'];
        $user->narahubung = $req['narahubung'];
        $user->notelpnara = $req['notelpnara'];
        $user->emailnara = $req['mailnara'];
        $user->pic = $req['pic'];

        $user->save();

        return redirect('/Kerjasama');
    }

    public function edit()
    {
        return view('TambahKerja');
    }

    public function perjanjiankerjasama()
    {
        return $this->hasMany(PerjanjianKerjasama::class);
    }

    public function path_mou()
    {
        return $this->hasMany(MoU::class);
    }

    public function path_moa()
    {
        return $this->hasMany(MoA::class);
    }
}
