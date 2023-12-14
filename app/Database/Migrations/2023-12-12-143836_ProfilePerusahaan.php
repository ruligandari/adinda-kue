<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProfilePerusahaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'pemilik' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('profile_perusahaan');
    }

    public function down()
    {
        $this->forge->dropTable('profile_perusahaan');
    }
}
