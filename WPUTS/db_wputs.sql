-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 07:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wputs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbdosen`
--

CREATE TABLE `tbdosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nidn` int(20) DEFAULT NULL,
  `gelar` varchar(12) DEFAULT NULL,
  `dapartemen` varchar(255) DEFAULT NULL,
  `iddosen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdosen`
--

INSERT INTO `tbdosen` (`id`, `nama`, `nidn`, `gelar`, `dapartemen`, `iddosen`) VALUES
(1, 'I Kadek Prayoga Putra Mahendra', 2147483647, 's3', 'Teknik Informatika', 'cba1cdbb6669b97dbd89a636c33b32e7'),
(2, 'I Kadek Prayoga Putra Mahendra', 2147483647, 's3', 'Teknik Informatika', 'cba1cdbb6669b97dbd89a636c33b32e7'),
(3, 'I Kadek Prayoga Putra Mahendra', 2147483647, 's3', 'Teknik Informatika', 'cba1cdbb6669b97dbd89a636c33b32e7');

-- --------------------------------------------------------

--
-- Table structure for table `tbmatkul`
--

CREATE TABLE `tbmatkul` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_matkul` varchar(255) DEFAULT NULL,
  `dosen` varchar(255) DEFAULT NULL,
  `sks` int(10) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `idmatkul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmatkul`
--

INSERT INTO `tbmatkul` (`id`, `nama_matkul`, `dosen`, `sks`, `semester`, `ruangan`, `idmatkul`) VALUES
(1, 'Informasi', 'yoga', 4, '5', 'gf5', 'd0c52796a3a030f21a3ed6fdf753e8f1');

-- --------------------------------------------------------

--
-- Table structure for table `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nim` varchar(35) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `idmhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmhs`
--

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `prodi`, `jeniskelamin`, `tgl_lahir`, `idmhs`) VALUES
(1, 'I Kadek Prayoga Putra Mahendra', '2201010494', 'TI-MDI', 'Laki-Laki', '2002-05-09', '191c98dbd0062f57110f3bd255f590f8'),
(6, 'Yoga', '353453', 'TI-MDI', 'Laki-Laki', '2023-06-06', 'f53db6287a037afd1b6cdfde4734f6a6');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(17, 'I Kadek Prayoga Putra Mahendra', 'ikadekprayoga123@gmail.com', 'yoga', '1234', 'b13e5927365e6ef380aa27e5f5dc645c'),
(18, 'I Kadek Prayoga Putra Mahendra', 'ikadekprayoga123@gmail.com', 'yoga', '1234', 'b13e5927365e6ef380aa27e5f5dc645c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbdosen`
--
ALTER TABLE `tbdosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmatkul`
--
ALTER TABLE `tbmatkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbdosen`
--
ALTER TABLE `tbdosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbmatkul`
--
ALTER TABLE `tbmatkul`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
