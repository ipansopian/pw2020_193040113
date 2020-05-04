-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 20.35
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040113`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukubestseller`
--

CREATE TABLE `bukubestseller` (
  `id` int(11) NOT NULL,
  `No` varchar(50) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Nama Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Tahun Rilis` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukubestseller`
--

INSERT INTO `bukubestseller` (`id`, `No`, `Gambar`, `Nama Buku`, `Pengarang`, `Tahun Rilis`, `Harga`) VALUES
(1, '1', '1.jpg', 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', '2016', 'Rp.59.000'),
(12, '2', '2.jpg', 'Nanti Kita Cerita Tentang Hari Ini (NKCTHI)', 'Marchella FP', '2018', 'Rp.100.000'),
(13, '3', '4.jpg', 'Orang Orang Biasa', 'Andrea Hirata', '2019	', 'Rp.75.000'),
(14, '4', '3.jpg', '11:11', 'Fiersa Besari', '2018', 'Rp.104.000'),
(15, '5', '5.jpg', 'Fate/Grand Order Turas Realta 02	', 'Takeshi Kawaguchi & Type-Moon	', '2017', 'Rp.67.000'),
(16, '6', '6.jpg', 'Komik Muslim Cilik Cintai Masjid', 'DK Wardhani', '2018', 'Rp.160.000'),
(17, '7', '7.jpg', 'Otoritas Hadis Hadis Bermasalah dalam Shahih Al Bu', 'Faiqotul Mala', '2015', 'Rp.69.000'),
(18, '8', '8.jfif', 'Arah Musim', 'Kurniawan Gunadi', '2019', 'Rp.59.000'),
(19, '9', '9.jpg', 'Segala-galanya Ambyar', 'Mark Manson', '2020', 'Rp.70.000'),
(20, '10', '10.jpg', 'Tuhan Maha Asyik 2', 'Sujiwo Tejo & Dr. MN. Kamba', '2020', 'Rp.76.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukubestseller`
--
ALTER TABLE `bukubestseller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukubestseller`
--
ALTER TABLE `bukubestseller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
