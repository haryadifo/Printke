-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printke`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `nama_pelanggan` varchar(255) NOT NULL,
  `foto_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`nama_pelanggan`, `foto_bukti`) VALUES
('ridho', 'ovo.jpg'),
('agil', 'gopay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jilid`
--

CREATE TABLE `jilid` (
  `id_order_jilid` int(11) NOT NULL,
  `ukuran_kertas` enum('A4','F4','Legal','letter') NOT NULL,
  `warna_kamb` enum('kuning','merah','hijau','biru') NOT NULL,
  `juml_rangkap` int(3) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `file_jilid` text NOT NULL,
  `total_belanja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jilid`
--

INSERT INTO `jilid` (`id_order_jilid`, `ukuran_kertas`, `warna_kamb`, `juml_rangkap`, `no_telp`, `alamat`, `file_jilid`, `total_belanja`) VALUES
(1, 'A4', 'kuning', 1, '4324234', 'gang buntu', 'bunga.jpg', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `print`
--

CREATE TABLE `print` (
  `id_order_print` int(11) NOT NULL,
  `file_print` text NOT NULL,
  `jml_rangkap` int(11) NOT NULL,
  `berat_kertas` enum('70','80') NOT NULL,
  `ukuran_kertas` enum('A4','F4','Legal','Letter') NOT NULL,
  `jenis_tinta` enum('warna','grey scale') NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total_belanja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `print`
--

INSERT INTO `print` (`id_order_print`, `file_print`, `jml_rangkap`, `berat_kertas`, `ukuran_kertas`, `jenis_tinta`, `no_telp`, `alamat`, `total_belanja`) VALUES
(3, 'bunga.jpg', 1, '80', 'Legal', 'grey scale', '4324234', 'gang buntu', '14000');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE `scan` (
  `id_order_scan` int(11) NOT NULL,
  `file_scan` text NOT NULL,
  `jml_scan` int(3) NOT NULL,
  `berat_scan` enum('70','80') NOT NULL,
  `ukuran_scan` enum('A4','F4','Legal','Letter') NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total_belanja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scan`
--

INSERT INTO `scan` (`id_order_scan`, `file_scan`, `jml_scan`, `berat_scan`, `ukuran_scan`, `no_telpon`, `alamat`, `total_belanja`) VALUES
(1, 'bunga.jpg', 1, '70', 'A4', '213123', 'gang buntu', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_nama` varchar(256) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_role_id` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_nama`, `username`, `user_password`, `user_role_id`) VALUES
(1, 'rehan', 'rehan@gmail.com', 'rehan123', '1'),
(2, 'wahnu', 'wahnu@gmail.com', 'wahnu123', '2'),
(3, 'sifa', 'sifa@gmail.com', 'qwerty', '3'),
(19, 'difo', 'difo@gmail.com', 'difo123', '3'),
(20, 'isan', 'isan@gmail.com', 'isan123', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jilid`
--
ALTER TABLE `jilid`
  ADD PRIMARY KEY (`id_order_jilid`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
  ADD PRIMARY KEY (`id_order_print`);

--
-- Indexes for table `scan`
--
ALTER TABLE `scan`
  ADD PRIMARY KEY (`id_order_scan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jilid`
--
ALTER TABLE `jilid`
  MODIFY `id_order_jilid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id_order_print` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scan`
--
ALTER TABLE `scan`
  MODIFY `id_order_scan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
