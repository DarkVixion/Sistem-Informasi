<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisMitra;

class JenisMitraSeeder extends Seeder
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
                'juduljenismitra'=>'Pertamina'
            ],
            [
                'juduljenismitra'=>'Non-Pertamina'
            ],
            [
                'juduljenismitra'=>'BUMN'
            ],
            [
                'juduljenismitra'=>'Kementerian'
            ],
        ];

        JenisMitra::insert($data);
    }
}
