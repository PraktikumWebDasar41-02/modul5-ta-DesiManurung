-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 12:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` int(10) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jenis` text NOT NULL,
  `programstudi` text NOT NULL,
  `fakultas` text NOT NULL,
  `komentar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `email`, `tanggallahir`, `jenis`, `programstudi`, `fakultas`, `komentar`) VALUES
(2147483647, 'Desi J Manurung', 'desimanurung61@gmail.com', '2018-10-04', 'Laki-Laki', 'MI', 'FIT', 'gsdagasjfhbklaerjgbkbdekgb'),
(2147483647, 'Desi J Manurung', 'desimanurung61@gmail.com', '2018-10-05', 'Perempuan', 'MI', 'FIT', 'gsdagasjfhbklaerjgbkbdekgb'),
(2147483647, 'Desi J Manurung', 'desimanurung61@gmail.com', '2018-10-17', 'Perempuan', 'MI', 'FIT', 'gsdagasjfhbklaerjgbkbdekgb'),
(2147483647, 'Desi', 'desimanurung61@gmail.com', '2018-10-04', 'Perempuan', 'MI', 'FIT', 'cantik ya'),
(2147483647, 'Julyanti', 'desimanurung61@gmail.com', '2018-10-04', 'Perempuan', 'MI', 'FIT', 'cantik ya'),
(2147483647, 'Manurung', 'desimanurung61@gmail.com', '2018-10-03', 'Perempuan', 'MI', 'FIT', 'cantik ya'),
(2147483647, 'Julyanti', 'desimanurung61@gmail.com', '2018-10-03', 'Perempuan', 'MI', 'FIT', 'cantik ya'),
(2147483647, 'Desi J Manurung', 'desimanurung61@gmail.com', '2018-10-04', 'Perempuan', 'MI', 'FIT', 'cantik ya'),
(2147483647, 'Desi J Manurung', 'desimanurung61@gmail.com', '2018-10-05', 'Perempuan', 'MI', 'FIT', 'cantik ya'),
(2147483647, 'putri', 'putri@gmail.com', '2018-10-07', 'Perempuan', 'MI', 'FIT', 'gendut ya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
