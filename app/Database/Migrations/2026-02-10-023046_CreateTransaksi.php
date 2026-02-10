<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_meja'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'total_harga'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'status'       => [
                'type'           => 'ENUM',
                'constraint'     => ['pending', 'completed', 'canceled'],
                'default'        => 'pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->addForeignKey('id_meja', 'meja', 'id_meja', 'CASCADE', 'CASCADE');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
