<?php

namespace App\Imports;

use App\Models\TambahKerjasama;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return TambahKerjasama|null
     */
    public function model(array $row)
    {
        return new TambahKerjasama([
            'bulaninput'     => $row[bulaninput],
            'namamitra'     => $row[namamitra],
            'jenismitra'     => $row[jenismitra],
            'judul_mou'     => $row[judul_mou],
            'lingkupkerja'     => $row[lingkupkerja],
            'nilaikontrak'     => $row[nilaikontrak],
            'tglmulai_mou'     => $row[tglmulai_mou],
            'tglselesai_mou'     => $row[tglselesai_mou],
            'tglmulai_moa'     => $row[tglmulai_moa],
            'tglselesai_moa'     => $row[tglselesai_moa],
            'password' => Hash::make($row[2]),
        ]);
    }
}
