<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Keranjang extends BaseController
{
    public function index()
    {
        return view('keranjang'); // nama file view di app/Views/keranjang.php
    }
}