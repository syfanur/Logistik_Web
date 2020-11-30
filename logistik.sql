-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 01:00 PM
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
(12, 'Kopling', NULL, NULL, NULL, NULL, '2020-12-01', 'nur');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(50) NOT NULL,
  `id_warehouse` int(50) NOT NULL,
  `id_penerimaan` int(50) NOT NULL,
  `nomor_resi` int(50) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `durasi_pengiriman` varchar(50) NOT NULL,
  `timestamps` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(50) NOT NULL,
  `id_pengiriman` int(50) NOT NULL,
  `lokasi_barang` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamps` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penerimaan_relation` (`id_penerimaan`) USING BTREE;

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_relation` (`id_pengiriman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `penerimaan_relation` FOREIGN KEY (`id_penerimaan`) REFERENCES `penerimaan` (`id`);

--
-- Constraints for table `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `tracking_relation` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengiriman` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
