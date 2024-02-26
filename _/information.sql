-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 11:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `ID` int(5) NOT NULL,
  `name_user1` varchar(60) NOT NULL,
  `job_user1` varchar(60) NOT NULL,
  `name_user2` varchar(60) NOT NULL,
  `job_user2` varchar(60) NOT NULL,
  `name_user3` varchar(60) NOT NULL,
  `job_user3` varchar(60) NOT NULL,
  `name_user4` varchar(60) NOT NULL,
  `job_user4` varchar(60) NOT NULL,
  `name_user5` varchar(60) NOT NULL,
  `job_user5` varchar(60) NOT NULL,
  `IBAN` varchar(50) NOT NULL,
  `com_tel` varchar(50) NOT NULL,
  `com_fax` varchar(50) NOT NULL,
  `com_address` text NOT NULL,
  `vat` varchar(20) NOT NULL,
  `align` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`ID`, `name_user1`, `job_user1`, `name_user2`, `job_user2`, `name_user3`, `job_user3`, `name_user4`, `job_user4`, `name_user5`, `job_user5`, `IBAN`, `com_tel`, `com_fax`, `com_address`, `vat`, `align`) VALUES
(2, 'اسم معد البيان', 'معد البيان', 'اسم مدير المحاسبة', 'مدير المحاسبة', 'اسم المدير التنفيذي', 'مدير التنفيذي', 'اسم مدير تشغي الميناء', 'مدير تشغيل الميناء', '', '', 'SA123456798000132465798000', '', '', '', '15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
