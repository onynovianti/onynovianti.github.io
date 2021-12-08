-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 02:45 PM
-- Server version: 10.5.9-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikumdb`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS praktikumdb;
--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS siswa;
CREATE TABLE `siswa` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenisKelamin` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `namaOrtu` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `asalSekolah` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no`, `nama`, `jenisKelamin`, `tempat`, `tanggal`, `namaOrtu`, `alamat`, `kota`, `asalSekolah`, `agama`, `status`) VALUES
(123, 'ony novianti', 'P', 'malang', '2001-11-26', 'Dwi', 'Jl. Suto Wijoyo', 'Malang', 'SMK Brantas Karangkates', 'Islam', 1),
(124, 'Nanda Setiawan', 'L', 'Surabaya', '2001-12-12', 'Slamet', 'Jl. Soekarno', 'Surabaya', 'SMK Brantas Karangkates', 'Islam', 1),
(125, 'Diah Rahmawati', 'P', 'Malang', '2001-09-29', 'Poniman', 'Jl. Raya Slorok', 'Malang', 'SMK Brantas Karangkates', 'Islam', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no`);
COMMIT;

--
-- Table structure for table `usersekolah`
--
DROP TABLE IF EXISTS usersekolah;
CREATE TABLE `usersekolah` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersekolah`
--

INSERT INTO `usersekolah` (`id`, `username`, `password`, `level`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70', 2),
(2, '124', 'c8ffe9a587b126f152ed3d89a146b445', 2),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(6, '125', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(9, '125', 'b1980b34d5180cf2051d0fe400cb86e0', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersekolah`
--
ALTER TABLE `usersekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersekolah`
--
ALTER TABLE `usersekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
