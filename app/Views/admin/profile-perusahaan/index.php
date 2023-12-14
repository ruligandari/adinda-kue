<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            iziToast.success({
                title: 'Success',
                message: '<?= session()->getFlashdata('success') ?>',
                position: 'topRight'
            });
        </script>
    <?php endif ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <script>
            iziToast.error({
                title: 'Error',
                message: '<?= session()->getFlashdata('error') ?>',
                position: 'topRight'
            });
        </script>
    <?php endif ?>
    <section class="section">
        <div class="section-header">
            <h1>Profile Perusahaan</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-lg-8">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <div class="author-box-left">
                                <img alt="image" src="<?= base_url('profile/' . $profile['gambar']) ?>" class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                            </div>
                            <div class="author-box-details">
                                <div class="author-box-name">
                                    <h5>A'Dinda Kue</h5>
                                </div>
                                <div class="author-box-description">
                                    <form action="<?= base_url('dashboard/profile-perusahaan') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row mx-auto">
                                            <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama_perusahaan" value="<?= $profile['nama_perusahaan'] ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-auto">
                                            <label class=" col-sm-3 col-form-label">Pemilik</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="pemilik" value="<?= $profile['pemilik'] ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-auto">
                                            <label class=" col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="alamat" value="<?= $profile['alamat'] ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-auto">
                                            <label class=" col-sm-3 col-form-label">No. Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="no_telp" value="<?= $profile['no_telp'] ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-auto">
                                            <label class=" col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="gambar" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                    </form>
                                </div>
                                <div class="w-100 d-sm-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>