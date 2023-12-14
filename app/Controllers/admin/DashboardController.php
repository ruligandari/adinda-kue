<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\ProduksiModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $model = new ProdukModel();
        $produksiModel = new ProduksiModel();
        // masukan jumah total produk dari $model
        $produk = $model->countAll();
        $produksi = $produksiModel->countAll();
        $data = [
            'title' => 'Dashboard',
            'produk' => $produk,
            'produksi' => $produksi,
        ];
        return view('admin/dashboard/index', $data);
    }
}
