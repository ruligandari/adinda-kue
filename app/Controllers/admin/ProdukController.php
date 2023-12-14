<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->findAll();
        $data = [
            'title' => 'Produk',
            'produk' => $produk
        ];

        return view('admin/produk/index', $data);
    }

    public function save()
    {
        $produkModel = new ProdukModel();
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'spp-pirt' => $this->request->getPost('spp-pirt'),
            'bpjph' => $this->request->getPost('bpjph'),
        ];

        $produkModel->insert($data);

        session()->setFlashdata('success', 'Data berhasil disimpan.');

        return redirect()->to('/dashboard/produk');
    }

    public function update()
    {
        $produkModel = new ProdukModel();
        $id = $this->request->getPost('id_produk');
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'spp-pirt' => $this->request->getPost('spp-pirt'),
            'bpjph' => $this->request->getPost('bpjph'),
        ];

        $produkModel->update($id, $data);

        session()->setFlashdata('success', 'Data berhasil diubah.');

        return redirect()->to('/dashboard/produk');
    }

    public function delete()
    {
        $produkModel = new ProdukModel();
        $id = $this->request->getPost('id_produk');

        $produkModel->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus.');

        return redirect()->to('/dashboard/produk');
    }
}
