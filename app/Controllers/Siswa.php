<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Daftar Mahasiswa',
            'para_siswa' => [
                [
                    'nim'     => '192001',
                    'nama'    => 'Taufik Darmawan',
                    'jurusan' => 'Teknik Informatika'
                ],
                [
                    'nim'     => '192002',
                    'nama'    => 'Anissa Ayuningtyas',
                    'jurusan' => 'Sistem Informasi'
                ],
                [
                    'nim'     => '192003',
                    'nama'    => 'Aufar',
                    'jurusan' => 'Desain Komunikasi Visual'
                ],
                [
                    'nim'     => '192004',
                    'nama'    => 'Putra',
                    'jurusan' => 'Manajemen'
                ],
                [
                    'nim'     => '192005',
                    'nama'    => 'Dodi',
                    'jurusan' => 'Akuntansi'
                ]
            ]
        ];

        return view('siswa_view', $data);
    }
}