<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
{
    $session = session();
    $data = [
        'nama_lengkap' => $session->get('nama_lengkap'),
        'username' => $session->get('username'),
    ];

    return view('home', $data);
}


    public function home()
    {
        return view('home');
    }

     public function keranjang()
    {
        return view('keranjang');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function xl()
    {
        return view('xl');
    }

    public function axis()
    {
        return view('axis');
    }

    public function indosat()
    {
        return view('indosat');
    }

    public function smartfren()
    {
        return view('smartfren');
    }

    public function tri()
    {
        return view('tri');
    }

    public function telkomsel()
    {
        return view('telkomsel');
    }
}
