-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 04:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_logistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `kode_anggota` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` int(12) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`kode_anggota`, `nama`, `nim`, `jurusan`, `kelas`, `telp`) VALUES
('A001', 'Andi purnomo', 1805005, 'TI', 'A', '082217461498');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(10) NOT NULL,
  `gambar_barang` varchar(1) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `gambar_barang`, `nama_barang`, `status`) VALUES
('B001', '', 'Proyektor', 'Tersedia'),
('B002', '', 'Kabel VGA', 'Tersedia'),
('B003', '', 'Sound System', 'Tidak Tersedia'),
('B004', '', 'Mic', 'Tidak Tersedia'),
('B005', '', 'Megaphone', 'Tersedia'),
('B006', '', 'HT', 'Tidak Tersedia'),
('B007', '', 'HS', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `kode_peminjaman` varchar(12) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `kode_anggota` varchar(12) NOT NULL,
  `t_pinjam` date NOT NULL,
  `telp` varchar(12) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`kode_peminjaman`, `kode_barang`, `kode_anggota`, `t_pinjam`, `telp`, `status`) VALUES
('', 'Proyektor', '', '2019-12-01', '082217461498', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `kode_pengembalian` varchar(10) NOT NULL,
  `kode_ppinjam` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengembalian`
--

INSERT INTO `tb_pengembalian` (`kode_pengembalian`, `kode_ppinjam`, `status`) VALUES
('PB001', 'PP001', 'Belum di Kembalikan'),
('PB002', 'PP002', 'Di Kembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `nama`, `username`, `password`, `level`) VALUES
('U001', 'Fauzi', 'fauzi', '123456', 'admin'),
('U002', 'Lilyan', 'lilyan', '123456', 'admin'),
('U003', 'Andi', 'andi', '123456', 'admin'),
('U004', 'Yoga', 'yoga', '123456', 'user'),
('U005', 'Wahyu', 'wahyu', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`kode_anggota`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`kode_peminjaman`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_anggota` (`kode_anggota`);

--
-- Indexes for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD PRIMARY KEY (`kode_pengembalian`),
  ADD KEY `kode_pinjam` (`kode_ppinjam`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
