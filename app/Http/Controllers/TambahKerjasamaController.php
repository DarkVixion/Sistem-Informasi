<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
use App\Models\Pic;
use App\Models\MoU;
use App\Models\MoA;
use App\Models\JenisMitra;
use App\Models\LingkupKerja;
use App\Models\AdminViewUser;


/* KALO ERROR MAKLUMIN MASIH ON PROGRESS */

class TambahKerjasamaController extends Controller
{
    public function index() // untuk view hal Kerjasama
    {
        $kerjasama = TambahKerjasama::all();
        return view('Kerjasama')->with('kerjasama', $kerjasama);
    }

    public function create() // untuk view hal Tambah Kerjasama
    {
        $jenismitra = JenisMitra::all();
        $lingkup = LingkupKerja::all();
        $user = AdminViewUser::all(); //define d sini kalo mau ambil data dari tabel lain

        return view('TambahKerja')->with('jm', $jenismitra)
                                ->with('lk', $lingkup)
                                ->with('users', $user);
    }

    public function store(Request $req) // store input dari hal Tambah Kerjasama
    {
        $user = new TambahKerjasama;

        $user->status = $req['status'];
        $user->namamitra = $req['namamitra'];
        $user->jenismitra = $req['jenismitra'];
        $user->lingkupkerja = $req['lingkupkerja'];
        $user->alamat = $req['alamat'];
        $user->negara = $req['negara'];
        $user->notelpmitra = $req['notelpmitra'];
        $user->website = $req['website'];
        $user->bulaninput = $req['bulaninput'];
        $user->narahubung = $req['narahubung'];
        $user->notelpnara = $req['notelpnara'];
        $user->emailnara = $req['emailnara'];
        $user->notelppic = $req['notelppic'];
        $user->emailpic = $req['emailpic'];

        $user->judul_mou = '';
        $user->tglmulai_mou = null;
        $user->tglselesai_mou = null;

        $user->judul_moa = '';
        $user->tglmulai_moa = null;
        $user->tglselesai_moa = null;
        $user->nilaikontrak = null;

        $mou = '';
        $moa = '';

        if (isset($req['path_mou'])) {
            foreach ($req['path_mou'] as $file) {
                $namafilemou = $req['judul_mou'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $mou = $namafilemou;

                $file->move(public_path('files'), $namafilemou);
            }

            $user->judul_mou = $req['judul_mou'];
            $user->tglmulai_mou = $req['tglmulai_mou'];
            $user->tglselesai_mou = $req['tglselesai_mou'];
        }

        $user->path_mou = $mou;

        //jika ada path, jalankan code. jika tidak ada, skip code.
        if (isset($req['path_moa'])) {
            foreach ($req['path_moa'] as $file) {
                $namafilemoa = $req['judul_moa'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $moa = $namafilemoa;

                $file->move(public_path('files'), $namafilemoa);
            }

            $user->judul_moa = $req['judul_moa'];
            $user->tglmulai_moa = $req['tglmulai_moa'];
            $user->tglselesai_moa = $req['tglselesai_moa'];
            $user->nilaikontrak = $req['nilaikontrak'];
        }

        $user->path_moa = $moa;

        $user->save();

        return redirect('/Kerjasama');
    }

    public function edit($id)
    {
        $tambahkerjasama = TambahKerjasama::find($id);
        $jenismitra = JenisMitra::all();
        $lingkup = LingkupKerja::all();
        $user = AdminViewUser::all();

        // var_dump($tambahkerjasama->path_moa);die;

        return view('EditKerja')->with('tks', $tambahkerjasama)
            ->with('jm', $jenismitra)
            ->with('lk', $lingkup)
            ->with('users', $user);
    }

    public function update(Request $req, $id)
    {
        $user = TambahKerjasama::find($id);

        $user->status = $req['status'];
        $user->namamitra = $req['namamitra'];
        $user->jenismitra = $req['jenismitra'];
        $user->lingkupkerja = $req['lingkupkerja'];
        $user->alamat = $req['alamat'];
        $user->negara = $req['negara'];
        $user->notelpmitra = $req['notelpmitra'];
        $user->website = $req['website'];
        $user->bulaninput = $req['bulaninput'];
        $user->narahubung = $req['narahubung'];
        $user->notelpnara = $req['notelpnara'];
        $user->emailnara = $req['emailnara'];
        $user->assignuserakun = $req['pic'];
        $user->notelppic = $req['notelppic'];
        $user->emailpic = $req['emailpic'];

        $user->judul_mou = $req['judul_mou'];
        $user->tglmulai_mou = $req['tglmulai_mou'];
        $user->tglselesai_mou = $req['tglselesai_mou'];

        $user->judul_moa = $req['judul_moa'];
        $user->tglmulai_moa = $req['tglmulai_moa'];
        $user->tglselesai_moa = $req['tglselesai_moa'];
        $user->nilaikontrak = $req['nilaikontrak'];

        if($req['check1']==1)
        {
            $user->tglselesai_mou = null;
        }

        if($req['check2']==1)
        {
            $user->tglselesai_moa = null;
        }

        $mou = $user->path_mou;
        $moa = $user->path_moa;

        if (isset($req['path_mou'])) {
            foreach ($req['path_mou'] as $file) {
                $namafilemou = $req['judul_mou'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $mou = $namafilemou;
                $file->move(public_path('files'), $namafilemou);
            }
        }

        $user->path_mou = $mou;

        //jika ada path, jalankan code. jika tidak ada, skip code.
        if (isset($req['path_moa'])) {
            foreach ($req['path_moa'] as $file) {
                $namafilemoa = $req['judul_moa'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $moa = $namafilemoa;
                $file->move(public_path('files'), $namafilemoa);
            }
        }

        $user->path_moa = $moa;

        $user->save();

        return redirect('/Kerjasama');
    }

    public function delete($id)
    {
        TambahKerjasama::destroy($id);
        return back();
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
