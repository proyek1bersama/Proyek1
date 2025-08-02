<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProdukModel;

class Login extends BaseController
{
    // Tampilkan halaman login
    public function index()
    {
        $session = session();

        // Cek apakah user sudah login
        if ($session->get('logged_in')) {
            return redirect()->to('/admin');
        }

        // Kalau belum login, tampilkan form login
        return view('login');
    }

    public function admin()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel->findAll();

        // kirim ke view 'Admin'
        return view('admin', $data);
    }

    // Proses login (auth)
    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();
        $password = $userModel->where('password', $password)->first();

        if (!$user && !$password) {
            // Jika username tidak ditemukan
            return redirect()->back()->with('error', 'Username atau Password Salah!');
        }

        // Jika username & password benar
        $sessionData = [
            'id_user'      => $user['id_user'],
            'username'     => $user['username'],
            'logged_in'    => TRUE
        ];
        $session->set($sessionData);

        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel->findAll();

        return view('admin', $data);
    }

    // Logout: hapus session
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}