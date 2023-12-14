<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfilePerusahaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_perusahaan' => "A' Dinda Kue",
            'pemilik' => 'Inah Erinah',
            'alamat' => 'Jl. Desa Gereba',
            'no_telp' => '081234567890',
            'gambar' => 'default.png'
        ];

        // Using Query Builder
        $this->db->table('profile_perusahaan')->insert($data);
    }
}
