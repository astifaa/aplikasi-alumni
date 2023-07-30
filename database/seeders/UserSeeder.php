<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Status;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'username' => 'admin',
            'password' => '$2y$10$CibpeGJ.ZFHm0OvmCx7pBOuBK/tNCRAHKNfyMxyWp4V./g8.g2HpS',
            'role' => 'guest',
            'email' => 'admin@gmail.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        Jurusan::create([
            'id_jurusan' => '1',
            'nama_jurusan' => 'RPL',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        Jurusan::create([
            'id_jurusan' => '2',
            'nama_jurusan' => 'TKJ',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        Jurusan::create([
            'id_jurusan' => '3',
            'nama_jurusan' => 'TEI',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        Jurusan::create([
            'id_jurusan' => '4',
            'nama_jurusan' => 'TPTU',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        
        Status::create([
            'id_status' => '1',
            'nama_status' => 'Berwirausaha',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        Status::create([
            'id_status' => '2',
            'nama_status' => 'Melanjutkan Kuliah',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        Status::create([
            'id_status' => '3',
            'nama_status' => 'Sedang Bekerja',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}