<?php

namespace App\Controllers;

class berita extends BaseController
{
    public function detail(): string
    {
        return view('berita_detail_view');
    }
}

