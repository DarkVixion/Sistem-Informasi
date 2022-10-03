<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminViewUser;

class AdminViewUserController extends Controller
{

    public function index()
    {
        $adminviewuser = AdminViewUser::all();
        return view('AdminViewUser')->with('adminviewuser', $adminviewuser);
    }

    //menampilkan view
    public function show($id)
    {
        $adminviewuser = AdminViewUser::find($id);
        return view('AdminViewUser')->with('adminviewuser', $adminviewuser);
    }
}
