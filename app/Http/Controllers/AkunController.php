<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function store(Request $req) // store input dari hal Akun
    {

        $data = $req->validate([
            'namaakun' => 'required',
            'userssoakun' => 'required',
            'emailakun' => 'required',
            'nipakun' => 'required',
            'notelpakun' => 'required',
            'roleakun' => 'required',
            'statusakun' => 'required',
        ]);

        $akun = new Akun;

        $akun->status = $req['namaakun'];
        $akun->namamitra = $req['userssoakun'];
        $akun->jenismitra = $req['emailakun'];
        $akun->judulkerjasama = $req['nipakun'];
        $akun->lingkupkerja = $req['notelpakun'];
        $akun->alamat = $req['roleakun'];
        $akun->negara = $req['statusakun'];

        /*$dir = "directory";

        $mou = '';
        $moa = '';


        foreach ($req['path_mou'] as $file) {
            $namafilemou = $req['judul_mou'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
            $mou .= $namafilemou . '_';
            // . untuk menggabungkan semua nama filenya

            $file->move(public_path('files'), $namafilemou);
        }
        $user->path_mou = $mou;

        //jika ada path, jalankan code. jika tidak ada, skip code.
        if (isset($req['path_moa'])) {
            foreach ($req['path_moa'] as $file) {
                $namafilemoa = $req['judul_moa'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
                $moa .= $namafilemoa . '_';

                $file->move(public_path('files'), $namafilemoa);
            }
        }

        $user->path_moa = $moa;*/

        $akun->save();

        return redirect('/Kerjasama');
    }
}
