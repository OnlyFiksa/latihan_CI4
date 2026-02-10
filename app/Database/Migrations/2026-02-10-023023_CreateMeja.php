<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMeja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_meja'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomor_meja'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'status'       => [
                'type'           => 'ENUM',
                'constraint'     => ['available', 'occupied', 'reserved'],
                'default'        => 'available',
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
        $this->forge->addKey('id_meja', true);
        $this->forge->createTable('meja');
    }

    public function down()
    {
        $this->forge->dropTable('meja');
    }
}
