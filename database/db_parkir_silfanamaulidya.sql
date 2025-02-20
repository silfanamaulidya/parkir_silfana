-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2025 at 01:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir_silfanamaulidya`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `plat_no` varchar(11) NOT NULL,
  `merk` varchar(4) DEFAULT NULL,
  `jenis_kendaraan` varchar(5) DEFAULT NULL,
  `id_parkir` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`plat_no`, `merk`, `jenis_kendaraan`, `id_parkir`) VALUES
('B 123', 'mio', 'motor', 'p29'),
('C 456', 'beat', 'motor', 'p29'),
('D 789', 'brio', 'mobil', 'p29'),
('F 101', 'pcx', 'motor', 'p29'),
('G 102', 'ayla', 'mobil', 'p29');

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` varchar(8) NOT NULL,
  `lokasi` varchar(9) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `lokasi`, `harga`) VALUES
('j25', 'borma', '3000'),
('l28', 'mall', '3000'),
('m27', 'pujasera', '2000'),
('n26', 'kampus 2', '2000'),
('p29', 'kampus 1', '2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`plat_no`),
  ADD KEY `id_parkir` (`id_parkir`),
  ADD KEY `id_parkir_2` (`id_parkir`),
  ADD KEY `id_parkir_3` (`id_parkir`);

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
