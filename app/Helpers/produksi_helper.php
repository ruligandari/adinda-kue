<?php

use App\Models\ProduksiModel;

function generateNoProduksi($tglKadaluarsa)
{

    $modelProduksi = new ProduksiModel();
    $lastProduksi = $modelProduksi->orderBy('nomor_produksi', 'DESC')->first();

    if ($lastProduksi) {
        $lastNoProduksi = $lastProduksi['nomor_produksi'];
        $lastNoUrut = substr($lastNoProduksi, 10, 4);
        $nextNoUrut = $lastNoUrut + 1;
        $nextNoProduksi = 'AK' . date('dmY', strtotime($tglKadaluarsa)) . sprintf('%04s', $nextNoUrut);
    } else {
        $nextNoProduksi = 'AK' . date('dmY', strtotime($tglKadaluarsa)) . '0001';
    }

    return $nextNoProduksi;
}
