-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Jul 2022 pada 07.41
-- Versi server: 5.7.24
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joki_sikos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kos`
--

CREATE TABLE `tbl_kos` (
  `kos_id` int(11) NOT NULL,
  `kos_nama` varchar(120) NOT NULL,
  `kos_jenis` enum('Pria','Wanita','Campur') NOT NULL,
  `kos_harga` char(10) NOT NULL,
  `kos_alamat` varchar(255) NOT NULL,
  `kos_diskripsi` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `kos_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kos`
--

INSERT INTO `tbl_kos` (`kos_id`, `kos_nama`, `kos_jenis`, `kos_harga`, `kos_alamat`, `kos_diskripsi`, `user_id`, `kos_gambar`) VALUES
(37, 'Kos Haji Zubair', 'Pria', '900000', 'Jl.Kemuning No 14, Kec Rumbai, Kota Pekanbaru', 'Kamar ada balkon, Kamar mandi dalam, shower, air panas, closet duduk, tempat tidur ukuran queen size, lemari, AC\r\n', 2, 'koshajizubair.jpg'),
(38, 'Kos Haji Zubair', 'Pria', '900000', 'Jl.Kemuning No 14, Kec Rumbai, Kota Pekanbaru', 'Kamar ada balkon, Kamar mandi dalam, shower, air panas, closet duduk, tempat tidur ukuran queen size, lemari, AC\r\n', 2, 'koshajizubair.jpg'),
(39, 'Kos Haji Zubair', 'Pria', '900000', 'Jl.Kemuning No 14, Kec Rumbai, Kota Pekanbaru', 'Kamar ada balkon, Kamar mandi dalam, shower, air panas, closet duduk, tempat tidur ukuran queen size, lemari, AC\r\n', 2, 'koshajizubair.jpg'),
(40, 'Kos Haji Zubair', 'Pria', '900000', 'Jl.Kemuning No 14, Kec Rumbai, Kota Pekanbaru', 'Kamar ada balkon, Kamar mandi dalam, shower, air panas, closet duduk, tempat tidur ukuran queen size, lemari, AC\r\n', 2, 'koshajizubair.jpg'),
(41, 'Kos Haji Zubair', 'Pria', '900000', 'Jl.Kemuning No 14, Kec Rumbai, Kota Pekanbaru', 'Kamar ada balkon, Kamar mandi dalam, shower, air panas, closet duduk, tempat tidur ukuran queen size, lemari, AC\r\n', 2, 'koshajizubair.jpg'),
(42, 'Kos Haji Zubair', 'Pria', '900000', 'Jl.Kemuning No 14, Kec Rumbai, Kota Pekanbaru', 'Kamar ada balkon, Kamar mandi dalam, shower, air panas, closet duduk, tempat tidur ukuran queen size, lemari, AC\r\n', 2, 'koshajizubair.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kos_id` int(11) NOT NULL,
  `review_tanggal` varchar(20) NOT NULL,
  `review_commend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(120) NOT NULL,
  `user_email` varchar(120) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_wa` char(13) NOT NULL,
  `user_type` enum('admin','pemilik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_email`, `user_password`, `user_wa`, `user_type`) VALUES
(2, 'Ahmad Zubair', 'zubair@gmail.com', '$2a$12$gVrD4Gp42hdU5ofj00d3reHNROP6G4gQpL99UL9cSnJ7TczDJqtpK', '6281388172629', 'pemilik'),
(3, 'Nandez', 'nandez@gmail.com', '$2a$12$gVrD4Gp42hdU5ofj00d3reHNROP6G4gQpL99UL9cSnJ7TczDJqtpK', '6281388172629', 'admin'),
(4, 'Hari Kurniawan', 'hari@gmail.com', '$2y$10$lTuu7X7uQqws7kP4VxDo7uzdAdGdLhcwM8PitmMvN.5ltdgUVoyzu', '094389034743', 'pemilik'),
(5, 'Dion Hermawan', 'dionsastro@gmail.com', '$2y$10$pa/g.RjnPULUaY9rYc8G.eqrXsxUXni5xPwX42gr4DrZMsC6dQvvW', '0846754389434', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kos`
--
ALTER TABLE `tbl_kos`
  ADD PRIMARY KEY (`kos_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `tbl_review_ibfk_1` (`user_id`),
  ADD KEY `tbl_review_ibfk_2` (`kos_id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kos`
--
ALTER TABLE `tbl_kos`
  MODIFY `kos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_kos`
--
ALTER TABLE `tbl_kos`
  ADD CONSTRAINT `tbl_kos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `tbl_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_review_ibfk_2` FOREIGN KEY (`kos_id`) REFERENCES `tbl_kos` (`kos_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
