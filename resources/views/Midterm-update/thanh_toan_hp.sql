-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 05:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thanh_toan_hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `hocphi`
--

CREATE TABLE `hocphi` (
  `mahocphi` varchar(10) NOT NULL,
  `sotiencannop` int(11) NOT NULL,
  `mssv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hocphi`
--

INSERT INTO `hocphi` (`mahocphi`, `sotiencannop`, `mssv`) VALUES
('0001', 10000000, '52000001'),
('0002', 11000000, '52000002'),
('0003', 13000000, '52000003'),
('0004', 11000000, '52000004');

-- --------------------------------------------------------

--
-- Table structure for table `lichsugiaodich`
--

CREATE TABLE `lichsugiaodich` (
  `magiaodich` varchar(10) NOT NULL,
  `ngay` datetime NOT NULL,
  `sotiendanop` int(11) NOT NULL,
  `mssvduocthanhtoan` varchar(50) NOT NULL,
  `mssv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lichsugiaodich`
--

INSERT INTO `lichsugiaodich` (`magiaodich`, `ngay`, `sotiendanop`, `mssvduocthanhtoan`, `mssv`) VALUES
('GD001', '2022-07-21 12:45:56', 15000000, '52000001', '52000001'),
('GD002', '2022-07-21 12:47:56', 12000000, '52000003', '52000002'),
('GD003', '2022-07-21 12:49:56', 10000000, '52000004', '52000004');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` varchar(50) NOT NULL,
  `hoten` longtext NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodukhadung` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `hoten`, `sdt`, `email`, `sodukhadung`, `password`) VALUES
('52000001', 'NGUYỄN VĂN A', '0855577121', 'nguyenvana@gmail.com', 15000000, 'nva121'),
('52000002', 'NGUYỄN VĂN B', '0588877122', 'nguyenvanb@gmail.com', 12000000, 'nvb122'),
('52000003', 'NGUYỄN VĂN C', '0588877123', 'nguyenvanc@gmail.com', 12000000, 'nvb123'),
('52000004', 'NGUYỄN VĂN D', '0588877124', 'nguyenvand@gmail.com', 12000000, 'nvb124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hocphi`
--
ALTER TABLE `hocphi`
  ADD PRIMARY KEY (`mahocphi`),
  ADD KEY `mssv` (`mssv`);

--
-- Indexes for table `lichsugiaodich`
--
ALTER TABLE `lichsugiaodich`
  ADD PRIMARY KEY (`magiaodich`),
  ADD KEY `mssv` (`mssv`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hocphi`
--
ALTER TABLE `hocphi`
  ADD CONSTRAINT `hocphi_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`);

--
-- Constraints for table `lichsugiaodich`
--
ALTER TABLE `lichsugiaodich`
  ADD CONSTRAINT `lichsugiaodich_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
