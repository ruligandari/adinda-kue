<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- App Header -->
<div class="appHeader <?= $success ? 'bg-primary' : 'bg-danger' ?> text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"><?= $title ?></div>
    <div class="right"></div>
</div>
<!-- * App Header -->
<br><br>
<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2">
        <center>

            <?= $dataQR ?>
            <?php
            // cek $data apakah array atau bukan

            if (is_array($data)) : ?>

                <div class="card">
                    <ul class="listview flush transparent simple-listview">
                        <li>Nomor Produksi: <?= $data['nomor_produksi'] ?></li>
                        <li>Nama Produk: <?= $data['nama_produk'] ?></li>
                        <li>Berat: <?= $data['berat'] ?> gram</li>
                        <li>Tanggal Produksi: <?= $data['tanggal_produksi'] ?></li>
                        <li>Tanggal Kadaluarsa: <?= $data['tanggal_kadaluarsa'] ?></li>
                    </ul>
                </div>
            <?php endif ?>
            <?php if (!is_array($data)) : ?>
                <br>
                <?= $data ?>
            <?php endif ?>
        </center>
    </div>

</div>
<!-- * App Capsule -->

<?= $this->endSection(); ?>