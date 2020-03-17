-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 03:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samijali_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `id_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barangdibeli`
--

CREATE TABLE `barangdibeli` (
  `id_pembelian` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `iduser` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipeakun` enum('pegawai','owner','pelanggan','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`iduser`, `nama`, `nohp`, `email`, `username`, `password`, `tipeakun`) VALUES
(1, 'fani', '08579927123', 'fania.aristya@gmail.com', 'faney', 'userid', 'pegawai'),
(4, 'test', '08191919191919', 'test@gmail.com', 'test', 'test', 'pelanggan'),
(5, 'fan', '0987654', 'fan@gmail.com', 'fan', 'fan', 'pelanggan'),
(6, 'irul', '081910287371', 'irul@gmail.com', 'irul', 'irul', 'pelanggan'),
(7, 'dian', '081910287371', 'dian@gmail.com', 'dian', 'dian', 'pelanggan'),
(8, 'abi', '081727272772', 'abi@gmail.com', 'abi', 'eff7342be647ab42f561b048c657979c61a3a41e', 'pegawai'),
(9, 'susila', '098765678', 'susila@yahoo.com', 'susila', '831e68c5862581403862523e78ce8ef48f0503e3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umkm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `username`, `password`, `nama`, `umkm`, `email`) VALUES
(1, 'mamanha', '123', 'mamanski', 'samijali', 'farizsamanha@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `id_transaksi` int(100) NOT NULL,
  `date` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jumlah`, `bank`, `id_transaksi`, `date`, `waktu`) VALUES
(0, 90000, 'BNI', 1234, '2017-12-10', '21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_user` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_pesanan` int(5) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_user`, `id_produk`, `jumlah`, `total`, `id_transaksi`, `id_pesanan`, `status`) VALUES
(0, 4, 30, 900000, '1234', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(4) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok` int(4) NOT NULL,
  `harga` int(6) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `image`, `detail_produk`) VALUES
(5, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(8, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(13, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(14, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(15, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(16, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(17, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis'),
(18, 'SAMIJALI_BBQ', 30, 10000, 'samijali1.jpg', 'samijali rasa barbeque yang pedas dan manis');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `no_resi` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `jasapengiriman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

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
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
