-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Apr 2018 pada 21.58
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(30) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `foto` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nm_barang`, `harga_beli`, `harga_jual`, `stok`, `foto`) VALUES
(14, 'PENSIL', 11000, 12000, 12, 'uploadfoto20180404213401.jpeg'),
(15, 'BUKU DIARY', 10000, 15000, 4, 'uploadfoto20180404213113Buku diary.jpeg'),
(16, 'FLASHDISK', 50000, 70000, 15, 'uploadfoto20180404213549Flashdisk.jpeg'),
(17, 'PENGGARIS', 1000, 2000, 30, 'uploadfoto20180404213655Penggaris.jpeg'),
(18, 'PULPEN', 15000, 25000, 4, 'uploadfoto20180404213804Pulpen.jpeg'),
(19, 'TAS KECIL', 80000, 120000, 5, 'uploadfoto20180404213931Tas kecil.jpeg'),
(20, 'TAS LAPTOP', 200000, 250000, 7, 'uploadfoto20180404214008Tas laptop.jpeg'),
(21, 'DOMPET KULIT', 100000, 175000, 5, 'uploadfoto20180404214138Dompet Kulit.jpeg'),
(22, 'JAKET', 200000, 350000, 8, 'uploadfoto20180404214248Jaket.jpeg'),
(23, 'JERSEY LIVERPOOL', 75000, 120000, 10, 'uploadfoto20180404214327Jersey Liverpool.jpeg'),
(24, 'SEPATU', 120000, 150000, 5, 'uploadfoto20180404214433sepatu.jpeg'),
(25, 'SEPATU FUTSAL', 320000, 420000, 3, 'uploadfoto20180404214559Sepatu Futsal.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `akses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`, `akses`) VALUES
(2, 'dori achmad', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 2),
(5, 'superadmin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin super', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
