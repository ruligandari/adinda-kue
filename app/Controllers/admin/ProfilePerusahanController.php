<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfilePerusahaanModel;

class ProfilePerusahanController extends BaseController
{
    public function index()
    {
        $dataPerusahaan = new ProfilePerusahaanModel();

        $datas = $dataPerusahaan->find('1');
        $data = [
            'title' => 'Profile Perusahaan',
            'profile' => $datas
        ];

        return view('admin/profile-perusahaan/index', $data);
    }

    public function update()
    {
        $dataPerusahaan = new ProfilePerusahaanModel();
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError()) {
            $getNamaGambar = 'default.png';
        } else {
            $gambar->move('profile');
            $getNamaGambar = $gambar->getName();
        }
        $data = [
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'pemilik' => $this->request->getPost('pemilik'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'gambar' => $getNamaGambar
        ];

        $dataPerusahaan->update('1', $data);

        return redirect()->to(base_url('dashboard/profile-perusahaan'))->with('success', 'Profile Perusahaan Berhasil Diubah');
    }
}
