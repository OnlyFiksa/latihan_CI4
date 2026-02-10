<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_menu'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_menu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi'       => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'harga'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
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
        $this->forge->addKey('id_menu', true);
        $this->forge->createTable('menu');
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
