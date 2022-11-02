<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminViewUser;
use App\Models\MoA;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('id'))
        {
            if(session('role') == 'Admin')
            {
                return redirect('/AdminDashboard');
            }
            else
            {
                return redirect('/UserRekap');
            }
        }

        return view('Login');
    }

    public function login(Request $request)
    {
        
        $password = md5($request->pw);
        $data = AdminViewUser::where([['username', $request->un], ['password', $password]])->get();

        if(count($data) == 0)
        {
            return redirect('/Login');
        }

        $request->session()->put('id', $data[0]->id);
        $request->session()->put('name', $data[0]->nama);
        $request->session()->put('role', $data[0]->role);

        if($data[0]->role == 'Admin')
        {
            return redirect('/AdminDashboard');
        }
        else
        {
            return redirect('/UserRekap');
        }
    }

    public function Logout()
    {
        if(session()->has('id'))
        {
            FacadesSession::flush();
        }

        return redirect('/Login');
    }

    public function test()
    {
        return MoA::all();
    }
}
