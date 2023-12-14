<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\ProduksiModel;
use App\Models\ProdukModel;


class ProduksiController extends BaseController
{
    public function index()
    {

        $model = new ProdukModel();
        $modelProduksi = new ProduksiModel();
        $produk = $model->findAll();
        $produksi = $modelProduksi->getProduksi();
        $data = [
            'title' => 'Produksi',
            'produk' => $produk,
            'produksi' => $produksi,
        ];
        return view('admin/produksi/index', $data);
    }

    public function save()
    {
        helper('produksi');
        helper('qrcode');
        helper('base64');
        $model = new ProduksiModel();

        $namaProduk = $this->request->getVar('nama_produk');
        $tglproduksi = $this->request->getVar('tgl_produksi');
        $berat = $this->request->getVar('berat');
        $tglkadaluarsa = $this->request->getVar('tgl_kadaluarsa');
        // generate nomor produksi
        $nomorProduksi = generateNoProduksi($tglkadaluarsa);
        // enkripsi
        $enkripsi = encode($nomorProduksi);
        // qrcode
        $qrcode = generateQrcode($enkripsi);
        $data = [
            'nomor_produksi' => $nomorProduksi,
            'nama_produk' => $namaProduk,
            'berat' => $berat,
            'tanggal_produksi' => $tglproduksi,
            'tanggal_kadaluarsa' => $tglkadaluarsa,
            'qrcode' => $qrcode,
        ];
        $model->save($data);
        return redirect()->to(base_url('dashboard/produksi'))->with('success', 'Data berhasil disimpan');
    }

    public function update()
    {
        helper('produksi');
        helper('qrcode');
        helper('base64');
        $model = new ProduksiModel();

        $id = $this->request->getVar('id_produk');
        $namaProduk = $this->request->getVar('nama_produk');
        $tglproduksi = $this->request->getVar('tgl_produksi');
        $berat = $this->request->getVar('berat');
        $tglkadaluarsa = $this->request->getVar('tgl_kadaluarsa');
        $data = [
            'nama_produk' => $namaProduk,
            'berat' => $berat,
            'tanggal_produksi' => $tglproduksi,
            'tanggal_kadaluarsa' => $tglkadaluarsa,
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('dashboard/produksi'))->with('success', 'Data berhasil diupdate');
    }

    public function delete()
    {
        $model = new ProduksiModel();
        $id = $this->request->getVar('id_produk');
        $model->delete($id);
        return redirect()->to(base_url('dashboard/produksi'))->with('success', 'Data berhasil dihapus');
    }
}
