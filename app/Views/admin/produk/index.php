<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/prism/prism.css">
<?= $this->endSection(); ?>

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
            <h1>Produk</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Data Produk</h4>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi</th>
                                            <th>Nomor SPP-PIRT</th>
                                            <th>Nomor BPJPH</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($produk as $item) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $item['nama_produk'] ?></td>
                                                <td><?= $item['deskripsi'] ?></td>
                                                <td><?= $item['spp-pirt'] ?></td>
                                                <td><?= $item['bpjph'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProduk<?= $item['id'] ?>">Edit</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProduk<?= $item['id'] ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- modal Tambah Data -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('dashboard/produk') ?>" method="post">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input id="nama_produk" type="text" class="form-control" name="nama_produk" tabindex="1" required>
                        <div class="invalid-feedback">
                            Masukan Nama Produk
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" tabindex="2" required></textarea>
                        <div class="invalid-feedback">
                            Masukan Deskripsi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Nomor SPP-PIRT</label>
                        <input id="deskripsi" type="text" class="form-control" name="spp-pirt" tabindex="2" required>
                        <div class="invalid-feedback">
                            Masukan Nomor SPP-PIRT
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_bpjph">Nomor BPJPH</label>
                        <input id="nomor_bpjph" type="text" class="form-control" name="bpjph" tabindex="2" required>
                        <div class="invalid-feedback">
                            Masukan Nomor BPJPH
                        </div>
                    </div>

            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal edit -->
<?php foreach ($produk as $item) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="editProduk<?= $item['id'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('dashboard/edit-produk') ?>" method="post">
                        <input type="hidden" name="id_produk" value="<?= $item['id'] ?>">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input id="nama_produk" type="text" class="form-control" name="nama_produk" value="<?= $item['nama_produk'] ?>" tabindex="1" required>
                            <div class="invalid-feedback">
                                Masukan Nama Produk
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" tabindex="2" required><?= $item['deskripsi'] ?></textarea>
                            <div class="invalid-feedback">
                                Masukan Deskripsi
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Nomor SPP-PIRT</label>
                            <input id="deskripsi" type="text" class="form-control" name="spp-pirt" tabindex="2" value="<?= $item['spp-pirt'] ?>" required>
                            <div class="invalid-feedback">
                                Masukan Nomor SPP-PIRT
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor_bpjph">Nomor BPJPH</label>
                            <input id="nomor_bpjph" type="text" class="form-control" name="bpjph" tabindex="2" value="<?= $item['bpjph'] ?>" required>
                            <div class="invalid-feedback">
                                Masukan Nomor BPJPH
                            </div>
                        </div>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- modal delete -->
<?php foreach ($produk as $item) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="deleteProduk<?= $item['id'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Produk ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('dashboard/delete-produk') ?>" method="post">
                        <p>Apakah Anda yakin ingin menghapus produk <?= $item['nama_produk'] ?> ?</p>
                        <input type="hidden" name="id_produk" value="<?= $item['id'] ?>">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url() ?>/assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/assets/js/page/modules-datatables.js"></script>
<script src="assets/modules/prism/prism.js"></script>
<?= $this->endSection(); ?>