<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'constraint' => 1000
            ],
            'spp-pirt' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'bpjph' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
