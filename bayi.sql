-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 10:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayi`
--

CREATE TABLE `bayi` (
  `urut` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `berat` float NOT NULL,
  `tinggi` float NOT NULL,
  `linkar_kepala` float NOT NULL,
  `lingkar_lengan` float NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayi`
--

INSERT INTO `bayi` (`urut`, `nama`, `tgl_lahir`, `kelamin`, `berat`, `tinggi`, `linkar_kepala`, `lingkar_lengan`, `ayah`, `ibu`) VALUES
(4, 'Alvian Nur Wahyudhi', '2019-05-03', 'Pria', 5, 55, 12.3, 6.77, 'bapak', 'susan'),
(5, 'sadsad', '2019-04-04', 'Pria', 7, 62, 70, 70, 'kristian', 'mami');

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `no_urut` int(11) NOT NULL,
  `nilai_tinggi` int(11) NOT NULL,
  `nilai_berat` int(11) NOT NULL,
  `nilai_total` int(11) NOT NULL,
  `juri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tugas` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`, `nama`, `tugas`) VALUES
(1, 'petugas', 'petugas2', 'Siti Badriah', 'admin'),
(2, 'ironman', 'ironman', 'Tony Stark', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayi`
--
ALTER TABLE `bayi`
  ADD PRIMARY KEY (`urut`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD KEY `ikut_lomba` (`no_urut`),
  ADD KEY `juri_penilai` (`juri`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayi`
--
ALTER TABLE `bayi`
  MODIFY `urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `ikut_lomba` FOREIGN KEY (`no_urut`) REFERENCES `bayi` (`urut`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `juri_penilai` FOREIGN KEY (`juri`) REFERENCES `user` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
