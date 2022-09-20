<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TambahKerjasama;
use App\Models\PerjanjianKerjasama;
use Illuminate\Support\Facades\Redirect;
use App\Models\Pic;
use App\Models\MoU;
use App\Models\MoA;


/* KALO ERROR MAKLUMIN MASIH ON PROGRESS */

class TambahKerjasamaController extends Controller
{
    public function index()
    {
        $kerjasama = TambahKerjasama::all();
        return view('Kerjasama')->with('kerjasama', $kerjasama);
    }

    public function create()
    {
        $tambahkerjasama = TambahKerjasama::all();
        return view('TambahKerja')->with('tambahkerjasama', $tambahkerjasama);
    }

    public function edit()
    {
        return view('TambahKerja');
    }

    public function store(Request $req)
    {

        // $data = $request->all();
        // $finalArray = array();
        // foreach($data as $key=>$value){
        // array_push($finalArray, array(
        // 'fltno'=>$value['sflt'],
        // 'model'=>$value['smodel'],
        // 'engine'=>$value['sengine'],
        // 'loc'=>$value['sloc'],
        // 'serviceType'=>$value['sstye'],
        // 'nextSvr'=> $value['snsvr'] )
        // );
        // });

        //Model::insert($finalArray);

        $input = $req->all();
        // TambahKerjasama::create($input);

        $finalArray = array();

        $data = $req->validate([
            'namaperjanjian' => 'required',
            'path' => 'required',
            'jenis' => 'required'
        ]);

        $new_file = TambahKerjasama::create($data);

        if ($req->has('path')) {
            foreach ($req->get('path') as $path) {
                $pathname = $data['path'] . time() . $path->extension;

                $path->move(public_path('files', $pathname));

                PerjanjianKerjasama::create([
                    'file_id' => $new_file->id,
                    'path' => $pathname
                ]);
            }

            foreach ($input as $key => $value) {
                array_push(
                    $finalArray,
                    array(
                        'namamitra' => $value['namamitra'],
                        'judulkerja' => $value['judulkerja'],
                        'alamat' => $value['alamat'],
                        'negara' => $value['negara'],
                        'notelpmitra' => $value['notelpmitra'],
                        'web' => $value['web'],
                        'judul_mou' => $value['judul_mou'],
                        'tglmulai' => $value['tglmulai'],
                        'tglselesai' => $value['tglselesai'],
                        'path_mou' => $value['path_mou'],
                        'judul_moa' => $value['judul_moa'],
                        'nilaikontrak' => $value['nilaikontrak'],
                        'tglmulai' => $value['tglmulai'],
                        'tglselesai' => $value['tglselesai'],
                        'path_moa' => $value['path_moa'],
                        'narahubung' => $value['narahubung'],
                        'notelpnara' => $value['notelpnara'],
                        'emailnara' => $value['emailnara']
                    )
                );
            };
            Model::insert($finalArray);
        }
        return redirect('Kerjasama');
    }

    public function perjanjiankerjasama()
    {
        return $this->hasMany(PerjanjianKerjasama::class);
    }

    public function path_mou()
    {
        return $this->hasMany(MoU::class);
    }

    public function path_moa()
    {
        return $this->hasMany(MoA::class);
    }
}
