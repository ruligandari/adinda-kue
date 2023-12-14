<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin'
        ];
        return view('admin/login/index', $data);
    }

    public function auth()
    {
        $admin = new AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getVar('password');

        // login bedasarkan username
        $cek = $admin->where('username', $username)->first();
        // login menggunakan password_verify
        if ($cek) {
            if (password_verify($password, $cek['password'])) {
                $sessData = [
                    'id' => $cek['id'],
                    'nama' => $cek['nama'],
                    'username' => $cek['username'],
                    'role' => $cek['role'],
                    'logged_in' => TRUE
                ];
                session()->set($sessData);
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('error', 'Username tidak ditemukan');
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
