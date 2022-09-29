<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUserMenu;

class AdminUserMenuController extends Controller
{

    public function store(Request $req) // store input dari hal AdminUserMenu
    {

        $data = $req->validate([
            'namaakunuser' => 'required',
            'ssoakunuser' => 'required',
            'passwordakunuser' => 'required',
            'emailakunuser' => 'required',
            'nipakunuser' => 'required',
            'notelpakunuser' => 'required',
            'roleakunuser' => 'required',
            'statusakunuser' => 'required',
        ]);

        $adminusermenu = new AdminUserMenu();

        $adminusermenu->namaakunuser = $req['namaakunuser'];
        $adminusermenu->ssoakunuser = $req['ssoakunuser'];
        $adminusermenu->passwordakunuser = $req['passwordakunuser'];
        $adminusermenu->emailakunuser = $req['emailakunuser'];
        $$adminusermenu->nipakunuser = $req['nipakunusers'];
        $adminusermenu->notelpakunuser = $req['notelpakunuser'];
        $adminusermenu->roleakunuser = $req['roleakunuser'];
        $adminusermenu->statusakunuser = $req['statusakunuser'];
        $adminusermenu->path_profileakunuser = $req['path_profileakunuser'];

        $picprofileuser = '';


        $file = $req['path_profileakunuser'];
        $namapicprofileuser = $req['namaakunuser'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
        $picprofileuser .= $namapicprofileuser;
        $file->move(public_path('profilpicuser'), $namapicprofileuser);
        $adminusermenu->path_profileakunuser = $picprofileuser;

        $adminusermenu->save();

        return redirect('AdminDashboard');
    }

    public function testuser()
    {
        $adminusermenu = new AdminUserMenu();
        //$adminusermenu->where('id', '4');

        $bebasuser = $adminusermenu::where('id', '0')->first();

        return view('AdminUserMenu')->with('adminusermenu', $bebasuser);
    }
}
