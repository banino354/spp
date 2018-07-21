-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 02:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6551965_banino`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tagihan`
--

CREATE TABLE `kategori_tagihan` (
  `id_kategori` int(11) NOT NULL,
  `nama_bulan` varchar(15) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tagihan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_tagihan`
--

INSERT INTO `kategori_tagihan` (`id_kategori`, `nama_bulan`, `tanggal_buat`, `tagihan`) VALUES
(1, 'juni', '2018-07-18 09:27:56', 1000000),
(2, 'Agustus', '2018-08-16 17:00:00', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no_induk` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no_induk`, `username`, `password`) VALUES
(7, 'fikri', '21232f297a57a5a743894a0e4a801fc3'),
(9, 'fariz', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_induk` int(4) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` int(2) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `alamat` varchar(254) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_induk`, `nama_siswa`, `kelas`, `nama_ortu`, `alamat`, `telepon`) VALUES
(0, 'fatur', 10, 'Paijo', 'Semarang', '098776753343'),
(7, 'fikri', 10, 'Beja', 'Demak', '088884434310'),
(9, 'Fariz', 10, 'Bambang', 'Pekalongan', '08472537426');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `tagihan` double NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `id_kategori`, `no_induk`, `tagihan`, `tanggal_bayar`, `flag`) VALUES
(1, 2, 7, 1000000, '2018-07-03', 1),
(2, 2, 9, 1000000, '2018-07-03', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_tagihan`
--
ALTER TABLE `kategori_tagihan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_tagihan`
--
ALTER TABLE `kategori_tagihan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
