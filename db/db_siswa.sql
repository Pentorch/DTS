-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 03:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jekel` char(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `notelpon` varchar(20) NOT NULL,
  `id_skema` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id`, `nama`, `jekel`, `email`, `notelpon`, `id_skema`, `alamat`) VALUES
(3, 'Ando', 'L', 'wdas', '32', 0, 'dafs'),
(4, 'WillyAgustinoEfendi', 'L', 'willyagustinoefendi12@gmail.com', '02', 0, 'sd'),
(6, 'WillyAgustinoEfendi', 'L', 'dsa', '23', 0, 'ssda'),
(7, 'asf', 'L', 'das', '12', 0, 'sda'),
(8, 'WillyAgustinoEfendi', 'P', 'dsa', '32', 0, 'dsa'),
(9, 'WillyAgustinoEfendi', 'L', 'willyagustinoefendi12@gmail.com', '13', 0, 'das'),
(10, 'WillyAgustinoEfendi', 'L', 'dsa', '12', 0, 'dsa'),
(11, 'WillyAgustinoEfendi', 'L', 'willyagustinoefendi12@gmail.com', '12', 0, 'dsa'),
(12, 'sda', 'L', 'ads', '1', 0, 'ads'),
(13, 'Willy Agustino Efendi', 'L', 'willyagustinoefendi12@gmail.com', '081261701976', 1, '   Lubuk Alung'),
(14, 'Aga', 'L', 'aga12@gmail.com', '0812789909090', 7, ' lubuk alung ');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` char(1) NOT NULL,
  `id_skema` int(11) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jk`, `id_skema`, `umur`, `hobi`, `alamat`) VALUES
(27, 'WillyAgustinoEfendi', 'L', 1, '18', 'Membaca', 'Lubuk Alung'),
(28, 'Ando', 'L', 1, '11', 'Travelling', 'dsda'),
(29, 'fakar', 'L', 1, '11', 'Travelling', 'sda'),
(32, 'Naufal Syzaldandra Y', 'L', 1, '23', 'Travelling', '132'),
(34, 'aga', 'L', 1, '13', 'Travelling', 'dsada'),
(35, 'yusuf', 'L', 1, '12', 'Travelling', 'sad'),
(36, 'sd', 'L', 1, '12', 'Membaca', 'sda'),
(40, 'dsad', 'L', 1, '12', ',Travelling', 'asd'),
(41, 'fsda', 'L', 1, '13', 'Membaca,', 'sda'),
(42, 'dsasda', 'L', 1, '13', 'Membaca,Travelling', 'dsa'),
(43, 'WillyAgustinoEfendi', 'L', 1, '13', '', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE `skema` (
  `id` int(11) NOT NULL,
  `nama_skema` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`id`, `nama_skema`, `keterangan`) VALUES
(1, 'Junior Web Developer', 'JWD'),
(6, 'Junior Mobile Programmer', 'JMP'),
(7, 'Junior Graphic Design', 'JGD'),
(8, 'Junior Network Administrator', 'JNA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `level`) VALUES
('fakar', '1436b728249430f1fd8f0082677cd875', 'fakar@yahoo.com', 'administrator'),
('willy1', 'a65d17c83cb1e040d8a142dd7fe55af2', 'willyagustinoefendi12@gmail.co', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `skema`
--
ALTER TABLE `skema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
