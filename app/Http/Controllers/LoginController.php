<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminViewUser;
use App\Models\MoA;
use App\Models\MoU;
use App\Models\TambahKerjasama;
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

    public function admin()
    {
        $aktif = TambahKerjasama::where('status','aktif')->count();
        $taktif = TambahKerjasama::where('status','tidak aktif')->count();
        $exp = TambahKerjasama::where('status','kedaluwarsa')->count();
        $panjang = TambahKerjasama::where('status','perpanjangan')->count();
        $pen = TambahKerjasama::where('status','dalam penjajakan')->count(); 
        
        $sum = MoA::all()->sum('nilaikontrak');
        $countmoa = MoA::all()->count('id');
        $countmou = MoU::all()->count('id');
        $data = TambahKerjasama::all();
        $temp = [];
        
        foreach($data as $d)
        {
            $bool = false;
            if($temp)
            {
                foreach($temp as $t)
                {
                    if($t == $d->namamitra)
                    {
                        $bool = true;
                        break;
                    }
                }
            }

            if($bool == false)
            {
                $temp[] = $d->namamitra;
            }
        }

        return view('AdminDashboard')->with('sum', $sum)
            ->with('countmoa', $countmoa)
            ->with('countmou', $countmou)
            ->with('total', count($temp))
            ->with('aktif', $aktif)
            ->with('taktif', $taktif)
            ->with('exp', $exp)
            ->with('pen', $pen)
            ->with('pan', $panjang);
        }
    }
