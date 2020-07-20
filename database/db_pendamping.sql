-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2020 pada 18.33
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendamping`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kunjungan`
--

CREATE TABLE `data_kunjungan` (
  `id_kunjungan` int(10) NOT NULL,
  `lansia_id` varchar(50) NOT NULL,
  `tanggal_kunjungan` varchar(25) NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `catatan_kondisi` text NOT NULL,
  `catatan_perubahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kunjungan`
--

INSERT INTO `data_kunjungan` (`id_kunjungan`, `lansia_id`, `tanggal_kunjungan`, `kondisi`, `catatan_kondisi`, `catatan_perubahan`) VALUES
(1, '2', '2020-01-21', 'sehat', 'sudah ampih garing', 'sudah sugih\r\n'),
(2, '2', '2020-01-21', 'sehat', 'kuat', 'siap'),
(3, '10', '2020-01-24', 'sehat', 'sudah ampih garing', 'asasasas'),
(4, '10', '2020-01-24', 'sasas', 'sasas', 'sasasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lansia`
--

CREATE TABLE `data_lansia` (
  `id_lansia` int(10) NOT NULL,
  `id_pendamping` varchar(20) NOT NULL,
  `bdt` varchar(30) NOT NULL,
  `id_wali` varchar(30) NOT NULL,
  `id_rek` varchar(20) NOT NULL,
  `nik_lansia` varchar(16) NOT NULL,
  `nama_lansia` varchar(25) NOT NULL,
  `ttl_lansia` varchar(25) NOT NULL,
  `alamat_lansia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_lansia`
--

INSERT INTO `data_lansia` (`id_lansia`, `id_pendamping`, `bdt`, `id_wali`, `id_rek`, `nik_lansia`, `nama_lansia`, `ttl_lansia`, `alamat_lansia`) VALUES
(10, '1', '111', '2', '4', '11', 'darto', '2020-01-10', 'sasa'),
(11, '1', '22222222', '4', '7', '111222', 'dartoqqq', '2020-01-11', ''),
(12, '1', '323232', '5', '', '32322222', 'dartoqqq', '2020-01-11', ''),
(13, '2', '3213123', '6', '3', '3213213', 'dartoqqqdasdsad', '2020-01-17', 'weeqwewq'),
(14, '2', '111', '0', '5', '11', 'darto', '2020-01-10', 'sasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendamping`
--

CREATE TABLE `data_pendamping` (
  `id_pen` int(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pendamping`
--

INSERT INTO `data_pendamping` (`id_pen`, `nik`, `nama`, `ttl`, `alamat`, `no_hp`) VALUES
(1, '1234567891012345', 'riyan nugrahaaaa', '2019-07-02', 'xxxxx', '081259395993'),
(2, '19216811', 'eddy adha saputra boy', '2020-01-11', 'Banjar Baru Selatan\r\nJL. pandu, guntung paikat, kost berkat utama no 67', '0812743938882'),
(4, '11010101100', 'julak wahyu', '2020-01-09', 'saasazzz', '08111111111111'),
(5, '123', 'SMK tes', '2020-01-03', 'Banjar Baru Selatan\r\nJL. pandu, guntung paikat, kost berkat utama no 67', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rekening`
--

CREATE TABLE `data_rekening` (
  `id_rekening` int(10) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_rekening`
--

INSERT INTO `data_rekening` (`id_rekening`, `nama_bank`, `no_rek`) VALUES
(1, 'BRI', '8765434565434'),
(3, 'BNI', '555'),
(4, 'BNI', '44444'),
(5, 'BRI', '4444'),
(6, 'BNI', '44444'),
(7, 'BNI syariah ok', '111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'julak wahyu', 'admin', 'cb2f44d58a70ba28ef81', 'admin'),
(2, 'SMK tes', '123', '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id_wali` int(11) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `nik_wali` varchar(16) NOT NULL,
  `no_telpon_wali` varchar(15) NOT NULL,
  `alamat_wali` text NOT NULL,
  `ttl_wali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id_wali`, `nama_wali`, `nik_wali`, `no_telpon_wali`, `alamat_wali`, `ttl_wali`) VALUES
(0, '', '', '', '', ''),
(2, 'irfan', '11111111', '0932323232', '', ''),
(4, 'irfan wqqw', '3213123123', '0932323232', '2121', ''),
(5, 'lelak', '66666666', '1212121', '212121', ''),
(6, 'irfanasasa', '12121', '0932323232', 'sasas', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kunjungan`
--
ALTER TABLE `data_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indeks untuk tabel `data_lansia`
--
ALTER TABLE `data_lansia`
  ADD PRIMARY KEY (`id_lansia`);

--
-- Indeks untuk tabel `data_pendamping`
--
ALTER TABLE `data_pendamping`
  ADD PRIMARY KEY (`id_pen`);

--
-- Indeks untuk tabel `data_rekening`
--
ALTER TABLE `data_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kunjungan`
--
ALTER TABLE `data_kunjungan`
  MODIFY `id_kunjungan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_lansia`
--
ALTER TABLE `data_lansia`
  MODIFY `id_lansia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_pendamping`
--
ALTER TABLE `data_pendamping`
  MODIFY `id_pen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
