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
                <div class="accordion" id="accordionExample1">

                    <div class="item">
                        <div class="accordion-header">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion1">
                                Scan Kode QR
                            </button>
                        </div>
                        <div id="accordion1" class="accordion-body collapse" data-parent="#accordionExample1">
                            <div class="accordion-content">
                                1. Pilih menu qrcode dengan gambar Qrcode<br>
                                2. Kemudian akan muncul kamera untuk scan Qrcode<br>
                                3. Arahkan kamera ke Qrcode<br>
                                4. Tunggu hingga muncul hasil scan<br>
                                5. Jika berhasil maka akan muncul hasil scan<br>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion-header">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion2">
                                Profile
                            </button>
                        </div>
                        <div id="accordion2" class="accordion-body collapse" data-parent="#accordionExample1">
                            <div class="accordion-content">
                                1. Pilih tombol Profil<br>
                                2. Kemudian akan muncul halaman Profile<br>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="accordion-header">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion3">
                                Info Aplikasi
                            </button>
                        </div>
                        <div id="accordion3" class="accordion-body collapse" data-parent="#accordionExample1">
                            <div class="accordion-content">
                                1. Pilih menu Info Aplikasi<br>
                                2. Kemudian akan muncul halaman Informasi Aplikasi<br>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="accordion-header">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion4">
                                Info Developer
                            </button>
                        </div>
                        <div id="accordion4" class="accordion-body collapse" data-parent="#accordionExample1">
                            <div class="accordion-content">
                                1. Pilih menu Info Developer<br>
                                2. Kemudian akan muncul halaman Informasi Developer<br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- * App Capsule -->

<?= $this->endSection(); ?>