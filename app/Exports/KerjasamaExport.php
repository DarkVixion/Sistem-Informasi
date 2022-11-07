<?php

namespace App\Exports;

use App\Models\TambahKerjasama;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KerjasamaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TambahKerjasama::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Status',
            'Nama Kerja Sama',
            'Jenis Kerjasama',
            'Alamat',
            'Negara',
            'Nomor Telephone',
            'Website',
            'Bulan Input',
            'Narahubung',
            'Nomot Telephon Narahubung',
            'Email Narahubung',
            'Nomor PIC',
            'Email PIC',
            'PIC',
            'Update',
            'Create'

        ];
    }
}
