-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 11:49 AM
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
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `社員管理システム`
--

CREATE TABLE `社員管理システム` (
  `ID` int(11) NOT NULL,
  `社員番号` text NOT NULL,
  `氏名` text NOT NULL,
  `部署` text NOT NULL,
  `性別` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `社員管理システム`
--

INSERT INTO `社員管理システム` (`ID`, `社員番号`, `氏名`, `部署`, `性別`) VALUES
(6, 'b', 'b', 'C', '男'),
(7, 'm', 'm', 'C', '男'),
(8, 'aw', 's', 'B', '女'),
(10, 'i009', 'linh', 'B', '男');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `社員管理システム`
--
ALTER TABLE `社員管理システム`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `社員管理システム`
--
ALTER TABLE `社員管理システム`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
