-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8899
-- Generation Time: Jan 16, 2021 at 11:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangdia`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `maCD` varchar(25) NOT NULL,
  `maKH` varchar(255) NOT NULL,
  `tenphim` varchar(255) NOT NULL,
  `theloai` varchar(255) NOT NULL,
  `sotap` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluong` int(10) NOT NULL,
  `ngaythue` datetime NOT NULL,
  `ngaytra` datetime NOT NULL,
  `thanhtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `maCD`, `maKH`, `tenphim`, `theloai`, `sotap`, `dongia`, `soluong`, `ngaythue`, `ngaytra`, `thanhtien`) VALUES
(1, '1', '1', 'muon kiep la anh em', 'kiem hiep', 1, 999, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 999);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `maKH` varchar(255) NOT NULL,
  `tenKH` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `maKH`, `tenKH`, `dienthoai`, `diachi`) VALUES
(1, '1', 'ngo ba kha', '0932535175', 'trai giam hoa tien, tinh hai duong'),
(2, '2', 'huan hoa dong', '0932535128', 'ha noi'),
(3, '3', 'khanh sky', '0956257684', 'nghia trang hoa son');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maCD`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
