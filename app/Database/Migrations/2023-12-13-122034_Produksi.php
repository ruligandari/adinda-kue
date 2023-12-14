<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nomor_produksi' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'berat' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'tanggal_produksi' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'tanggal_kadaluarsa' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produksi');
    }

    public function down()
    {
        $this->forge->dropTable('produksi');
    }
}
