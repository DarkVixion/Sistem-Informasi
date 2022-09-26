<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

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

        $akun = new Akun();

        $akun->namaakun = $req['namaakun'];
        $akun->userssoakun = $req['userssoakun'];
        $akun->emailakun = $req['emailakun'];
        $akun->nipakun = $req['nipakun'];
        $akun->notelpakun = $req['notelpakun'];
        $akun->roleakun = $req['roleakun'];
        $akun->statusakun = $req['statusakun'];

        $akun->save();

        return redirect('/Kerjasama');
    }
}
