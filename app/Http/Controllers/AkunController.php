<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

class AkunController extends Controller
{
    public function index_admin()
    {
        return view('');
    }

    public function index_user()
    {
        return view('');
    }

    public function create_admin()
    {
        return view('');
    }

    public function create_user()
    {
        return view('');
    }

    /* public function store(Request $req) // store input dari hal Akun
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
        $akun->path_profileakun = $req['path_profileakun'];

        $picprofile = '';


        $file = $req['path_profileakun'];
        $namapicprofile = $req['namaakun'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
        $picprofile .= $namapicprofile;
        $file->move(public_path('profilpic'), $namapicprofile);
        $akun->path_profileakun = $picprofile;

        $akun->save();

        return redirect('AdminDashboard');
    } 

    public function test() //untuk testing
    {
        $akun = Akun::all();
        return view('AkunTampil')->with('akun', $akun);
    } 
    
    .
    */

    public function isiakun()
    {
        $akun = Akun::find(1);

        $bebas = $akun::where('id', '1')->first();

        return view('Akun')->with('akun', $bebas);
    }

    public function edit(Request $req, $id)
    {
        $input = $req->except(['_token']);
        $akun = Akun::find($id);
        $akun->update($input);

        $akun->namaakun = $req['namaakun'];
        $akun->userssoakun = $req['userssoakun'];
        $akun->emailakun = $req['emailakun'];
        $akun->nipakun = $req['nipakun'];
        $akun->notelpakun = $req['notelpakun'];
        $akun->roleakun = $req['roleakun'];
        $akun->statusakun = $req['statusakun'];

        //$picprofile = '';

        /*$file = $req['path_profileakun'];
        $namapicprofile = $req['namaakun'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
        $picprofile .= $namapicprofile;
        $file->move(public_path('profilpic'), $namapicprofile);*/

        if (isset($req['path_profileakun'])) {
            $picprofile = '';

            $file = $req['path_profileakun'];
            $namapicprofile = $req['namaakun'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
            $picprofile .= $namapicprofile;
            $file->move(public_path('profilpic'), $namapicprofile);

            $akun->path_profileakun = $picprofile;
            $akun->save();
        }


        /*$akun->path_profileakun = $picprofile;
        $akun->save();*/

        return back();
    }
}
