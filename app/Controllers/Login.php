<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('login'); // Pastikan nama file view login sesuai
    }

    public function auth()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user di DB
        $user = $this->userModel->where('username', $username)->first();

        if ($user) {
            // Cek password
            if (password_verify($password, $user['password'])) {
                // Simpan session
                session()->set([
                    'id_user' => $user['id'],
                    'username' => $user['username'],
                    'nama_lengkap' => $user['nama_lengkap'],
                    'logged_in' => true
                ]);

                return redirect()->to('/home')->with('success', 'Login berhasil.');
            } else {
                return redirect()->back()->with('error', 'Password salah.');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout.');
    }
}
