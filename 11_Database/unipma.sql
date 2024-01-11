-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 03.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unipma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `klinik_kesehatan`
--

CREATE TABLE `klinik_kesehatan` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `tanggal_kunjungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `klinik_kesehatan`
--

INSERT INTO `klinik_kesehatan` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `umur`, `alamat`, `keluhan`, `diagnosis`, `tanggal_kunjungan`) VALUES
(1, 'John Doe', 'Laki-Laki', 35, 'Madiun', 'Sakit kepala', 'Migrain', '2024-01-01'),
(2, 'Jane Doe', 'Perempuan', 28, 'Malang', 'Batuk dan pilek', 'Flu', '2024-01-02'),
(3, 'Bob Smith', 'Laki-Laki', 45, 'Jakarta', 'Nyeri punggung', 'Masalah postur', '2024-01-03'),
(4, 'Alice Johnson', 'Perempuan', 50, 'Semarang', 'Tekanan darah tinggi', 'Hipertensi', '2024-01-04'),
(5, 'Charlie Brown', 'Laki-Laki', 30, 'Pontianak', 'Sakit perut', 'Gangguan pencernaan', '2024-01-05'),
(6, 'wdad', 'Perempuan', 23, 'Solo', '', '', '2024-01-05'),
(7, 'qweqwe', 'Perempuan', 0, 'qweqwe', 'qweqweqwe', '', '2024-01-04'),
(9, 'sre', '', 2323, 'Surabaya', 'dadang', 'dudung', '2024-01-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` text NOT NULL,
  `kelas` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `alamat`, `kelas`) VALUES
(123456, 'Sina', 'Madiun', '1B'),
(1234567, 'Agus', 'Malang', '5A'),
(12345678, 'S', 'Surabaya', '3D'),
(123456, 'Anji', 'Pacitan', '5F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpuskota`
--

CREATE TABLE `perpuskota` (
  `id_peminjaman` int(11) NOT NULL,
  `nama_peminjam` varchar(55) NOT NULL,
  `judul_buku` varchar(55) NOT NULL,
  `tanggal_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perpuskota`
--

INSERT INTO `perpuskota` (`id_peminjaman`, `nama_peminjam`, `judul_buku`, `tanggal_peminjaman`) VALUES
(1, 'Asen', 'Harry Potter', '2024-01-04'),
(2, 'Sasa', 'Bumi Manusia', '2023-12-18'),
(3, 'Karen', 'Kancil', '2023-11-21'),
(4, 'qwsq', 'neri', '0000-00-00'),
(5, '12sq', 'there', '1970-01-01'),
(6, 'we', 'rew', '1970-01-01'),
(7, 'qwsq', 'neri', '1970-01-01'),
(8, 'qwsq', 'there', '0000-00-00'),
(9, '12sq', 'there', '0000-00-00'),
(10, '12sq', 'there', '0000-00-00'),
(11, 'qwsqnet', 'rew', '2024-01-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_motor`
--

CREATE TABLE `service_motor` (
  `id_service` int(11) NOT NULL,
  `jenis_service` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `biaya` int(11) NOT NULL,
  `waktu_pengerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `service_motor`
--

INSERT INTO `service_motor` (`id_service`, `jenis_service`, `deskripsi`, `biaya`, `waktu_pengerjaan`) VALUES
(1, 'Ganti Oli', 'Mengganti oli mesin dan filter oli', 100000, '1 jam'),
(2, 'Tune Up', 'Melakukan penyesuaian dan pembersihan komponen mesin', 150000, '2 jam'),
(3, 'Ganti Busi', 'Mengganti busi mesin', 50000, '30 menit'),
(4, 'Ganti Aki', 'Mengganti aki', 80000, '45 menit'),
(5, 'Perbaikan Rem', 'Perbaikan atau penggantian komponen rem', 120000, '1.5 jam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `klinik_kesehatan`
--
ALTER TABLE `klinik_kesehatan`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `perpuskota`
--
ALTER TABLE `perpuskota`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `service_motor`
--
ALTER TABLE `service_motor`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `klinik_kesehatan`
--
ALTER TABLE `klinik_kesehatan`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `perpuskota`
--
ALTER TABLE `perpuskota`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `service_motor`
--
ALTER TABLE `service_motor`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
