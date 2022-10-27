<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUserMenu;
use App\Models\AdminViewUser;
use Illuminate\Support\Facades\Hash;

class AdminUserMenuController extends Controller
{

    public function index()
    {
        $adminshow = AdminUserMenu::all();
        return view('AdminShowUser')->with('adminshow', $adminshow);
    }

    public function store(Request $req) // store input dari hal AdminUserMenu
    {
        $adminusermenu = new AdminUserMenu();

        $adminusermenu->nama = $req['nama'];
        $adminusermenu->username = $req['username'];
        $adminusermenu->email = $req['email'];
        $adminusermenu->nip = $req['nip'];
        $adminusermenu->notelp = $req['notelp'];
        $adminusermenu->role = $req['role'];
        $adminusermenu->status = $req['status'];
        $adminusermenu->path_profile = $req['path_profile'];

        $pw = md5($req['password']);
        $adminusermenu->password = $pw;

        $picprofileuser = '';

        if (isset($req['path_profile'])) {
            $file = $req['path_profile'];
            $namapicprofileuser = $req['nama'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
            $picprofileuser .= $namapicprofileuser;
            $file->move(public_path('profilpicuser'), $namapicprofileuser);
            $adminusermenu->path_profile = $picprofileuser;
        }

        $adminusermenu->save();

        return redirect('AdminShowUser');
    }

    //menampilkan view
    public function show($id)
    {
        $adminviewuser = AdminViewUser::find($id);
        return view('AdminViewUser')->with('adminviewuser', $adminviewuser);
    }

    //edit isi view
    public function edit(Request $req, $id)
    {
        $input = $req->all();
        $adminviewuser = AdminViewUser::find($id);
        $adminviewuser->update($input);

        if (isset($req['path_profile'])) {
            $picprofileuser = '';

            $file = $req['path_profile'];
            $namapicprofileuser = $req['nama'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
            $picprofileuser = $namapicprofileuser;
            $file->move(public_path('profilpicuser'), $namapicprofileuser);

            $adminviewuser->path_profile = $picprofileuser;
            $adminviewuser->save();
        }

        return redirect('/AdminShowUser');
    }

    public function testuser()
    {
        $adminusermenu = new AdminUserMenu();
        //$adminusermenu->where('id', '4');

        $bebasuser = $adminusermenu::where('id', '1')->first();

        return view('AdminUserMenu')->with('adminusermenu', $bebasuser);
    }

    public function delete($id)
    {
        AdminUserMenu::destroy($id);
        return back();
    }
}
