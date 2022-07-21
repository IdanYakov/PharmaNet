-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 04:18 PM
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
-- Database: `drug_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('idan94', '123123'),
('zivan94', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `comment`) VALUES
('idan', 'yakov', 'idany1994@gmail.com', '$My experience on the site was great !!'),
('zivan', 'solomon', 'zivans123@gmail.com', '$i love this place so match !!'),
('asd', 'da', 'zivan_gilad@walla.co', '$da');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `code` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `Image` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`code`, `name`, `price`, `Image`, `category`) VALUES
('m1', 'Acamol', 30, 'images/akmol.webp', 'child'),
('m10', 'Narocin', 42, '\"images/narocin.jpg\"', 'painkillers'),
('m11', 'Nurofen', 46, '\"images/nurofen.jpg\"', 'painkillers'),
('m12', 'Voltaren', 50, '\"images/voltaren.jpg\"', 'painkillers'),
('m13', 'Medicinal mushrooms', 90, 'images/mashrooms.jpg', 'natural'),
('m14', 'Ginger', 55, 'images/Ginger.jpg', 'natural'),
('m15', 'Medical herbs', 64, 'images/nut.jpg', 'natural'),
('m16', 'Crocus', 613, 'images/curc.jpeg', 'natural'),
('m2', 'Acamol forte', 34, 'images/forte.webp', 'child'),
('m3', 'Strawberry Paracetam', 40, 'images/tut.png', 'child'),
('m4', 'Novimol', 23, 'images/novimol.png', 'child'),
('m5', 'D3 Vitamin', 60, 'images/d3.jpg', 'vitamins'),
('m6', 'Centrum', 54, 'images/centrum.jpg', 'vitamins'),
('m7', 'Vitafusion', 90, 'images/vitafusion.webp', 'vitamins'),
('m8', 'Wellblends', 70, 'images/wellblends.webp', 'vitamins'),
('m9', 'Advil', 40, '\"images/advil.jpg\"', 'painkillers');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `email`, `username`, `password`) VALUES
('avi', 'megid', 'avimegid@gmail.com', 'avi', '123123'),
('chen', 'kon', 'chen@gmail.com', 'chen', 'kon'),
('daniel', 'amoyal', 'amoyal@gmail.com', 'daniel', '123'),
('daniel', 'nachmias', 'danielnachmias@gmail', 'daniel1996', '1122'),
('idan', 'yakov', 'idany1994@gmail.com', 'idany1994', '123'),
('moshe', 'levy', 'ml@gmail.com', 'ml12', '123123'),
('nitzan', 'michelstein', 'nitz@gmail.com', 'nitzan', '131'),
('rubin', 'od', 'rob@walla.com', 'rob', 'hood'),
('sapir', 'baruh', 'sapirbaruh@gmail.com', 'sapir1996', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
