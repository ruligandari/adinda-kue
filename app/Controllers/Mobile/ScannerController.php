<?php

namespace App\Controllers\Mobile;

use App\Controllers\BaseController;

class ScannerController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Scanner'
        ];
        return view('mobile/scanner/index', $data);
    }

    public function result($id)
    {
        $produksiModel = new \App\Models\ProduksiModel();
        $decodebase64 = base64_decode($id);
        $produksi = $produksiModel->getProduksiById($decodebase64);

        if ($produksi) {
            $data = [
                'title' => 'Scan Berhasil',
                'success' => true,
                'dataQR' => $id,
                'data' => $produksi
            ];
            return view('mobile/scanner/result', $data);
        } else {
            $data = [
                'title' => 'Scan Gagal',
                'success' => false,
                'dataQR' => $id,
                'data' => 'Data tidak ditemukan atau QRCode tidak terdaftar'
            ];
            return view('mobile/scanner/result', $data);
        }
    }
}
