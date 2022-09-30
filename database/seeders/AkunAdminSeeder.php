<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akun;

class AkunAdminSeeder extends Seeder
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
                'namaakun'=>'Admin1',
                'userssoakun'=>'admin01',
                'emailakun'=>'admin1@gmail.com',
                'nipakun'=>'12345',
                'notelpakun'=>'08531111',
                'roleakun'=>'Staff',
                'statusakun'=>'Aktif',
                'path_profileakun'=>'Admin1_1664500196_923.jpg',
            ]
        ];

        Akun::insert($data);
    }
}
