-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2025 pada 03.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proyek1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `status_pesanan` enum('selesai','pending') NOT NULL,
  `dibuat` datetime NOT NULL,
  `diubah` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_produk`, `nomor_telepon`, `status_pesanan`, `dibuat`, `diubah`, `id_user`) VALUES
(1, 1, '12345678910', 'selesai', '2025-07-30 12:49:02', '2025-07-30 12:49:02', 1),
(2, 1, '10987654321', 'selesai', '2025-07-30 12:50:31', '2025-07-30 12:50:31', 3),
(3, 1, '65', 'selesai', '2025-07-30 12:52:43', '2025-07-30 12:52:43', 3),
(4, 5, '1', 'selesai', '2025-07-30 13:03:53', '2025-07-30 13:03:53', 3),
(5, 3, '111', 'selesai', '2025-07-30 14:26:18', '2025-07-30 14:26:18', 1),
(6, 5, '9', 'selesai', '2025-07-30 14:34:12', '2025-07-30 14:34:12', 1),
(11, 1, '99999999', 'selesai', '2025-08-01 14:42:57', '2025-08-01 14:47:13', 3),
(14, 1, '1111', 'pending', '2025-08-02 06:18:20', '2025-08-02 06:18:20', 3),
(17, 13, '6789012345', 'pending', '2025-08-05 13:01:09', '2025-08-05 13:01:09', 7),
(20, 11, '456098723', 'pending', '2025-10-28 01:52:01', '2025-10-28 01:52:01', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga_produk` int(11) DEFAULT NULL,
  `stok_produk` int(11) DEFAULT NULL,
  `dibuat` datetime DEFAULT NULL,
  `diubah` datetime DEFAULT NULL,
  `provider` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `dibuat`, `diubah`, `provider`, `deskripsi`) VALUES
(1, 'Paket Data 10000', 10000, 5, NULL, '2025-11-11 06:29:32', 'XL', 'Kuota 3GB 3Hari'),
(3, 'Paket Data 6000', 6000, 7, '2025-07-23 13:11:51', '2025-11-11 06:29:25', 'Indosat', 'Kuota 1,5GB 1Hari'),
(5, 'Paket Data 9000', 9000, 8, '2025-07-24 03:54:06', '2025-11-11 06:29:49', 'Telkomsel', 'Kuota 1,5GB 3Hari'),
(11, 'Paket Data 8000', 8000, 10, '2025-08-01 10:21:24', '2025-11-11 06:29:57', 'Axis', 'Kuota 2,5GB 1Hari'),
(12, 'Paket Data 9500', 9500, 10, '2025-08-01 10:22:30', '2025-11-11 06:30:05', 'Smartfren', 'Kuota 2GB 3Hari'),
(13, 'Paket Data 10000', 10000, 10, '2025-08-01 10:23:50', '2025-11-11 06:30:13', 'Tri', 'Kuota 5GB 30Hari'),
(15, 'Paket Data 7000', 7000, 0, '2025-08-01 15:11:30', '2025-11-11 06:30:22', 'XL', 'Kuota'),
(16, 'Paket Data 8000', 8000, 3, '2025-11-11 06:16:01', '2025-11-11 06:16:01', 'Telkomsel', 'Paket Data 2GB 2Hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `role`) VALUES
(1, 'FATIMAH FITRI HUTAJULU', 'fatimahtjl', '$2y$10$qQgUePf6TVHAmoCX3DGOUOeBI6BLsFvDKWLGQhRdHk9TF.mdGCWNq', 'user'),
(3, 'Revania Zahrani', 'reaaa', '$2y$10$L98Lfu6O.3Ujv4M3.lB2WuHPGMWWPv7srSIWawQfmUg6eMAzjroyu', 'user'),
(5, 'Admin', 'Admin', '$2y$10$BNEa3BCEbDBmm9Uf7x3feee4zLcxI9XSBb9K6rPRqmeloq9OsN5Qu', 'admin'),
(6, 'Rashifa Azkiya', 'kiaaa', '$2y$10$VIqLwTsp5zcmAMiGEEt7n.YOZWb8bqUKzzVB6nq5AT6vudCXwV.8S', 'user'),
(7, 'Aisyah Riyadhul', 'inong', '$2y$10$P0Obxo4/kFfpxDN2SIFWI.Ca5EWlDla9uuIxcPpOY3rrLht4xxxCq', 'user'),
(8, 'Zidan Hairra Ramadhan ', 'zidan', '$2y$10$/GeYFKn2okf7Kxtwf01UC.Gzvmunv6kD.tqEfdiCbJrpc8jGRr3Mu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_produk` (`id_produk`),
  ADD KEY `fk_tb_user` (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `fk_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
