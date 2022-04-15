<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Informasi Status Order</h1>

        <div class="row">
            <div class="col-md-3 col-xl-2">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Transaksi</h5>
                    </div>

                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#pesanan_masuk" role="tab">
                            Pesanan Masuk
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#konfirmasi" role="tab">
                            Konfirmasi
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#diproses" role="tab">
                            Pesanan Diproses
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#dikirim" role="tab">
                            Pesanan Dikirim
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#selesai" role="tab">
                            Selesai
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-xl-10">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pesanan_masuk" role="tabpanel">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pesanan Masuk</h5>
                                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Atas Nama</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Total Pembayaran</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($status['pesanan_masuk'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="konfirmasi" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Konfirmasi Pembayaran</h5>
                                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Atas Nama</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Total Pembayaran</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($status['konfirmasi'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="diproses" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pesanan Diproses</h5>
                                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Atas Nama</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Total Pembayaran</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($status['diproses'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dikirim" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pesanan Dikirim</h5>
                                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Atas Nama</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Total Pembayaran</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($status['dikirim'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="selesai" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pesanan Selesai</h5>
                                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Atas Nama</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Total Pembayaran</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($status['selesai'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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

    </div>
</main>