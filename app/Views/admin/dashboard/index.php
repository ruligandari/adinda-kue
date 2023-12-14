<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-archive"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Produk</h4>
                        </div>
                        <div class="card-body">
                            <?= $produk ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Produksi</h4>
                        </div>
                        <div class="card-body">
                            <?= $produksi ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Selamat Datang, <?= session()->get('nama') ?></h4>
                    </div>
                    <div class="card-body p-0">

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>