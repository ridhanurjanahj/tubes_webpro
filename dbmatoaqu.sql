-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2019 pada 17.42
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmatoaqu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(64) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
(1, 'admin', 1234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsletter`
--

CREATE TABLE `newsletter` (
  `id_newsletter` varchar(64) NOT NULL,
  `name_newsletter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `newsletter`
--

INSERT INTO `newsletter` (`id_newsletter`, `name_newsletter`) VALUES
('5', 'sdfsf'),
('5de254eb06b42', 'fdgd'),
('5de254ee45c3b', 'safa'),
('5de254f544158', 'fgfh'),
('5de2550c6b7c0', 'lutasdfisirajs@mail.com'),
('5de2555219a62', 'lutasdfisirajs@mail.com'),
('5de2557d2fda9', 'wakwawaw'),
('5de255b2d81c9', 'zakiya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
('5de280218420b', 'SINGO MAPLE', 1580000, '5de280218420b.png', 'IDR 1.106.000'),
('5de2827166050', 'Singo Ebony', 1580000, '5de2827166050.png', 'IDR 1.106.000'),
('5de282c1aeebd', 'Way Kambas Mini Ebony', 1280000, '5de282c1aeebd.png', 'IDR 960.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokomatoa_ind`
--

CREATE TABLE `tokomatoa_ind` (
  `id_toko` varchar(64) NOT NULL,
  `kota_toko` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `gambar_toko` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `telp_toko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tokomatoa_ind`
--

INSERT INTO `tokomatoa_ind` (`id_toko`, `kota_toko`, `nama_toko`, `alamat_toko`, `gambar_toko`, `telp_toko`) VALUES
('5de28c2a8f1de', 'Bandung', 'Matoa House', 'Jl. Setrasari Kulon III No.10-12 Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152', '5de28c2a8f1de.jpg', 2147483647),
('5de29a63b3e97', 'Bandung', 'Paris Van Java', 'GL-D-08 Jalan Sukajadi No. 131-139, Cipedes, Sukajadi Jawa Barat', '5de29a63b3e97.png', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_newsletter`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `tokomatoa_ind`
--
ALTER TABLE `tokomatoa_ind`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
