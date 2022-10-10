-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 03:06 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_b_203040102`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `jdl_buku` varchar(256) NOT NULL,
  `penulis` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `jdl_buku`, `penulis`) VALUES
(1, 'laskar.jpg', 'LASKAR PELANGI', 'ANDREA HIRATA'),
(2, 'cinta.jpg', 'CINTA BRONTOSAURUS', 'RADITYA DIKA'),
(3, 'dahlan.jpg', 'SEPATU DAHLAN', 'KHRISNA PABICHARA'),
(4, 'nathan.jpg', 'DEAR NATHAN', 'ERISCA FEBRIANTI'),
(5, 'tanda.jpg', 'jika kamu menjadi tanda tambah', 'Trista Speed Shaskan'),
(6, 'pierre.jpg', 'Pierre', 'Gustavo Mazali'),
(7, 'dilan.jpg', 'Dilan', 'Pidi Baiq'),
(8, 'garisWaktu.jpg', 'Garis Waktu', 'Fiersa Besari'),
(9, 'onePiece.jpg', 'One Piece', 'Eiichiro Oda'),
(10, 'beruang.jpg', 'Beruang kutub dan panda', 'Aura Natzwa Wijayanti');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Agung Septiana', '203040102', '203040102@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'Reza Marchyana', '203040079', '203040079@mail.unpas.ac.id', 'Teknik Informatika'),
(3, 'Yudha Permana', '203040101', '203040101@mail.unpas.ac.id', 'Teknik Informatika'),
(4, 'Cai Lin', '203020102', '203020102@mail.unpas.ac.id', 'Teknik Pangan'),
(5, 'Yun Zhi', '203010001', '203010001@mail.unpas.ac.id', 'Teknik Industri\r\n'),
(6, 'Xiao Xun\'er', '203060070', '203060070@mail.unpas.ac.id', 'Teknik Perencanaan Wilayah dan Kota'),
(7, 'Yao Ye', '203050071', '203050071@mail.unpas.ac.id', 'Teknik Lingkungan'),
(10, 'Xiao Yan', '203030060', '203030060@mail.unpas.ac.id', 'Teknik Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'agung', '12345'),
(2, 'ags', '$2y$10$S48Iifh3mY76klfMemigK.LdJzFObSIeyM7hJNiAQxr9BPoXrKpva'),
(3, 'septiana', '$2y$10$.QYrZ/EOIQ9s8brqWMaq2e6PchDIfWb4yEsh9IAFOQE1DUvM/9TRa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
