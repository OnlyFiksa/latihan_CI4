<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function form()
    {
        return view('form_mahasiswa');
    }

    public function proses()
    {
       $data = [
              'nama' => $this->request->getVar('nama'),
              'nim' => $this->request->getVar('nim'),
              'jurusan' => $this->request->getVar('jurusan')
       ];

       return view('hasil_mahasiswa', $data);
    }
}