<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKeteranganToMenu extends Migration
{
    public function up()
    {
        $this->forge->addColumn('menu', [
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'after'      => 'harga',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('menu', 'keterangan');
    }
}
