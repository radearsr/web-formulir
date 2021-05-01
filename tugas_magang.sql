-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 01:02 AM
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
-- Table structure for table `center_table`
--

CREATE TABLE `center_table` (
  `main_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemohon` int(11) NOT NULL,
  `id_penanggung` int(11) NOT NULL,
  `id_ttd` int(11) NOT NULL,
  `id_spek_server` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `center_table`
--

INSERT INTO `center_table` (`main_id`, `tanggal`, `id_pemohon`, `id_penanggung`, `id_ttd`, `id_spek_server`) VALUES
(128, '2021-04-30', 126, 126, 126, 129);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dinas`
--

CREATE TABLE `daftar_dinas` (
  `id` int(11) NOT NULL,
  `nama_dinas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_dinas`
--

INSERT INTO `daftar_dinas` (`id`, `nama_dinas`) VALUES
(21, 'gttt5tttt');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemohon`
--

CREATE TABLE `data_pemohon` (
  `id` int(11) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pemohon`
--

INSERT INTO `data_pemohon` (`id`, `opd`, `bidang`, `alamat`, `telp`, `email`) VALUES
(126, 'Sekretariat Daerah Kabupaten Madiun', 'dsadsa', 'JL.Pemuda Pawlawan', '028293837387338339', 'fino.kinotom@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_penanggung`
--

CREATE TABLE `data_penanggung` (
  `id` int(11) NOT NULL,
  `nmAdmin` varchar(255) NOT NULL,
  `nipAdmin` varchar(255) NOT NULL,
  `jbtAdmin` varchar(255) NOT NULL,
  `mailAdmin` varchar(255) NOT NULL,
  `telpAdmin` text NOT NULL,
  `nmTeknis` varchar(255) NOT NULL,
  `nipTeknis` varchar(255) NOT NULL,
  `jbtTeknis` varchar(255) NOT NULL,
  `mailTeknis` varchar(255) NOT NULL,
  `telpTeknis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penanggung`
--

INSERT INTO `data_penanggung` (`id`, `nmAdmin`, `nipAdmin`, `jbtAdmin`, `mailAdmin`, `telpAdmin`, `nmTeknis`, `nipTeknis`, `jbtTeknis`, `mailTeknis`, `telpTeknis`) VALUES
(126, 'Radea ', '242121412412412', 'Senior Software Engineer', 'radea.surya@gmail.com', '07775427282527', 'Surya', '322424242098008', 'Junior Software Engineer', 'surya.dita@gmail.com', '087462545273434567');

-- --------------------------------------------------------

--
-- Table structure for table `data_ttd`
--

CREATE TABLE `data_ttd` (
  `id` int(11) NOT NULL,
  `nm_terang1` varchar(255) NOT NULL,
  `nip_ttd1` varchar(255) NOT NULL,
  `nm_terang2` varchar(255) NOT NULL,
  `nip_ttd2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ttd`
--

INSERT INTO `data_ttd` (`id`, `nm_terang1`, `nip_ttd1`, `nm_terang2`, `nip_ttd2`) VALUES
(126, 'Darena', '21323232000932', 'dasdas', '131310088320213');

-- --------------------------------------------------------

--
-- Table structure for table `spek_server`
--

CREATE TABLE `spek_server` (
  `id_spek` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `ram` bigint(100) NOT NULL,
  `hdd` bigint(100) NOT NULL,
  `psu` bigint(100) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `proc` varchar(255) NOT NULL,
  `core` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `sn` varchar(255) NOT NULL,
  `app_server` text NOT NULL,
  `des_server` text NOT NULL,
  `id_spek_server2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spek_server`
--

INSERT INTO `spek_server` (`id_spek`, `merk`, `ram`, `hdd`, `psu`, `tipe`, `proc`, `core`, `os`, `sn`, `app_server`, `des_server`, `id_spek_server2`) VALUES
(129, 'Asus X-10WR', 10000, 10000, 5000, 'IBM', 'i5 Gen 5', '16', 'Win 10, Debian, Ubuntu', 'asdf', 'dasdsa', 'dasdasdas', 58);

-- --------------------------------------------------------

--
-- Table structure for table `spek_server_2`
--

CREATE TABLE `spek_server_2` (
  `id_spek_2` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `ram` bigint(100) NOT NULL,
  `hdd` bigint(100) NOT NULL,
  `psu` bigint(100) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `proc` varchar(255) NOT NULL,
  `core` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `sn` varchar(255) NOT NULL,
  `app_server` text NOT NULL,
  `des_server` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spek_server_2`
--

INSERT INTO `spek_server_2` (`id_spek_2`, `merk`, `ram`, `hdd`, `psu`, `tipe`, `proc`, `core`, `os`, `sn`, `app_server`, `des_server`) VALUES
(41, 'Dell E6410', 5000, 5000, 5000, 'Legionare', 'Core i7 Gen 10', '12', 'Mac OS', 'ASDF', '5000', '5000'),
(42, 'Dell E6410', 1213131, 313131, 31313131, 'Legionare', 'Core i7 Gen 10', '12', 'Mac OS', 'ASDF', 'Ubuntu, Parrot OS, Kali Linux', 'Ubuntu, Parrot OS, Kali Linux'),
(43, 'Dell E6410', 12000, 12000, 12000, 'Legionare', 'i7', '12', 'Mac OS', 'ASDF', '12000', '12000'),
(58, 'dsadasd', 312312312, 321321312, 3123123, '312312312', 'Core i7 Gen 10', '12', 'Mac OS', 'ASDF', 'ASDF', 'ASDF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center_table`
--
ALTER TABLE `center_table`
  ADD PRIMARY KEY (`main_id`),
  ADD KEY `id_administratif` (`id_penanggung`),
  ADD KEY `id_pemohon` (`id_pemohon`),
  ADD KEY `center_table_ibfk_3` (`id_ttd`),
  ADD KEY `center_table_ibfk_4` (`id_spek_server`);

--
-- Indexes for table `daftar_dinas`
--
ALTER TABLE `daftar_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penanggung`
--
ALTER TABLE `data_penanggung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ttd`
--
ALTER TABLE `data_ttd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spek_server`
--
ALTER TABLE `spek_server`
  ADD PRIMARY KEY (`id_spek`),
  ADD KEY `id_spek_server2` (`id_spek_server2`);

--
-- Indexes for table `spek_server_2`
--
ALTER TABLE `spek_server_2`
  ADD PRIMARY KEY (`id_spek_2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `center_table`
--
ALTER TABLE `center_table`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `daftar_dinas`
--
ALTER TABLE `daftar_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `data_penanggung`
--
ALTER TABLE `data_penanggung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `data_ttd`
--
ALTER TABLE `data_ttd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `spek_server`
--
ALTER TABLE `spek_server`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `spek_server_2`
--
ALTER TABLE `spek_server_2`
  MODIFY `id_spek_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `center_table`
--
ALTER TABLE `center_table`
  ADD CONSTRAINT `center_table_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `data_pemohon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `center_table_ibfk_2` FOREIGN KEY (`id_penanggung`) REFERENCES `data_penanggung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `center_table_ibfk_3` FOREIGN KEY (`id_ttd`) REFERENCES `data_ttd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `center_table_ibfk_4` FOREIGN KEY (`id_spek_server`) REFERENCES `spek_server` (`id_spek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spek_server`
--
ALTER TABLE `spek_server`
  ADD CONSTRAINT `spek_server_ibfk_1` FOREIGN KEY (`id_spek_server2`) REFERENCES `spek_server_2` (`id_spek_2`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
