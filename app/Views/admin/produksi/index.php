<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/modules/prism/prism.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<style>
    #myImage {
        max-width: 100%;
        height: auto;
    }
</style>
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
            <h1>Produksi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Data Produksi</h4>
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
                                            <th>Berat (gram)</th>
                                            <th>Tanggal Produksi</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>QR Code</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($produksi as $item) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $item['nama_produk'] ?></td>
                                                <td><?= $item['berat'] ?></td>
                                                <td><?= $item['tanggal_produksi'] ?></td>
                                                <td><?= $item['tanggal_kadaluarsa'] ?></td>
                                                <td> <img src="<?= $item['qrcode'] ?>" alt="" height="50" width="50"> </td>
                                                <td>
                                                    <button type="button" class="btn btn-dark"><i class="fas fa-download" onclick="downloadImage('<?= $item['qrcode'] ?>', '<?= $item['nama_produk'] ?>')"></i> </button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProduk<?= $item['id'] ?>"> <i class="fas fa-edit"></i> </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProduk<?= $item['id'] ?>"><i class="fas fa-trash"></i></button>
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
                <form action="<?= base_url('dashboard/produksi') ?>" method="post">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <select name="nama_produk" id="" class="form-control">
                            <?php foreach ($produk as $item) : ?>
                                <option value="<?= $item['id'] ?>"><?= $item['nama_produk'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Berat</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="berat" tabindex="2" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    Gram
                                </div>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Masukan Berat
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Tanggal Produksi</label>
                        <input id="deskripsi" type="date" class="form-control" name="tgl_produksi" tabindex="2" required>
                        <div class="invalid-feedback">
                            Masukan Tanggal Produksi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_bpjph">Tanggal Kadaluarsa</label>
                        <input id="nomor_bpjph" type="date" class="form-control" name="tgl_kadaluarsa" tabindex="2" required>
                        <div class="invalid-feedback">
                            Masukan Tanggal Kadaluarsa
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
<?php foreach ($produksi as $item) : ?>
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
                    <form action="<?= base_url('dashboard/edit-produksi') ?>" method="post">
                        <input type="hidden" name="id_produk" value="<?= $item['id'] ?>">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <select name="nama_produk" id="" class="form-control">
                                <?php
                                $namaProduk = $item['nama_produk'];
                                foreach ($produk as $items) : ?>
                                    <!-- ketika nama_produk sama dengan yang didatabase jadikan selected -->
                                    <option value="<?= $items['id'] ?>" <?= ($namaProduk == $items['nama_produk']) ? 'selected' : '' ?>><?= $items['nama_produk'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Berat</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="berat" value="<?= $item['berat'] ?>" tabindex="2" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        Gram
                                    </div>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                Masukan Berat
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Tanggal Produksi</label>
                            <input id="deskripsi" type="date" class="form-control" name="tgl_produksi" value="<?= $item['tanggal_produksi'] ?>" tabindex="2" required>
                            <div class="invalid-feedback">
                                Masukan Tanggal Produksi
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor_bpjph">Tanggal Kadaluarsa</label>
                            <input id="nomor_bpjph" type="date" class="form-control" name="tgl_kadaluarsa" value="<?= $item['tanggal_kadaluarsa'] ?>" tabindex="2" required>
                            <div class="invalid-feedback">
                                Masukan Tanggal Kadaluarsa
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
<?php foreach ($produksi as $item) : ?>
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
                    <form action="<?= base_url('dashboard/delete-produksi') ?>" method="post">
                        <p>Apakah Anda yakin ingin menghapus produksi <?= $item['nama_produk'] ?> ?</p>
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
<script src="<?= base_url() ?>/assets/modules/prism/prism.js"></script>

<script>
    function downloadImage(qr, namaProduk) {
        // Data URI dari gambar
        var imageDataURI = qr // Gantilah dengan data URI gambar yang sesuai

        // Buat elemen a untuk menautkan URL data dan mendownloadnya
        var a = document.createElement('a');
        a.href = imageDataURI;
        a.download = namaProduk + '.png';
        a.click();
    }
</script>
<?= $this->endSection(); ?>