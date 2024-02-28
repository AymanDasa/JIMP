-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 12:50 AM
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_ID` int(4) NOT NULL,
  `code` varchar(9) NOT NULL DEFAULT '0',
  `Description` varchar(200) NOT NULL,
  `DescriptionEn` varchar(200) NOT NULL,
  `ServiceType` int(2) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `UnitEn` varchar(100) NOT NULL,
  `WeightFactor` int(2) NOT NULL,
  `DoubleFactor` int(2) NOT NULL,
  `ProfitPercent` int(100) NOT NULL,
  `Cost` double NOT NULL,
  `MinCost` double NOT NULL,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_ID`, `code`, `Description`, `DescriptionEn`, `ServiceType`, `Unit`, `UnitEn`, `WeightFactor`, `DoubleFactor`, `ProfitPercent`, `Cost`, `MinCost`, `Notes`) VALUES
(1, '1-1', 'البضائع العامة', 'General Cargo', 0, 'للطن أو للمترالمكعب', 'per ton or cubic meter or part thereof, whichever is higher', 0, 1, 0, 20, 0, ''),
(2, '1-2', 'الأسمنت المكيس (المصدر)', 'Cement (exporter) handled by the owner of the goods and my equipment', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 8, 0, ''),
(3, '1-3-1', 'طن  <span>3</span> أقل من ', 'Less than 3 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 140, 0, ''),
(4, '1-3-2', 'طن<span>10</span>طن إلى <span>3</span>من', '3 tons to 10 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 200, 0, ''),
(5, '1-3-3', 'طن<span>40</span>طن إلى <span>10</span>من', 'More than 10 tons to 40 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 540, 0, ''),
(6, '1-3-4', 'طن  <span>40</span>أكثر من ', 'More than 40 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 1350, 0, ''),
(7, '1-4-1', 'الأغنام', 'Sheep', 0, 'عن الرأس', 'head', 0, 1, 0, 3, 0, ''),
(8, '1-4-2', 'المواشي الأخرى', 'Other livestock', 0, 'عن الرأس', 'head', 0, 1, 0, 7, 0, ''),
(9, '1-5-1', 'البضائع السائبة', 'Bulk cargo', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 8, 0, ''),
(10, '1-5-2', 'البضائع السائبه الخاصه بالمشاريع المقامة  ', 'Bulk cargo for projects established in ports and handled by them with their knowledge and using their equipment including goods handled at the berths of projects in industrial ports', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 4, 0, ''),
(11, '1-5-3', 'الأسمنت السائب و الكلتكر ', 'Bulk cement and clutcher exports  which are handled by the owner of the goods and his equipment', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 1, 0, ''),
(12, '1-5-4', 'النفط و الغاز و منتجات النفط السائلة', 'Oil gas and liquid petroleum products handled at their designated berths', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 1, 0, ''),
(13, '1-6-1', '  قدما أو أقل<span>20</span> طول', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 270, 0, ''),
(14, '1-6-2', 'قدما <span>40</span> قدما و حتى <span>20</span> أطول من ', 'Longer than 20 feet to 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 400, 0, ''),
(15, '1-6-3', 'قدما <span>40</span> أطول من ', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 540, 0, ''),
(16, '1-7-1', 'قدما أو أقل (وارد معبأ)<span>20</span> طول ', '20 feet or less (incoming packed)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 300, 0, ''),
(17, '1-7-2', ' قدما (وارد معبأ) <span>40</span> قدما و حتى <span>20</span> أطول من', 'Longer than 20 feet to 40 feet (incoming filled)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 450, 0, ''),
(18, '1-7-3', 'قدما (وارد معبأ) <span>40</span>  أطول ', 'Longer than 20 feet to 40 feet (incoming filled)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(19, '1-7-4', 'قدما أو أقل (وارد فارغ)<span>20</span> طول ', 'Length of 20 feet or less (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 280, 0, ''),
(20, '1-7-5', 'قدما (وارد فارغ) <span>40</span> قدما و حتى <span>20</span>   أطول من', 'Longer than 20 feet to 40 feet (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 420, 0, ''),
(21, '1-7-6', 'قدما أو أقل (وارد فارغ) <span>40</span>  أطول ', 'Longer than 40 feet (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(22, '1-7-7', 'قدما أو أقل (صادر معبأ)<span>20</span> طول ', '20 feet or less (packaged outbound)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 280, 0, ''),
(23, '1-7-8', 'قدما (صادر معبأ) <span>40</span> قدما و حتى <span>20</span> أطول من', 'Longer than 20 feet to 40 feet (packaged outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 430, 0, ''),
(24, '1-7-9', 'قدما أو أقل (صادر معبأ) <span>40</span>  أطول ', 'Longer than 40 feet (Exported Packaged)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(25, '1-7-10', 'قدما أو أقل (صادر فارغ)<span>20</span> طول ', '20 feet or less (blank outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 300, 0, ''),
(26, '1-7-11', 'قدما (صادر فارغ) <span>40</span> قدما و حتى <span>20</span>', 'Longer than 20 feet to 40 feet (empty export)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 450, 0, ''),
(27, '1-7-12', 'قدما أو أقل (صادر فارغ) <span>40</span> طول', 'Longer than 40 feet (blank outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(28, '1-8-1', 'قدما أو أقل <span>20</span> طول ', '20 feet tall or less', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 450, 0, ''),
(29, '1-8-2', 'قدما <span>40</span> قدما و حتى <span>20</span> أطول من', 'Longer than 20 feet to 40 feet', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 700, 0, ''),
(30, '1-8-3', 'قدما <span>40</span> أطول من', 'Longer than 40 feet', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 740, 0, ''),
(31, '1-9-1', 'قدما أو أقل <span>20</span> التى يبلغ طولها ', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 450, 0, ''),
(32, '1-9-2', 'قدما <span>20</span> التى يزيد طولها عن  ', 'that are more than 20 feet tall', 0, 'للوحدة', 'For unity', 0, 1, 0, 700, 0, ''),
(33, '1-10-1', 'قدما أو أقل <span>20</span> طول ', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(34, '1-10-2', 'قدما <span>40</span> قدما و حتى <span>20</span> أطول من', 'Longer than 20 feet to 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(35, '1-10-3', 'قدما <span>40</span> أطول من', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
