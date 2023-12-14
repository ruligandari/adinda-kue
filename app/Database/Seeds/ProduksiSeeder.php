<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProduksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nomor_produksi' => 'AK00112122023',
            'nama_produk' => 'Kecap',
            'berat' => '1000',
            'tanggal_produksi' => '2021-01-01',
            'tanggal_kadaluarsa' => '2021-01-31',
            'qrcode' => 'contohaja'
        ];

        // Using Query Builder
        $this->db->table('produksi')->insert($data);
    }
}
