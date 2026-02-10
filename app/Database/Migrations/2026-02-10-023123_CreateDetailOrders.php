<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailOrders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_order'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_order'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_menu'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'jumlah'          => [
                'type'           => 'INT',
                'constraint'     => 5,
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
        $this->forge->addKey('id_detail_order', true);
        $this->forge->addForeignKey('id_order', 'orders', 'id_order', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_menu', 'menu', 'id_menu', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_orders');
    }

    public function down()
    {
        $this->forge->dropTable('detail_orders');
    }
}
