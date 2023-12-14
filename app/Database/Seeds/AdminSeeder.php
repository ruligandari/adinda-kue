<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Inah Erinah',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role' => '1'
        ];
        $this->db->table('admin')->insert($data);
    }
}
