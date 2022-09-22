<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LingkupKerja;

class LingkupKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'judullingkupkerja'=>'Beasiswa'
            ],
            [
                'judullingkupkerja'=>'Fast Track'
            ],
            [
                'judullingkupkerja'=>'MBKM'
            ],
            [
                'judullingkupkerja'=>'Magang'
            ],
        ];

        LingkupKerja::insert($data);
    }
}
