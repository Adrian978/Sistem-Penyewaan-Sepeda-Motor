-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 06.40
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `kode_motor` int(10) NOT NULL,
  `nm_motor` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `thn_buat` varchar(10) NOT NULL,
  `model` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nm_motor` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `penyewaan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `penyewaan` (
`nama` varchar(50)
,`nm_motor` varchar(50)
,`merk` varchar(50)
,`alamat` varchar(50)
,`no_npwp` varchar(30)
,`tgl_sewa` date
,`tgl_kembali` date
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(10) NOT NULL,
  `no_npwp` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jml_motor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `no_sewa` int(10) NOT NULL,
  `jenis_motor` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `denda` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_pinjam`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_pinjam` (
`nama` varchar(50)
,`nm_motor` varchar(50)
,`jenis_motor` varchar(50)
,`merk` varchar(50)
,`biaya` varchar(50)
,`denda` varchar(10)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `penyewaan`
--
DROP TABLE IF EXISTS `penyewaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `penyewaan`  AS SELECT `a`.`nama` AS `nama`, `d`.`nm_motor` AS `nm_motor`, `d`.`merk` AS `merk`, `a`.`alamat` AS `alamat`, `b`.`no_npwp` AS `no_npwp`, `c`.`tgl_sewa` AS `tgl_sewa`, `c`.`tgl_kembali` AS `tgl_kembali` FROM (((`pelanggan` `a` join `rental` `b` on(`a`.`nama` = `b`.`nama`)) join `sewa` `c` on(`a`.`id_pelanggan` = `c`.`no_sewa`)) join `motor` `d` on(`a`.`id_pelanggan` = `d`.`kode_motor`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pinjam`
--
DROP TABLE IF EXISTS `view_pinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pinjam`  AS SELECT `a`.`nama` AS `nama`, `b`.`nm_motor` AS `nm_motor`, `c`.`jenis_motor` AS `jenis_motor`, `b`.`merk` AS `merk`, `c`.`biaya` AS `biaya`, `c`.`denda` AS `denda` FROM ((`pelanggan` `a` join `sewa` `c` on(`a`.`id_pelanggan` = `c`.`no_sewa`)) join `motor` `b` on(`a`.`id_pelanggan` = `b`.`kode_motor`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`kode_motor`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`no_sewa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
