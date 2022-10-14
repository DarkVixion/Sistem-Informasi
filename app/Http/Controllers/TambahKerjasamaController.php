<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImports;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
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
        $mou = MoU::all();
        $moa = MoA::all();
        return view('Kerjasama')->with('kerjasama', $kerjasama)
                                ->with('mou', $mou)
                                ->with('moa', $moa);
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

        $user->save();
        $id = $user->id;
        
        $mou = new MoU;
        // $mou->judul = '';
        // $mou->tglmulai = null;
        // $mou->tglselesai = null;

        $moa = new MoA;
        // $moa->judul = '';
        // $moa->tglmulai = null;
        // $moa->tglselesai = null;
        // $moa->nilaikontrak = null;

        // $path_mou = '';
        // $path_moa = '';

        if (isset($req['path_mou'])) {
            foreach ($req['path_mou'] as $file) {
                $namafilemou = $req['judul_mou'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $path_mou = $namafilemou;

                $file->move(public_path('files'), $namafilemou);
            }

            $mou->judul = $req['judul_mou'];
            $mou->tglmulai = $req['tglmulai_mou'];
            $mou->tglselesai = $req['tglselesai_mou'];
            $mou->path = $path_mou;

            $user->mous()->save($mou);
        }

        

        //jika ada path, jalankan code. jika tidak ada, skip code.
        if (isset($req['path_moa'])) {
            foreach ($req['path_moa'] as $file) {
                $namafilemoa = $req['judul_moa'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $path_moa = $namafilemoa;

                $file->move(public_path('files'), $namafilemoa);
            }

            $moa->judul = $req['judul_moa'];
            $moa->tglmulai = $req['tglmulai_moa'];
            $moa->tglselesai = $req['tglselesai_moa'];
            $moa->nilaikontrak = $req['nilaikontrak'];
            $moa->path = $path_moa;
            
            $user->moas()->save($moa);
        }

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

    //untuk import file excel
    public function importExcel()
    {
        return view();
    }

    public function uploadExcel(Request $request)
    {
        Excell::import(new ExcelImports, $request->file);

        return view();
    }
}
