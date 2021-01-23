-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 18.12
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cops`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `akses`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'coba', '202cb962ac59075b964b07152d234b70', 'user'),
(3, 'coba2', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'coba3', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'doni', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_berita`
--

CREATE TABLE `data_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_berita`
--

INSERT INTO `data_berita` (`id_berita`, `judul_berita`, `isi_berita`) VALUES
(1, 'Ini adalah berita satu', '<p>abc</p>\r\n<p>saatnya</p>\r\n<p>aku</p>'),
(2, 'test2', 'def'),
(3, 'test3', 'abcdefghijklmnopqrstu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peserta`
--

CREATE TABLE `data_peserta` (
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `hp` text NOT NULL,
  `foto` text NOT NULL,
  `kelamin` text NOT NULL,
  `skor_kesehatan` int(11) NOT NULL,
  `skor_psikotest` int(11) NOT NULL,
  `skor_tpa` int(11) NOT NULL,
  `skor_fisik` int(11) NOT NULL,
  `skor_total` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_peserta`
--

INSERT INTO `data_peserta` (`nama`, `username`, `id_user`, `alamat`, `hp`, `foto`, `kelamin`, `skor_kesehatan`, `skor_psikotest`, `skor_tpa`, `skor_fisik`, `skor_total`, `keterangan`) VALUES
('Coba', 'coba', 2, 'ABC', '0812345', 'gambar/pamunqkas_94419650_166409528191424_5101485317151165621_n.jpg', '', 90, 95, 88, 87, 360, 1),
('Coba2', 'coba2', 3, 'CDE', '0812', 'gambar/default.png', 'Pria', 0, 0, 0, 0, 0, 0),
('Coba3', 'coba3', 4, '123', '089', 'gambar/default.png', 'Wanita', 0, 0, 0, 0, 0, 0),
('Doni', 'doni', 5, 'Solo', '081', 'gambar/pamunqkas_94419650_166409528191424_5101485317151165621_n.jpg', 'Pria', 95, 90, 95, 90, 370, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `data_berita`
--
ALTER TABLE `data_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_berita`
--
ALTER TABLE `data_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD CONSTRAINT `data_peserta_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
