<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminViewUser;
use App\Models\MoA;
use App\Models\MoU;
use App\Models\TambahKerjasama;
use App\Models\NamaMitra;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Session as FacadesSession;

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
        $request->session()->put('foto', $data[0]->path_profile);

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
        $tamin = TambahKerjasama::where('jenismitra','pertamina')->count();
        $ntamin = TambahKerjasama::where('jenismitra','non-pertamina')->count();
        $bumn = TambahKerjasama::where('jenismitra','bumn')->count();
        $mentri = TambahKerjasama::where('jenismitra','kementerian')->count();
        $oth  = TambahKerjasama::whereNotIn('jenismitra',['pertamina','non-pertamina','bumn','kementerian'])->count();

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
                $fid[] = $d->id;
            }
        }
        // dd($temp);

        $mitra = NamaMitra::all()->count();
        $jm = DB::table('tambahkerjasama')->select(DB::raw('jenismitra as jenismitra'), DB::raw('count(*) as number'))->groupBy('jenismitra')->get();
        $mit[] = ['jenismitra', 'Number'];
        foreach($jm as $key => $value)
        {
            $mit[++$key] = [$value->jenismitra, $value->number];
        }

        $dataMitra = TambahKerjasama::all();
        $dataPoints = [];

        foreach($dataMitra as $dataMitras){
            $dataPoints[] = [
                "name" => $dataMitras['jenismitra']
            ];
        }
       
        $mon = Carbon::now()->addMonth(3);
        $m0n = Carbon::now();
        $d4t = MoU::whereBetween('tglselesai',[$mon,$m0n])->get();
        session()->put('mou',$d4t);

        $i = -1;
        $n = 0;
        do{
            $year[] = Carbon::now()->subYear($n)->format('Y'); 
            $i++;
            $n++;
        }while($year[$i] != '2018');

        for($i=0;$i<12;$i++){
            $y1 = Carbon::now()->endOfYear()->subYear(1)->addMonth($i);
            $y2 = Carbon::now()->endOfYear()->subYear(1)->addMonth($i+1);

            $data = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->get();
            $temp1 = 0;
            $temp2 = 0;

            foreach($data as $d){
                $temp1 += $d->mous->count();
                $temp2 += $d->moas->count();
            }

            $data1[] = $temp1;
            $data2[] = $temp2;
            $data3[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','aktif')->count();
            $data4[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','tidak aktif')->count();
            $data5[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','kedaluwarsa')->count();
            $data6[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','perpanjangan')->count();
            $data7[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','dalam penjajakan')->count();
        }
        $data8 = array_sum($data1);
        $data9 = array_sum($data2);
        $data10 = array_sum($data3);
        $data11 = array_sum($data4);
        $data12 = array_sum($data5);
        $data13 = array_sum($data6);
        $data14 = array_sum($data7);

        return view('AdminDashboard')->with('sum', $sum)
            ->with('countmoa', $countmoa)
            ->with('countmou', $countmou)
            ->with('mitra', $mitra)
            ->with('paktif', $data10)
            ->with('ptaktif', $data11)
            ->with('pexp', $data12)
            ->with('ppen', $data13)
            ->with('ppan', $data14)
            ->with('tamin', $tamin)
            ->with('ntamin', $ntamin)
            ->with('bumn', $bumn)
            ->with('mentri', $mentri)
            ->with('other', $oth)
            ->with('nmitra', $temp)
            ->with('years', $year)
            ->with('bmous', $data1)
            ->with('bmoas', $data2)
            ->with('baktif', $data3)
            ->with('btaktif', $data4)
            ->with('bkeda', $data5)
            ->with('bper', $data6)
            ->with('bpen', $data7)
            ->with('pmous', $data8)
            ->with('pmoas', $data9)
            ->with('jm', json_encode($mit))
            ->with('data', json_encode($dataPoints));
    }

    public function getData1($n){
        for($i=0;$i<12;$i++){
            $y1 = Carbon::now()->endOfYear()->subYear($n)->endOfMonth()->addMonth($i);
            $y2 = Carbon::now()->endOfYear()->subYear($n)->endOfMonth()->addMonth($i+1);

            $data = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->get();
            $temp1 = 0;
            $temp2 = 0;

            foreach($data as $d){
                $temp1 += $d->mous->count();
                $temp2 += $d->moas->count();
            }

            $data1[] = $temp1;
            $data2[] = $temp2;
            $data3[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','aktif')->count();
            $data4[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','tidak aktif')->count();
            $data5[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','kedaluwarsa')->count();
            $data6[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','perpanjangan')->count();
            $data7[] = TambahKerjasama::whereBetween('bulaninput',[$y1,$y2])->where('status','dalam penjajakan')->count();

            $data8 = array_sum($data1);
            $data9 = array_sum($data2);
            $data10 = array_sum($data3);
            $data11 = array_sum($data4);
            $data12 = array_sum($data5);
            $data13 = array_sum($data6);
            $data14 = array_sum($data7);
        }
        
        return response()->json([
            'data1'=>$data1, 
            'data2'=>$data2,
            'data3'=>$data3,
            'data4'=>$data4,
            'data5'=>$data5,
            'data6'=>$data6,
            'data7'=>$data7,
            'data8'=>$data8,
            'data9'=>$data9,
            'data10'=>$data10,
            'data11'=>$data11,
            'data12'=>$data12,
            'data13'=>$data13,
            'data14'=>$data14
        ]);
    }
}