<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
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
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}

