<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Imports\ExcelImports;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\KerjasamaExport;

use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
use App\Models\MoU;
use App\Models\MoA;
use App\Models\JenisMitra;
use App\Models\LingkupKerja;
use App\Models\AdminViewUser;
use App\Models\NamaMitra;


class TambahKerjasamaController extends Controller
{
    public function index() // untuk view hal Kerjasama
    {
        $kerjasama = TambahKerjasama::all();

        return view('Kerjasama')->with('kerjasama', $kerjasama);
    }

    public function create() // untuk view hal Tambah Kerjasama
    {
        $tambahkerjasama = TambahKerjasama::all();
        $nm = NamaMitra::all();
        $jenismitra = JenisMitra::all();
        $lingkup = LingkupKerja::all();
        $user = AdminViewUser::all(); //define d sini kalo mau ambil data dari tabel lain

        return view('TambahKerja')->with('tks', $tambahkerjasama)
            ->with('jm', $jenismitra)
            ->with('lk', $lingkup)
            ->with('users', $user)
            ->with('nm', $nm);
    }

    public function store(Request $req) // store input dari hal Tambah Kerjasama
    {
        $u = AdminViewUser::where('id', $req['pic'])->first('nama');
        $user = new TambahKerjasama;

        $user->status = $req['status'];
        $user->namamitra = $req['namamitra'];
        $user->jenismitra = $req['jenismitra'];
        $user->bulaninput = $req['bulaninput'];
        $user->narahubung = $req['narahubung'];
        $user->notelpnara = $req['notelpnara'];
        $user->emailnara = $req['emailnara'];
        $user->notelppic = $req['notelppic'];
        $user->emailpic = $req['emailpic'];
        $user->assignuserakun = $u->nama;

        $user->save();

        if (isset($req['path_mou'])) {
            $i = 0;
            foreach ($req['path_mou'] as $file) {
                $mou = new MoU;
                $mou->judul = $req['judul_mou'][$i];
                $mou->tglmulai = $req['tglmulai_mou'][$i];
                $mou->tglselesai = $req['tglselesai_mou'][$i];

                $namafilemou = $req['judul_mou'][$i] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $path_mou = $namafilemou;

                $file->move(public_path('files'), $namafilemou);

                $mou->path = $path_mou;

                $user->mous()->save($mou);
                $i += 1;
            }
        }

        //jika ada path, jalankan code. jika tidak ada, skip code.
        if (isset($req['path_moa'])) {
            $i = 0;
            foreach ($req['path_moa'] as $file) {
                $moa = new MoA;
                $moa->judul = $req['judul_moa'][$i];
                $moa->tglmulai = $req['tglmulai_moa'][$i];
                $moa->tglselesai = $req['tglselesai_moa'][$i];
                $moa->nilaikontrak = $req['nilaikontrak'][$i];
                $moa->lingkupkerja = $req['lingkupkerja'][$i];

                $namafilemoa = $req['judul_moa'][$i] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $path_moa = $namafilemoa;

                $file->move(public_path('files'), $namafilemoa);

                $moa->path = $path_moa;

                $user->moas()->save($moa);
                $i += 1;
            }
        }

        return redirect('/Kerjasama');
    }

    public function edit($id)
    {
        $tambahkerjasama = TambahKerjasama::find($id);

        $mitra = NamaMitra::all();

        $mou = MoU::where('tambah_kerjasama_id', $id)->get();
        $moa = MoA::where('tambah_kerjasama_id', $id)->get();
        $jenismitra = JenisMitra::all();
        $lingkup = LingkupKerja::all();
        $user = AdminViewUser::all();

        return view('EditKerja')->with('tks', $tambahkerjasama)
            ->with('jm', $jenismitra)
            ->with('lk', $lingkup)
            ->with('users', $user)
            ->with('mou', $mou)
            ->with('nm', $mitra)
            ->with('moa', $moa);
    }

