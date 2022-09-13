<?php

namespace App\Http\Controllers;

use App\Models\TambahKerjasama;

use Illuminate\Http\Request;

class TambahKerjasamaController extends Controller
{
    public function index()
    {
        /*$kerjasama = TambahKerjasama::all();*/
        return view('Kerjasama')/*->with('kerjasama',$kerjasama)*/;
    }

<<<<<<< HEAD
    public function tambah() //sama aja dengan fungsi create //store?
=======
    public function create()
    {
        return view('TambahKerja');
    }

    public function edit()
>>>>>>> be112003644d8ed34f40e13957d12766647b630b
    {
        return view('TambahKerja');
    }

    public function store(Request $req)
    {
        $data = $req->validate([
            'judul_moa' => 'required',
        ]);
        $new_product = Product::create($data);

        if ($req->has('judul_moa')) {
            foreach ($req->file('judul_moa') as $pathmoa) {
                $fileName = $data['judul_moa'] . '-file-' . time() . rand(1, 1000) . '.' . $image->extension();
                /** image name stored using combination of product title, current timestamp, and random number. each image named uniquely*/
                /** $image->extension() is append*/

                $image->move(public_path('files'), $imageName);
                /** move image inside public folder, will be stored in public/files */

                Image::create([
                    'product_id' => $new_product->id,
                    'image' => $imageName
                ]);
                /** record in the image table */
            }
        }
        return back()->with('success', 'Added');
        /** show success message after storing product and image*/
    }

    /**public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.pdf' => 'required'
        ]); hanya file pdf saja*/
}
