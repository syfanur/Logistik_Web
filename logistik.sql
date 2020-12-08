-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 07:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kirim`
--

CREATE TABLE `kirim` (
  `id` int(200) NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `jumlah_barang` varchar(200) DEFAULT NULL,
  `nama_vendor` varchar(200) DEFAULT NULL,
  `tujuan_gedung` varchar(200) DEFAULT NULL,
  `no_resi` varchar(200) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `durasi` varchar(200) DEFAULT NULL,
  `pengirim` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kirim`
--

INSERT INTO `kirim` (`id`, `nama_barang`, `jumlah_barang`, `nama_vendor`, `tujuan_gedung`, `no_resi`, `tanggal_pengiriman`, `durasi`, `pengirim`, `status`) VALUES
(1, '', '', '', '', '', '0000-00-00', '', '', ''),
(2, 'Kaca', '8642', 'Effertz LLC', '', '', '0000-00-00', '', '', 'Dalam Perjalanan'),
(3, 'Kaca', '8642', 'Effertz LLC', 'baleendah', '12345678', '2020-12-08', '2', 'syfa', 'Dalam Perjalanan');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(50) NOT NULL,
  `nama_barang` varchar(400) DEFAULT NULL,
  `jumlah_barang` varchar(200) DEFAULT NULL,
  `biaya_barang` varchar(50) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `nama_vendor` varchar(200) DEFAULT NULL,
  `tanggal_terima` date DEFAULT NULL,
  `penerima` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `nama_barang`, `jumlah_barang`, `biaya_barang`, `tanggal_order`, `nama_vendor`, `tanggal_terima`, `penerima`) VALUES
(11, 'Ban Mobil, Vlag Mobil', NULL, NULL, NULL, NULL, '2020-11-01', 'cipa'),
(16, 'Kaca', '8642', NULL, NULL, 'Effertz LLC', '2020-12-08', 'lathifah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kirim`
--
ALTER TABLE `kirim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kirim`
--
ALTER TABLE `kirim`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
