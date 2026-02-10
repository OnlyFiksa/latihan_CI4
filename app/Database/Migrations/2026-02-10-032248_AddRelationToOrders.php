<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRelationToOrders extends Migration
{
    public function up()
    {
        $this->forge->addColumn('transaksi', [
    'id_order' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
    ],
]);

$this->forge->addForeignKey(
    'id_order',
    'orders',
    'id_order',
    'CASCADE',
    'CASCADE'
);
$this->forge->processIndexes('transaksi');

    }

    public function down()
    {
        //
    }
}
