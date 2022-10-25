<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminViewUser;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('role'))
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
        $data = AdminViewUser::where([['ssoakunuser', $request->un], ['passwordakunuser', $password]])->get();
        $request->session()->put('id', $data[0]->id);
        $request->session()->put('name', $data[0]->namaakunuser);
        $request->session()->put('role', $data[0]->roleakunuser);

        if($data[0]->roleakunuser == 'Admin')
        {
            return redirect('/AdminDashboard');
        }
        else
        {
            return redirect('/UserRekap');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
