<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index(): string
    {
        return view('siswa');
    }
}
function siswa_detail()
{
    echo "saya fungsi siswa detail";
    #return view('siswa_detail');
}