<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminViewUser;

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
                'nama'=>'Admin1',
                'username'=>'admin01',
                'password'=>md5('12345'),
                'email'=>'admin1@gmail.com',
                'nip'=>'12345',
                'notelp'=>'08531111',
                'role'=>'Staff',
                'status'=>'Aktif',
                'path_profile'=>'Admin1_1664500196_923.jpg',
                'updated_at'=>null,
                'created_at'=>null
            ]
        ];

        AdminViewUser::insert($data);
    }
}