    public function update(Request $req, $id)
    {
        $user = TambahKerjasama::find($id);
        $u = AdminViewUser::where('id', $req['pic'])->first();

        $user->status = $req['status'];
        $user->namamitra = $req['namamitra'];
        $user->jenismitra = $req['jenismitra'];
        $user->bulaninput = $req['bulaninput'];
        $user->narahubung = $req['narahubung'];
        $user->notelpnara = $req['notelpnara'];
        $user->emailnara = $req['emailnara'];
        $user->notelppic = $req['notelppic'];
        $user->emailpic = $req['emailpic'];

        if($req['pic'] == $u->nama)
        {
            $user->assignuserakun = $req['pic'];
        }
        else
        {
            $user->assignuserakun = $u->nama;
        }

        $user->save();

        $mou = MoU::where('tambah_kerjasama_id', $id)->first();
        if ($mou == null) {
            $mou = new MoU;
        }

        $mou->judul = $req['judul_mou'][0];
        $mou->tglmulai = $req['tglmulai_mou'][0];
        $mou->tglselesai = $req['tglselesai_mou'][0];
        $mou->path = $mou->path;

        $user->mous()->save($mou);

        if ($req['check1'] == 1) {
            $mou->tglselesai = null;
        }

        if (isset($req['path_mou'])) {
            foreach ($req['path_mou'] as $file) {
                $namafilemou = $req['judul_mou'][0] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $path_mou = $namafilemou;
                $file->move(public_path('files'), $namafilemou);
            }

            $mou->path = $path_mou;
            $user->mous()->save($mou);
        }

        $moa = MoA::where('tambah_kerjasama_id', $id)->first();
        if ($moa == null) {
            $moa = new MoA;
        }

        $moa->judul = $req['judul_moa'][0];
        $moa->tglmulai = $req['tglmulai_moa'][0];
        $moa->tglselesai = $req['tglselesai_moa'][0];
        $moa->nilaikontrak = $req['nilaikontrak'][0];
        $moa->lingkupkerja = $req['lingkupkerja'][0];
        $moa->path = $moa->path;

        if ($req['check2'] == 1) {
            $moa->tglselesai = null;
        }

        //jika ada path, jalankan code. jika tidak ada, skip code.
        if (isset($req['path_moa'])) {
            foreach ($req['path_moa'] as $file) {
                $namafilemoa = $req['judul_moa'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $path_moa = $namafilemoa;
                $file->move(public_path('files'), $namafilemoa);
            }

            $moa->path = $path_moa;
        }

        if (isset($req->judul_moa)) {
            $user->moas()->save($moa);
        }

        return redirect('/Kerjasama');
    }

    // preview file
    // di sini akan ada peringatan error, tapi program tetap berfungsi
    // jadi biarkan saja
    // - Vanya, 2022
    public function preview($path)
    {
        $path = './files/' . $path;
        return Response::make(file_get_contents($path), 200, [
            'content-type' => 'application/pdf',
        ]);
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
        return view('Kerjasama');
    }

    public function uploadExcel(Request $request)
    {
        /*$request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        $path = $request->file('file');

        Excel::import(new ExcelImports, $path);*/

        //Excel::import(new ExcelImports, $request->file('test1.csv'));

        $array = Excel::toArray(new ExcelImports, $request->file('path_excel'), 's3', \Maatwebsite\Excel\Excel::XLSX);

        $i = 0;
        foreach ($array[0] as $value) {
            if ($i > 0) {
                $kerjasama = new TambahKerjasama;
                $kerjasama->status = $value[0];
                $kerjasama->namamitra = $value[1];
                $kerjasama->jenismitra = $value[2];
                //$kerjasama->lingkupkerja = $value[2];
                $kerjasama->alamat = $value[3];
                $kerjasama->negara = $value[4];
                $kerjasama->notelpmitra = $value[5];
                $kerjasama->website = $value[6];
                $kerjasama->bulaninput = $value[7];
                $kerjasama->narahubung = $value[8];
                $kerjasama->notelpnara = $value[9];
                $kerjasama->emailnara = $value[10];
                //$kerjasama->assignuserakun = $value[11];
                //$kerjasama->notelppic = $value[12];
                //$kerjasama->emailpic = $value[13];
                //$kerjasama->status = $value[14];

                $kerjasama->save();
            }

            $i++;
        }

        return back();
    }

    /*
    function sumnilaikontrak()
    {
        return DB::table('moas')->sum('id');
    }
    */

    public function export_excel()
    {
        return Excel::download(new KerjasamaExport, 'kerjasama.xlsx');
    }

}
