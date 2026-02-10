<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DeletedKolomOrders extends Migration
{
    public function up()
    {
    $this->forge->dropForeignKey('orders', 'orders_id_menu_foreign');

    $this->forge->dropColumn('orders', ['id_menu', 'jumlah']);
    }

    public function down()
    {
        $this->forge->addColumn('orders', [
        'id_menu' => [
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
        ],
        'jumlah' => [
            'type' => 'INT',
            'constraint' => 5,
        ],
    ]);
    }
}
