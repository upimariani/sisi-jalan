<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Produk Sisi Jalan Kopi</h1>

        <a class="btn btn-primary mb-3" href="<?= base_url('admin/cproduk/create') ?>">Create produk</a>
        <?php
        if ($this->session->userdata('success')) {
        ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="alert-icon">
                    <i class="far fa-fw fa-bell"></i>
                </div>
                <div class="alert-message">
                    <strong>Hello there!</strong> <?= $this->session->userdata('success') ?>
                </div>
            </div>
        <?php
        }
        ?>


        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Produk</h5>
                    </div>
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th style="width:20%;">Gambar</th>
                                <th style="width:25%">Nama Produk</th>
                                <th class="d-none d-md-table-cell" style="width:25%">Harga Produk</th>
                                <th class="d-none d-md-table-cell" style="width:25%">Deskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($produk as $key => $value) {
                            ?>
                                <tr>
                                    <td><img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>"></td>
                                    <td><?= $value->nama_produk ?></td>
                                    <td class="d-none d-md-table-cell">Rp. <?= number_format($value->harga, 0) ?></td>
                                    <td class="d-none d-md-table-cell"><?= $value->deskripsi ?></td>
                                    <td class="table-action">
                                        <a href="<?= base_url('admin/cproduk/update/' . $value->id_produk) ?>"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <a href="<?= base_url('admin/cproduk/delete/' . $value->id_produk) ?>"><i class="align-middle" data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>