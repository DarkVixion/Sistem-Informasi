<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use App\Models\AdminViewUser;
use Symfony\Component\Console\Input\Input;

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

    public function show()
    {
        $akun = AdminViewUser::where('id', session('id'))->first();

        if($akun != null)
        {
            return view('Akun')->with('akun', $akun);
        }
        
        return redirect('/Login');
    }

    public function edit(Request $req, $id)
    {
        $req->session()->put('name',$req->nama);
        
        $input = $req->all();
        $akun = AdminViewUser::find($id);
        $akun->update($input);


        if (isset($req['path_profile'])) {
            $picprofile = '';

            $file = $req['path_profile'];
            $namapicprofile = $req['nama'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
            $picprofile .= $namapicprofile;
            $file->move(public_path('profilpicuser'), $namapicprofile);

            $akun->path_profile = $picprofile;
            $akun->save();
        }

        $req->session()->put('foto',$picprofile);

        return back();
    }
}
