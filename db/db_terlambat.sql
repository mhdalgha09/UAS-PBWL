-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 04:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_terlambat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_piket`
--

CREATE TABLE `tbl_piket` (
  `id_piket` int(10) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_piket`
--

INSERT INTO `tbl_piket` (`id_piket`, `nama_guru`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(21, 'Muhammad Al-Ghazali', 'Laki-Laki', '2022-07-12 08:41:20', '2022-07-12 15:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama_siswa`, `alamat`, `jenis_kelamin`, `kelas`, `jurusan`, `created_at`, `updated_at`) VALUES
(29, 'Al-Ghazali', 'Tebing Tinggi', 'Laki-Laki', 'X-3', 'IPA', '2022-07-12 08:29:10', '2022-07-12 15:29:10'),
(30, 'Endar Muda', 'Jl. Asahan No. 12', 'Laki-Laki', 'XII-IPA1', 'IPS', '2022-07-12 08:29:31', '2022-07-12 15:29:31'),
(31, 'Rizki Ahmadi', 'Jl. Sisingamangaraja XII', 'Laki-Laki', 'XII-IPS3', 'IPS', '2022-07-12 08:30:01', '2022-07-12 15:30:01'),
(32, 'Septi Ani', 'jl. lenggeng Gg 01', 'Perempuan', 'X-2', 'IPA', '2022-07-12 08:31:42', '2022-07-12 15:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terlambat`
--

CREATE TABLE `tbl_terlambat` (
  `id_terlambat` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_piket` int(10) NOT NULL,
  `tgl_terlambat` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_terlambat` time NOT NULL,
  `jam_masuk` time NOT NULL,
  `hukuman` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_terlambat`
--

INSERT INTO `tbl_terlambat` (`id_terlambat`, `id_siswa`, `id_piket`, `tgl_terlambat`, `tgl_masuk`, `jam_terlambat`, `jam_masuk`, `hukuman`, `alasan`, `created_at`, `updated_at`) VALUES
(29, 31, 21, '2022-07-12', '2022-07-12', '08:33:00', '08:42:00', 'Bersihin Kaca', 'Bocor Ban', '2022-07-12 08:42:38', '2022-07-12 15:42:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_piket`
--
ALTER TABLE `tbl_piket`
  ADD PRIMARY KEY (`id_piket`),
  ADD KEY `nama_guru` (`nama_guru`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `nama_siswa` (`nama_siswa`);

--
-- Indexes for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  ADD PRIMARY KEY (`id_terlambat`),
  ADD KEY `id_siswa` (`id_siswa`,`id_piket`),
  ADD KEY `id_piket` (`id_piket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_piket`
--
ALTER TABLE `tbl_piket`
  MODIFY `id_piket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  MODIFY `id_terlambat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  ADD CONSTRAINT `tbl_terlambat_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id_siswa`),
  ADD CONSTRAINT `tbl_terlambat_ibfk_2` FOREIGN KEY (`id_piket`) REFERENCES `tbl_piket` (`id_piket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
