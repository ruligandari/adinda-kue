<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
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
        <div class="card">
            <div class="card-body">
                <ul class="listview simple-listview">
                    <li>Nama : Agung Gunawan</li>
                    <li>NIM : 20180810043</li>
                    <li>Prodi: Teknik Informatika</li>
                    <li>Fakultas Ilmu Komputer</li>
                    <li>Universitas Kuningan</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
<!-- * App Capsule -->

<?= $this->endSection(); ?>