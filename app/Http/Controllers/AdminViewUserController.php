<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminViewUser;

class AdminViewUserController extends Controller
{

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

        if (isset($req['path_profileakunuser'])) {
            $picprofileuser = '';

            $file = $req['path_profileakunuser'];
            $namapicprofileuser = $req['namaakunuser'] . '_' .  time()  . '_' . rand(1, 1000) . '.' . $file->extension();
            $picprofileuser .= $namapicprofileuser;
            $file->move(public_path('profilpicuser'), $namapicprofileuser);

            $adminviewuser->path_profileakunuser = $picprofileuser;
            $adminviewuser->save();
        }

        return back();
    }

    /*public function index()
    {
        $adminedituser = AdminViewUser::all();
        return view('AdminEditUser')->with('adminedituser', $adminedituser);
    }*/
}
