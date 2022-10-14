<?php

namespace App\Imports;

use App\Models\TambahKerjasama;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImports implements ToModel
{
    /**
     * @param array $row
     *
     * @return TambahKerjasama|null
     */
    public function model(array $row)
    {
        dd($row);
        $kerjasama = new TambahKerjasama([
            'namamitra' => $row[1],
            // 'jenismitra' => $row[jenismitra],
            // 'judulkerjasama' => $row[judulkerjasama],
            // 'lingkupkerja' => $row[lingkupkerja],
            // 'alamat' => $row[alamat],
            // 'negara' => $row[negara],
            // 'notelpmitra' => $row[notelpmitra],
            // 'website' => $row[website],
            // 'bulaninput' => $row[bulaninput],
            // 'namamitra' => $row[namamitra],
            // 'judul_mou' => $row[judul_mou],
            // 'nilaikontrak' => $row[nilaikontrak],
            // 'tglmulai_mou' => $row[tglmulai_mou],
            // 'tglselesai_mou' => $row[tglselesai_mou],
            // 'tglmulai_moa' => $row[tglmulai_moa],
            // 'tglselesai_moa' => $row[tglselesai_moa],
            //'password' => Hash::make('password')
        ]);

        return $kerjasama;
    }
}
