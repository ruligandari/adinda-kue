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
                <h5 class="card-title">A'Dinda Kue</h5>
                <form>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Pemilik</label>
                            <input type="text" class="form-control" id="name5" value="<?= $profile['pemilik'] ?>" readonly>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Alamat</label>
                            <input type="text" class="form-control" id="name5" value="<?= $profile['alamat'] ?>" readonly>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">No. Telepon</label>
                            <input type="text" class="form-control" id="name5" value="<?= $profile['no_telp'] ?>" readonly>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- * App Capsule -->

<?= $this->endSection(); ?>