-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 08:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisi-jalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_hp`, `username`, `password`, `level_admin`) VALUES
(2, 'Dahlan', 'Kuningan', '0875698745633', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `pelanggan_send` text NOT NULL,
  `admin_send` text NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `id_admin`, `pelanggan_send`, `admin_send`, `time`) VALUES
(1, 1, 2, 'hai', '0', '2022-04-19 02:45:00'),
(2, 1, 2, '0', 'hai juga', '2022-04-19 02:55:43'),
(3, 1, 2, 'apakah ready produk coffe latte?', '0', '2022-04-19 02:58:06'),
(4, 1, 2, 'hai', '0', '2022-06-22 00:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_produk` varchar(11) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_produk`, `id_transaksi`, `qty`) VALUES
(1, 'KMIL', '20220418PTVV42C5', 2),
(2, 'KMIL', '20220419TSHAMBVQ', 1),
(3, 'GH2K', '20220419TSHAMBVQ', 1),
(4, 'KMIL', '20220419VY1B345C', 1),
(5, 'GH2K', '20220419VY1B345C', 1),
(6, 'GH2K', '20220614WVSUWOEG', 2),
(7, 'KMIL', '20220614WVSUWOEG', 1),
(8, 'GH2K', '20220614V4AAD7D2', 3),
(9, 'GH2K', '20220615BWXFROZI', 2),
(10, 'KMIL', '20220615Z0R5YDTV', 1),
(11, 'GH2K', '20220615PLN1CH2I', 1),
(12, 'KMIL', '20220615PLN1CH2I', 1),
(13, 'GH2K', '20220615AOJVGBEX', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `nama_diskon` varchar(50) NOT NULL,
  `besar` varchar(15) NOT NULL,
  `tgl_mulai` varchar(15) NOT NULL,
  `tgl_selesai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_produk`, `nama_diskon`, `besar`, `tgl_mulai`, `tgl_selesai`) VALUES
(2, 'KMIL', 'coba', '15', 'Fri-Apr-2022', '04/28/2022'),
(4, 'GH2K', 'Baju', '20', 'Wed-Jun-2022', '18-06-2022'),
(5, 'NVYR', '0', '0', '0', '0'),
(6, 'JWKS', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kritik_saran` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritik`, `id_pelanggan`, `kritik_saran`, `time`) VALUES
(1, 1, 'coffe nya enakkk', '2022-04-19 03:07:29'),
(2, 1, 'recommmedd bangett', '2022-04-19 03:13:49'),
(3, 2, 'coffe nya enakkk banget', '2022-06-14 12:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `member` varchar(10) NOT NULL,
  `create_member` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `no_hp`, `username`, `password`, `member`, `create_member`) VALUES
(1, 'Upi Mariani', 'P', 'Kuningan, Jawa Barat', '085156727368', 'upimariani', 'upi12345', '0', '2022-06-22 00:39:32'),
(2, 'Bambang Ahmad ', 'L', 'Ciawigebang', '087675454321', 'bambang', 'ahmad12345', '1', '2022-06-14 12:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(125) NOT NULL,
  `tipe_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `deskripsi`, `foto`, `tipe_produk`) VALUES
('GH2K', 'Cappucino', '15000', 39, '<div>Capuccino High Premium</div>', 'caffe_late_dingin.jpg', 0),
('JWKS', 'V60', '30000', 40, '<div>Dark Coffe</div>', 'hghg.jpg', 0),
('KMIL', 'Kopi Latte', '25000', 7, '<div>Kopi Latte <strong>Premium Edition</strong></div>', 'cappucino_dingin1.jpg', 0),
('NVYR', 'Hazelnut Latte', '25000', 30, '<div>Hazelnut Coffe fresh milk</div>', 'ghghg.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` varchar(20) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `status_order` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `total_bayar`, `status_order`, `time`, `pembayaran`, `bukti_pembayaran`) VALUES
('20220418PTVV42C5', 1, '2022-04-18', '50000', 1, '2022-04-18 02:07:19', 3, 'link.jpg'),
('20220614V4AAD7D2', 2, '2022-06-14', '45000', 1, '2022-06-14 12:13:13', 1, 'gambar.gif'),
('20220614WVSUWOEG', 2, '2022-06-14', '52250', 0, '2022-06-14 11:58:50', 2, '0'),
('20220615AOJVGBEX', 2, '2022-06-15', '11400', 0, '2022-06-15 12:30:02', 2, '0'),
('20220615BWXFROZI', 2, '2022-06-15', '25650', 0, '2022-06-15 00:58:18', 2, '0'),
('20220615PLN1CH2I', 2, '2022-06-15', '31587.5', 0, '2022-06-15 10:52:37', 2, '0'),
('20220615Z0R5YDTV', 1, '2022-06-15', '20187.5', 1, '2022-06-15 04:51:39', 2, '?Pinterest?_@lalalalizax1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
