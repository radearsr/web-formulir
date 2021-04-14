-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 02:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_print`
--

CREATE TABLE `data_print` (
  `id` int(11) NOT NULL,
  `no` varchar(30) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `opd` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `firstTelp` text NOT NULL,
  `firstMail` varchar(100) NOT NULL,
  `nmAdmin` varchar(100) NOT NULL,
  `nipAdmin` varchar(100) NOT NULL,
  `jbtAdmin` varchar(100) NOT NULL,
  `mailAdmin` varchar(100) NOT NULL,
  `telpAdmin` text NOT NULL,
  `nmTeknis` varchar(100) NOT NULL,
  `nipTeknis` varchar(100) NOT NULL,
  `jbtTeknis` varchar(100) NOT NULL,
  `mailTeknis` varchar(100) NOT NULL,
  `telpTeknis` text NOT NULL,
  `merk` varchar(100) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `hdd` varchar(20) NOT NULL,
  `psu` varchar(20) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `proc` varchar(100) NOT NULL,
  `core` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `sn` varchar(100) NOT NULL,
  `appServer` varchar(100) NOT NULL,
  `desServer` text NOT NULL,
  `nmTerang1` varchar(100) NOT NULL,
  `nipTtd1` varchar(100) NOT NULL,
  `nmTerang2` varchar(100) NOT NULL,
  `nipTtd2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_print`
--

INSERT INTO `data_print` (`id`, `no`, `tanggal`, `opd`, `bidang`, `alamat`, `firstTelp`, `firstMail`, `nmAdmin`, `nipAdmin`, `jbtAdmin`, `mailAdmin`, `telpAdmin`, `nmTeknis`, `nipTeknis`, `jbtTeknis`, `mailTeknis`, `telpTeknis`, `merk`, `ram`, `hdd`, `psu`, `tipe`, `proc`, `core`, `os`, `sn`, `appServer`, `desServer`, `nmTerang1`, `nipTtd1`, `nmTerang2`, `nipTtd2`) VALUES
(2, '42412421421412', '0000-00-00', 'asdf', 'Teknik Informatika', 'JL.Pemuda Pawlawan', '028293837387338339', 'fino.kinotom@gmail.com', 'Radea ', '242121412412412', 'Senior Software Engineer', 'radea.surya@gmail.com', '07775427282527', 'Surya', '322424242098008', 'Junior Software Engineer', 'surya.dita@gmail.com', '08746254527', 'Asus X-10WR', '100', '10000', '5000', 'IBM', 'i5 Gen 5', '16', 'Win 10, Debian, Ubuntu', 'asdf', 'Adobe Xd', 'Lisensi Crack', 'Darena', '21323232000932', 'Radea Surya Ramandhita,S.Kom', '131310088320213'),
(3, '1234141414', '0000-00-00', 'asdf', 'Teknik Informatika', 'JL.Pemuda Pawlawan', '028293837387338339', 'fino.kinotom@gmail.com', 'Radea ', '242121412412412', 'Senior Software Engineer', 'radea.surya@gmail.com', '07775427282527', 'Surya', '322424242098008', 'Junior Software Engineer', 'surya.dita@gmail.com', '087462545273434567', 'Asus X-10WR', '12', '12', '21', '21', 'i5 Gen 5', '16', 'Win 10, Debian, Ubuntu', 'asdf', 'eqweqwe', 'qweqweqwewqewqe', 'Darena', '21323232000932', 'Radea Surya Ramandhita,S.Kom', '131310088320213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_print`
--
ALTER TABLE `data_print`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_print`
--
ALTER TABLE `data_print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
