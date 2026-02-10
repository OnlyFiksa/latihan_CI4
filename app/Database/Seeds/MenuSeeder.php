<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $menus = [
            ['Nasi Goreng', 15000, 1],
            ['Mie Ayam', 12000, 1],
            ['Ayam Bakar', 20000, 1],
            ['Ayam Geprek', 18000, 1],
            ['Sate Ayam', 22000, 1],
            ['Bakso', 13000, 1],
            ['Soto Ayam', 14000, 1],
            ['Nasi Uduk', 10000, 1],
            ['Es Teh Manis', 5000, 2],
            ['Es Jeruk', 7000, 2],
            ['Jus Alpukat', 12000, 2],
            ['Jus Mangga', 12000, 2],
            ['Kopi Hitam', 8000, 2],
            ['Cappuccino', 15000, 2],
        ];

        $data = [];

        foreach ($menus as $menu) {
            $data[] = [
                'nama_menu'   => $menu[0],
                'harga'       => $menu[1],
                'id_kategori' => $menu[2],
                'deskripsi'   => $faker->sentence(),
            ];
        }

        $this->db->table('menu')->insertBatch($data);
    }
}
