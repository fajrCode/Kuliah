-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 05.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nim` varchar(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `jk_anggota` char(1) NOT NULL,
  `kode_prodi` char(10) NOT NULL,
  `no_hp_anggota` char(13) NOT NULL,
  `alamat_anggota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nim`, `nama_anggota`, `jk_anggota`, `kode_prodi`, `no_hp_anggota`, `alamat_anggota`) VALUES
('1311', 'Fajri', 'L', 'TI', '0859xxxxxxxxx', 'Kota Baru'),
('1510', 'Chea', 'P', 'SI', '0813xxxxxxxx', 'Talang Banjar'),
('2104', 'Nabila', 'P', 'SI', '0822xxxxxxxx', 'Kasang Pudak'),
('2106', 'Angga', 'L', 'TI', '0831xxxxxxxx', 'Sungai Gelam'),
('2403', 'Eka', 'P', 'TI', '0897xxxxxxx', 'Kebun Handil'),
('2406', 'Falah', 'L', 'SI', '0822xxxxxxxx', 'Budiman'),
('2911', 'Aldi', 'L', 'TI', '0851xxxxxxxx', 'Bagan Pete'),
('3080', 'Bobby', 'L', 'SI', '0813xxxxxxxx', 'Kampung Manggis'),
('4090', 'Kasih', 'P', 'TI', '0822xxxxxxxx', 'Kasang'),
('5100', 'Rian', 'L', 'SI', '0898xxxxxxxx', 'Tempino');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_penerbit` year(4) NOT NULL,
  `gambar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `penulis`, `penerbit`, `tahun_penerbit`, `gambar`) VALUES
('1000', 'Laskar Pelangi', 'Andrea', 'Bentang', '2005', '535-534-laskar pelangi.jpg'),
('1100', 'Tentang Kamu', 'Tere Liye', 'Republika', '2016', '797-Tentang_kamu.jpg'),
('1200', 'PERGI', 'Tere Liye', 'Republika', '2018', '862-Pergi.jpg'),
('2000', 'Sang Pemimpi', 'Andrea', 'Bentang', '2006', '464-Sang_Pemimpi.jpg'),
('2100', 'DILAN', 'Pidi', 'Pastel', '2014', '479-DIlan.jpg'),
('2200', 'MILEA', 'Pidi', 'Pastel', '2016', '9-Milea.jpg'),
('3100', '5cm', 'Donny Dhirgantoro', 'Grasindo', '2005', '634-5cm.jpg'),
('4100', 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', '2003', '551-Perahu_kertas.jpg'),
('5100', 'Garis Waktu', 'Fiersa Besari', 'Media Kita', '2016', '977-garis waktu.jpg'),
('5200', 'Arah Langkah', 'Fiersa Besari', 'Media Kita', '2018', '738-arah langkah.jpg'),
('6100', 'Ikhlas Paling Serius', 'Fajar Sulaiman', 'Media Kita', '2021', '106-ikhlas-paling-serius.jpg'),
('6200', 'Sabar Paling Dalam', 'Fajar Sulaiman', 'Media Kita', '2021', '78-Sabar Paling Dalam.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_peminjaman`
--

CREATE TABLE `tabel_peminjaman` (
  `kode_peminjaman` varchar(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `kode_buku` varchar(15) NOT NULL,
  `nim` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_peminjaman`
--

INSERT INTO `tabel_peminjaman` (`kode_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `kode_buku`, `nim`) VALUES
('100', '2022-01-01', '2022-01-03', '1001', '2403'),
('1001', '2022-04-23', '2022-04-26', '5100', '2406'),
('1011', '2022-04-24', '2022-04-27', '5200', '3080'),
('1012', '2022-06-03', '2022-06-06', '3100', '1510'),
('1013', '2022-06-12', '2022-06-15', '4100', '2104'),
('1014', '2022-07-22', '2022-07-25', '5200', '2106'),
('1015', '2022-08-07', '2022-08-10', '5100', '2403'),
('200', '2022-02-04', '2022-02-07', '2000', '4090'),
('300', '2022-02-04', '2022-02-07', '1000', '4090'),
('400', '2022-02-08', '2022-02-11', '1100', '1311'),
('500', '2022-02-19', '2022-02-22', '1200', '2106'),
('600', '2022-02-21', '2022-02-24', '2200', '2911'),
('700', '2022-03-02', '2022-03-05', '1200', '5100'),
('800', '2022-04-05', '2022-04-08', '3100', '2911'),
('900', '2022-04-09', '2022-04-12', '4100', '3080');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `no_hp_petugas` char(15) DEFAULT NULL,
  `login_terakhir` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_petugas`, `no_hp_petugas`, `login_terakhir`) VALUES
('admin', '$2y$10$rWiuvhBTi3uvj77xNlnbkOZbEOWQj7jRcVqBYy9ziw6SpjzOIGJla', 'admin', NULL, '2023-11-27 05:05:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indeks untuk tabel `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD PRIMARY KEY (`kode_peminjaman`),
  ADD KEY `kode_buku` (`kode_buku`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
