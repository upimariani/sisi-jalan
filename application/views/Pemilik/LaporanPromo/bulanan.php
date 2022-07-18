<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Invoice</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-muted">Laporan Promo Produk.</div>
                                <strong>Laporan Promo Produk Bulanan</strong>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <div class="text-muted">Payment Date</div>
                                <strong><?= $bulan ?> / <?= $tahun ?></strong>
                            </div>
                        </div>
                        <br>
                        <br>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Id Produk</th>
                                    <th>Nama Promo</th>
                                    <th>Besar Promo</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($laporan as $key => $value) {
                                ?>

                                    <tr>
                                        <td><?= $value->id_produk ?></td>
                                        <td><?= $value->nama_promo ?></td>
                                        <td><?= $value->besar ?> %</td>
                                        <td><?= $value->tgl_mulai ?></td>
                                        <td>Rp. <?= number_format($value->harga - ($value->besar / 100 * $value->harga)) ?></td>
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

    </div>
</main>