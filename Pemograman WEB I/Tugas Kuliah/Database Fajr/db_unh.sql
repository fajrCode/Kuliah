-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 10:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus_unh`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_mahasiswa`
--

CREATE TABLE `table_mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama_mahasiswa` varchar(80) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `program_studi` varchar(40) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_mahasiswa`
--

INSERT INTO `table_mahasiswa` (`nim`, `nama_mahasiswa`, `jenis_kelamin`, `program_studi`, `alamat`) VALUES
('111', 'Eneng', 'Perempuan', 'Sistem Informasi', 'Jl. Mawar'),
('222', 'Asep', 'Laki-laki', 'Teknologi Informasi', 'Jl. Anggun'),
('333', 'Upin', 'Laki-laki', 'Teknik Informatika', 'Jl. Durian');

-- --------------------------------------------------------

--
-- Table structure for table `table_prodi`
--

CREATE TABLE `table_prodi` (
  `id_prodi` int(3) UNSIGNED NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_prodi`
--

INSERT INTO `table_prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`) VALUES
(111, 'TI', 'Teknik Informatika'),
(222, 'SI', 'Sistem Informasi'),
(333, 'TEKNO', 'Teknologi Informasi'),
(444, 'IP', 'Ilmu Pemerintah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `table_prodi`
--
ALTER TABLE `table_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_prodi`
--
ALTER TABLE `table_prodi`
  MODIFY `id_prodi` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
