-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 04:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-tak`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idevent` int(64) NOT NULL,
  `iduser` int(64) NOT NULL,
  `namaEvent` varchar(64) NOT NULL,
  `Browsur` varchar(255) NOT NULL,
  `Penyelenggara` varchar(64) NOT NULL,
  `deskripsiEvent` varchar(64) NOT NULL,
  `tanggalMulai` date NOT NULL,
  `tanggalDeadline` date NOT NULL,
  `LamaWaktu` int(255) NOT NULL,
  `Lokasi` varchar(255) NOT NULL,
  `Fakultas` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(64) NOT NULL,
  `idEO` int(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Nama` varchar(64) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usereo`
--

CREATE TABLE `usereo` (
  `id` int(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `fakultas` varchar(64) NOT NULL,
  `prodi` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usereo`
--

INSERT INTO `usereo` (`id`, `username`, `password`, `nama`, `status`, `fakultas`, `prodi`, `email`, `role`) VALUES
(1, 'rafifihdhar', '123456', 'Rafif Ihdhar Milzam', 'Mahasiswa', 'Informatika', 'Informatika', 'Rafifihdhar@student.telkomuniversity.ac.id', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idkomentar`);

--
-- Indexes for table `usereo`
--
ALTER TABLE `usereo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usereo`
--
ALTER TABLE `usereo`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
