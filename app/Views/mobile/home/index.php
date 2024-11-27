<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<div id="appCapsule">
    <div class="section" id="user-section">
        <div id="user-detail">
            <div id="user-info">
                <h2 id="user-name">Selamat Datang di Aplikasi</h2>
                <span id="user-role">Cek Kadaluarsa A'Dinda Kue</span>
            </div>
        </div>
    </div>

    <div class="section" id="menu-section">
        <div class="card">
            <div class="card-body text-center">
                <div class="list-menu">
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="<?= base_url('app/profile') ?>" class="green" style="font-size: 40px;">
                                <ion-icon name="business-outline"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Profil</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="<?= base_url('app/info-aplikasi') ?>" class="danger" style="font-size: 40px;">
                                <ion-icon name="phone-portrait-outline"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Info Aplikasi</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="<?= base_url('app/info-developer') ?>" class="warning" style="font-size: 40px;">
                                <ion-icon name="code-working-outline"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Info Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="section full mb-3 mt-3">
        <div class="section-title">Toko A'dinda Kue</div>

        <div class="carousel-single owl-carousel owl-theme">
            <div class="item">
                <img src="<?= base_url('mobile/') ?>assets/img/adinda1.webp" alt="alt" class="imaged w-100">
            </div>
            <div class="item">
                <img src="<?= base_url('mobile/') ?>assets/img/adinda2.webp" alt="alt" class="imaged w-100">
            </div>
            <div class="item">
                <img src="<?= base_url('mobile/') ?>assets/img/adinda3.webp" alt="alt" class="imaged w-100">
            </div>
        </div>

    </div>
</div>

<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="<?= base_url('app/scan') ?>" class="item">
        <div class="col">
            <div class="action-button large">
                <ion-icon name="qr-code-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            </div>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->
<?= $this->endSection(); ?>