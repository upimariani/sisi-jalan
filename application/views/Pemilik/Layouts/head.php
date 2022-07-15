<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

    <link rel="shortcut icon" href="<?= base_url('asset/adminkit/examples/') ?>img/icons/icon-48x48.png" />

    <title>ADMIN SISI JALAN KOPI</title>

    <link href="<?= base_url('asset/adminkit/examples/') ?>css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/trix-main/dist/') ?>trix.css">
    <script type="text/javascript" src="<?= base_url('asset/trix-main/dist/') ?>trix.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">


</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Pemilik</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cDashboard') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cDashboard') ?>">
                            <i class="align-middle" data-feather="compass"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporan_Transaksi') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cLaporan_Transaksi') ?>">
                            <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Laporan Transaksi</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporan_Produk') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cLaporan_Produk') ?>">
                            <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Laporan Produk</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporan_Pelanggan') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cLaporan_Pelanggan') ?>">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Laporan Pelanggan</span>
                        </a>
                    </li>



                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/clogin/logout') ?>">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
                        </a>
                    </li>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="form-inline d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                                <i class="align-middle" data-feather="search"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </nav>