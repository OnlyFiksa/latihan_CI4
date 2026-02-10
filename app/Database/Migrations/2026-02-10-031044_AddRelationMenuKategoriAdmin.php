<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRelationMenuKategoriAdmin extends Migration
{
    public function up()
    {
        // tambah kolom id_kategori di menu
        $this->forge->addColumn('menu', [
            'id_kategori' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
                'after'      => 'id_menu'
            ],
        ]);

        $this->forge->addForeignKey(
            'id_kategori',
            'kategori',
            'id_kategori',
            'CASCADE',
            'CASCADE'
        );
        $this->forge->processIndexes('menu');

        // tambah kolom id_admin di transaksi
        $this->forge->addColumn('transaksi', [
            'id_admin' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
                'after'      => 'id_transaksi'
            ],
        ]);

        $this->forge->addForeignKey(
            'id_admin',
            'admin',
            'id_admin',
            'CASCADE',
            'CASCADE'
        );
        $this->forge->processIndexes('transaksi');
    }

    public function down()
    {
        $this->forge->dropForeignKey('menu', 'menu_id_kategori_foreign');
        $this->forge->dropForeignKey('transaksi', 'transaksi_id_admin_foreign');

        $this->forge->dropColumn('menu', 'id_kategori');
        $this->forge->dropColumn('transaksi', 'id_admin');
    }
}
