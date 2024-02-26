-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 02:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `alog_id` int(10) NOT NULL,
  `alog_time` datetime NOT NULL,
  `alog_section` varchar(100) NOT NULL,
  `alog_no` varchar(100) NOT NULL,
  `alog_description` varchar(100) NOT NULL,
  `alog_user` varchar(100) NOT NULL,
  `alog_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `AgentID` int(10) NOT NULL,
  `AgentCustomerNo` varchar(10) NOT NULL,
  `AgentNameAr` varchar(100) NOT NULL,
  `AgentNameEn` varchar(100) NOT NULL,
  `AgentPhone` varchar(50) NOT NULL,
  `AgentCR` varchar(50) NOT NULL,
  `AgentAddress` text NOT NULL,
  `AgentEmail` varchar(100) NOT NULL,
  `AgentBilling` varchar(50) NOT NULL,
  `AgentURL` varchar(50) NOT NULL,
  `AgentCity` varchar(50) NOT NULL,
  `AgentCountry` varchar(50) NOT NULL,
  `AgentNotes` text NOT NULL,
  `AgentContactName` varchar(100) NOT NULL,
  `AgentContactTitle` varchar(100) NOT NULL,
  `AgentOpeningBalance` int(10) NOT NULL,
  `AgentCategory` int(11) NOT NULL DEFAULT 1,
  `AgentEx1` varchar(100) NOT NULL,
  `AgentEx2` text NOT NULL,
  `AgentEx3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`AgentID`, `AgentCustomerNo`, `AgentNameAr`, `AgentNameEn`, `AgentPhone`, `AgentCR`, `AgentAddress`, `AgentEmail`, `AgentBilling`, `AgentURL`, `AgentCity`, `AgentCountry`, `AgentNotes`, `AgentContactName`, `AgentContactTitle`, `AgentOpeningBalance`, `AgentCategory`, `AgentEx1`, `AgentEx2`, `AgentEx3`) VALUES
(1, '910004', 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '8324133', '8337575', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. SAFWAT(119)', '', 0, 1, '', '', 0),
(2, '910009', 'شركة الخدمات البحرية العالمية', 'GLOBE Marine Services Co.', '8352222', '8351222', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.AMANULLAH(1323)', '', 0, 1, '', '', 0),
(3, '910007', 'توكيلات  بارويل  المحدودة', 'BARWIL  Agencies  Ltd.', '8339975/8142411', '8333393', 'POBox 293 / Postal Code 31411', 'salah.al-yousif@barwil.com', '', '', 'Dammam', 'Saudia Arabia', '', 'Mr.Abdur Razzaq(203)', 'Mr.Zaheeruddin (202)', 0, 1, '', '', 0),
(4, '910019', 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  KANOO', '8356000', '8355764/8355780', 'POBox 37 / Postal Code 31411', '', '', '', 'Dammam', 'Saudia Arabia', '', 'Mr.HamoodGrp Acct 249', 'MR.Husein Sadiq 310', 0, 1, '', '', 0),
(5, '910012', 'شركة الوطنية السعودة للنقل البحرى', 'NATIONAL SHIPPING CO.SA', '8348553', '8348655', 'POBox 3732 / Postal Code 31481', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.MUKHTAR 400', 'Mr. Shamim  404', 0, 1, '', '', 0),
(6, '910013', 'شركة الشرق للتجارة والملاحة المحدودة', 'ORIENTAL Com. & Shipping Co. ', '8260529/8274696', '8260661', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.ABDUL KHADER', '', 0, 1, '', '', 0),
(7, '9100185', 'الشركة البحرية السعوديه', 'SAUDI MARITIME CO.', '8252047', '8324793', '', '', '', '', 'Dammam', 'Saudia Arabia', '', ' Yusuf 212) Latif 217', 'Alfanso/Dawood (217)', 0, 1, '', '', 0),
(8, '910010', 'شركة وكا لة الخليج السعوديه', 'GULF AGENCY CO. SA', '8328762', '8323035', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.QASIM KARORI 8323426', 'Mr.Paily', 0, 1, '', '', 0),
(9, '910016', 'شركة الملاحة البحرية العربية ', 'Shipping Corp. of Saudi Arabia ', '8265271', '8264593', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.MAZHAR', '', 0, 1, '', '', 0),
(10, '910018', 'المشاريع المتحدة', 'UNENCO', '8255500/8250350', '8250370', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. Mohammad', '', 0, 1, '', '0505050505', 0),
(11, '910014', 'الموسسة العربية السعودية للتصنيع والتجارة', 'SAITE', '8329102', '8331696', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. UNNI', '', 0, 1, '', '', 0),
(233, '', 'ايمن', 'Ayman', '', '11442255', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(234, '', 'جلوب للخدمات البحرية', 'Globe marine services', '5555', '4111222', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(235, '', 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '', '40303666945', '', '', '', '', '', '', '7051 Prince Sultan - As Salamah Dist.\r\nUnit No 1008\r\nJeddah 23525 - 2661\r\nShort Address JEMA7051\r\nKingdom of Saudi Arabia', 'Kamar', '', 0, 1, '', '', 0),
(236, '', 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '0533315648', '522912', '', '', '', '', '', '', '', 'HANI', '', 0, 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`, `note`) VALUES
(1, 'company_name', 'ZAMIL OFFSHORE SERVICES COMPANY', NULL),
(2, 'company_bldg', 'AL-ZAMIL BLDG - AL BANDARIYAH', NULL),
(3, 'company_pobox', 'POBox 1922 ALKHOBAR 31952 , Saudi Arabia', NULL),
(4, 'company_tel', 'TEL: 03-882-2494, 03-882-2495, FAX-03-882-2032', NULL),
(5, 'company_cr', '2051003290 ', NULL),
(6, 'company_vat', '310132626800003', NULL),
(7, 'company_name_ar', 'شركة الزامل للخدمات البحرية', NULL),
(8, 'company_bldg_ar', 'بناية الزامل - حى البندرية', NULL),
(9, 'company_pobox_ar', 'ص.ب 1922, الخبر  31952 , المملكة العربية السعودية', NULL),
(10, 'company_tel_ar', 'تليفون :2494-882-013 , فاكس : 2032-882-013', NULL),
(11, 'cc1', '104.1260.41111.00000.000000.000.00000', NULL),
(12, 'cc2', '104.1810.41111.00000.000000.000.00000', NULL),
(13, 'vat', '15', NULL),
(14, 'company_logo', 'logo.png', NULL),
(15, 'company_contract', 'بناية الزامل - حى البندرية', NULL),
(16, 'company_vendor', '10005686', NULL),
(17, 'SSCount', '5', 'Special Service count not more than 10\r\n');

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

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(10) NOT NULL,
  `ShipID` int(10) NOT NULL,
  `ShipName` varchar(50) NOT NULL,
  `ShipWeight` int(10) NOT NULL,
  `AgentID` int(10) NOT NULL,
  `AgentNameAr` text NOT NULL,
  `AgentNameEn` text NOT NULL,
  `ServiceType` varchar(50) NOT NULL,
  `ServiceTypeName` varchar(50) NOT NULL,
  `ServiceTypeFactor` double NOT NULL,
  `InvoiceDate` datetime NOT NULL DEFAULT current_timestamp(),
  `InvoiceDateT` varchar(50) NOT NULL,
  `InvoiceDateH` varchar(50) NOT NULL,
  `ArrivalDate` datetime NOT NULL,
  `ArrivalDateT` varchar(50) NOT NULL,
  `ArrivalDateH` varchar(50) NOT NULL,
  `DepartureDate` datetime NOT NULL,
  `DepartureDateT` varchar(50) NOT NULL,
  `DepartureDateH` varchar(50) NOT NULL,
  `PeriodDays` int(10) NOT NULL,
  `AnchorageEntry` datetime DEFAULT NULL,
  `AnchorageEntryT` varchar(50) NOT NULL,
  `AnchorageEntryH` varchar(50) NOT NULL,
  `AnchorageLeave` datetime NOT NULL,
  `AnchorageLeaveT` varchar(50) NOT NULL,
  `AnchorageLeaveH` varchar(50) NOT NULL,
  `AnchorageDays` int(10) NOT NULL,
  `MSericeAnchoragePrice` double NOT NULL,
  `MovePort1` varchar(50) NOT NULL,
  `MovePort2` varchar(50) NOT NULL,
  `MovePort3` varchar(50) NOT NULL,
  `TripNo` varchar(50) NOT NULL,
  `DockingNo` varchar(50) NOT NULL,
  `RouteNo` varchar(50) NOT NULL,
  `ShiftedNo` varchar(50) NOT NULL,
  `Reason` text NOT NULL,
  `Note` text NOT NULL,
  `MSFraction1` double NOT NULL DEFAULT 1,
  `MSFraction2` double NOT NULL DEFAULT 1,
  `MSFraction3` double NOT NULL DEFAULT 1,
  `MService1` varchar(50) NOT NULL,
  `MService2` varchar(50) NOT NULL,
  `MService3` varchar(50) NOT NULL,
  `CA0` double NOT NULL,
  `CA1` double NOT NULL,
  `CA2` double NOT NULL,
  `CA3` double NOT NULL,
  `MSericeInPrice` double NOT NULL,
  `CB0` double NOT NULL,
  `CB1` double NOT NULL,
  `CB2` double NOT NULL,
  `CB3` double NOT NULL,
  `MSericeOutPrice` double NOT NULL,
  `MA` double NOT NULL,
  `MA0` double NOT NULL,
  `MA1` double NOT NULL,
  `MA2` double NOT NULL,
  `MA3` double NOT NULL,
  `MB` double NOT NULL,
  `MB0` double NOT NULL,
  `MB1` double NOT NULL,
  `MB2` double NOT NULL,
  `MB3` double NOT NULL,
  `MC` double NOT NULL,
  `MC0` double NOT NULL,
  `MC1` double NOT NULL,
  `MC2` double NOT NULL,
  `MC3` double NOT NULL,
  `MovePortPrice` double NOT NULL,
  `MSericeBathPrice` double NOT NULL,
  `MSNote1` varchar(50) NOT NULL,
  `MSNote2` varchar(50) NOT NULL,
  `MSNote3` varchar(50) NOT NULL,
  `MGPrice` double NOT NULL,
  `MSTOTAL` double NOT NULL,
  `SService1` text NOT NULL,
  `SService2` text NOT NULL,
  `SService3` text NOT NULL,
  `SService4` text NOT NULL,
  `SService5` text NOT NULL,
  `SServiceCode1` varchar(10) NOT NULL,
  `SServiceCode2` varchar(10) NOT NULL,
  `SServiceCode3` varchar(10) NOT NULL,
  `SServiceCode4` varchar(10) NOT NULL,
  `SServiceCode5` varchar(10) NOT NULL,
  `SSName1` text NOT NULL,
  `SSName2` text NOT NULL,
  `SSName3` text NOT NULL,
  `SSName4` text NOT NULL,
  `SSName5` text NOT NULL,
  `SSNote1` text NOT NULL,
  `SSNote2` text NOT NULL,
  `SSNote3` text NOT NULL,
  `SSNote4` text NOT NULL,
  `SSNote5` text NOT NULL,
  `SSUnit1` text NOT NULL,
  `SSUnit2` text NOT NULL,
  `SSUnit3` text NOT NULL,
  `SSUnit4` text NOT NULL,
  `SSUnit5` text NOT NULL,
  `SSQut1` text NOT NULL,
  `SSQut2` text NOT NULL,
  `SSQut3` text NOT NULL,
  `SSQut4` text NOT NULL,
  `SSQut5` text NOT NULL,
  `SSUPrice1` text NOT NULL,
  `SSUPrice2` text NOT NULL,
  `SSUPrice3` text NOT NULL,
  `SSUPrice4` text NOT NULL,
  `SSUPrice5` text NOT NULL,
  `SSPrice1` text NOT NULL,
  `SSPrice2` text NOT NULL,
  `SSPrice3` text NOT NULL,
  `SSPrice4` text NOT NULL,
  `SSPrice5` text NOT NULL,
  `SSTOTAL` double NOT NULL,
  `TOTAL` double NOT NULL,
  `is_VAT` int(4) NOT NULL DEFAULT 0,
  `VAT` double NOT NULL DEFAULT 0,
  `VAT_TOTAL` double NOT NULL DEFAULT 0,
  `Status` int(10) NOT NULL DEFAULT 0,
  `OracleCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `privileges` varchar(10) NOT NULL,
  `align1` int(10) NOT NULL DEFAULT 58,
  `align2` int(10) NOT NULL DEFAULT 8,
  `align3` int(10) NOT NULL DEFAULT 12,
  `align4` int(10) NOT NULL DEFAULT 9
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_invoice` int(50) NOT NULL,
  `pay_agent` varchar(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `pay_description` text NOT NULL,
  `pay_amount` double NOT NULL,
  `pay_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sappo`
--

CREATE TABLE `sappo` (
  `id` int(11) NOT NULL,
  `no` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT 0,
  `balance` double NOT NULL DEFAULT 0,
  `is_paid` varchar(10) DEFAULT 'No',
  `is_active` int(1) NOT NULL DEFAULT 1,
  `sappoExpDate` date NOT NULL DEFAULT current_timestamp(),
  `note` text DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, '1-3-1', 'أقل من 3 طن', 'Less than 3 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 140, 0, ''),
(4, '1-3-2', 'من 3 طن إلى 10 طن', '3 tons to 10 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 200, 0, ''),
(5, '1-3-3', 'أكتر من 10 طن إلى 40 طن', 'More than 10 tons to 40 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 540, 0, ''),
(6, '1-3-4', 'أكثر من 40 طن', 'More than 40 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 1350, 0, ''),
(7, '1-4-1', 'الأغنام', 'Sheep', 0, 'عن الرأس', 'head', 0, 1, 0, 3, 0, ''),
(8, '1-4-2', 'المواشي الأخرى', 'Other livestock', 0, 'عن الرأس', 'head', 0, 1, 0, 7, 0, ''),
(9, '1-5-1', 'البضائع السائبة', 'Bulk cargo', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 8, 0, ''),
(10, '1-5-2', 'البضائع السائبه الخاصه بالمشاريع المقامة  ', 'Bulk cargo for projects established in ports and handled by them with their knowledge and using their equipment including goods handled at the berths of projects in industrial ports', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 4, 0, ''),
(11, '1-5-3', 'الأسمنت السائب و الكلتكر ', 'Bulk cement and clutcher exports  which are handled by the owner of the goods and his equipment', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 1, 0, ''),
(12, '1-5-4', 'النفط و الغاز و منتجات النفط السائلة', 'Oil gas and liquid petroleum products handled at their designated berths', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 1, 0, ''),
(13, '1-6-1', 'طول 20 قدما أو أقل', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 270, 0, ''),
(14, '1-6-2', 'أطول من 20 قدما و حتى 40 قدما', 'Longer than 20 feet to 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 400, 0, ''),
(15, '1-6-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 540, 0, ''),
(16, '1-7-1', 'طول 20 قدما أو أقل (وارد معبأ)', '20 feet or less (incoming packed)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 300, 0, ''),
(17, '1-7-2', 'أطول من 20 قدما و حتى 40 قدما (وارد معبأ) ', 'Longer than 20 feet to 40 feet (incoming filled)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 450, 0, ''),
(18, '1-7-3', 'أطول 40 قدما أو أقل (وارد معبأ)', 'Longer than 20 feet to 40 feet (incoming filled)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(19, '1-7-4', 'طول من 20 قدما أو أقل(وارد فارغ) ', 'Length of 20 feet or less (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 280, 0, ''),
(20, '1-7-5', 'أطول من 20 قدما و حتى 40 قدما (وارد فارغ) ', 'Longer than 20 feet to 40 feet (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 420, 0, ''),
(21, '1-7-6', 'أطول من 40 قدما (وارد فارغ)', 'Longer than 40 feet (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(22, '1-7-7', 'طول 20 قدما أو أقل (صادر معبأ)', '20 feet or less (packaged outbound)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 280, 0, ''),
(23, '1-7-8', 'أطول من 20 قدما و حتى 40 قدما (صادر معبأ)', 'Longer than 20 feet to 40 feet (packaged outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 430, 0, ''),
(24, '1-7-9', 'أطول من 40 قدما (صادر معبأ)', 'Longer than 40 feet (Exported Packaged)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(25, '1-7-10', 'طول 20 قدما أو أقل (صادر فارغ)', '20 feet or less (blank outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 300, 0, ''),
(26, '1-7-11', 'أطول من 20 قدما و حتى 40 قدما (صادر فارغ)', 'Longer than 20 feet to 40 feet (empty export)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 450, 0, ''),
(27, '1-7-12', 'أطول من 40 قدما (صادر فارغ)', 'Longer than 40 feet (blank outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(28, '1-8-1', 'طول 20 قدما أو أقل ', '20 feet tall or less', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 450, 0, ''),
(29, '1-8-2', 'أطول من 20 قدما و حتى 40 قدما', 'Longer than 20 feet to 40 feet', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 700, 0, ''),
(30, '1-8-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 740, 0, ''),
(31, '1-9-1', 'التى يبلغ طولها 20 قدما أو أقل', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 450, 0, ''),
(32, '1-9-2', 'التى يزيد طولها عن 20 قدما', 'that are more than 20 feet tall', 0, 'للوحدة', 'For unity', 0, 1, 0, 700, 0, ''),
(33, '1-10-1', 'طول 20 قدما أو أقل', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(34, '1-10-2', 'أطول من 20 قدما و حتى 40 قدما', 'Longer than 20 feet to 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(35, '1-10-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `ShipID` int(10) NOT NULL,
  `IMO` varchar(20) NOT NULL,
  `ShipName` varchar(100) NOT NULL,
  `Weight` double NOT NULL,
  `AgentID` int(10) NOT NULL,
  `VAT` int(4) NOT NULL DEFAULT 0,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`ShipID`, `IMO`, `ShipName`, `Weight`, `AgentID`, `VAT`, `Notes`) VALUES
(14983, '198982158d', 'HUANG UPs', 16000, 4, 1, 'sddssd bvhvh'),
(14984, '399384720 s', 'BASILISK', 1500, 9, 0, ''),
(14985, '432270533 ', 'AL-HAJI KASIM', 524, 4, 0, ''),
(14986, '232617071 ', 'SSI CHALLENGER', 31242, 4, 0, ''),
(14987, '336979549 ', 'ASTRO PROCYON', 883, 2, 1, ''),
(14988, 'sdsdsdsd', 'CARL SCHULTE', 51872, 10, 0, ''),
(14989, '501808731 ', 'APL SAVANNAH', 109699, 1, 0, ''),
(14990, '469031190 ', 'MANTA FATMA', 23264, 1, 0, ''),
(14991, '481776631 ', 'MTS STATUM', 309, 1, 1, ''),
(14992, '333271349 ', 'ULTRA SERVAL', 43644, 10, 0, ''),
(14993, '441200580 ', 'GLOVIS SUNRISE', 64572, 4, 0, ''),
(14994, '253220692 ', 'ZAKHER STAR', 1416, 3, 1, ''),
(14995, '268308628 ', 'WAN HAI 611', 68687, 3, 0, ''),
(14996, '336816879 ', 'OOCL TAIPEI', 91499, 10, 0, ''),
(14997, '430373088 ', 'NABUCCO', 73358, 8, 0, ''),
(14998, '589771339 ', 'LUCKY GLORY', 20238, 5, 0, ''),
(14999, '434465218 ', 'LUCKY GLORY II', 9955, 3, 0, ''),
(15000, '296753825 ', 'PROMETHEUS LEADER', 41886, 7, 0, ''),
(15001, '198982158', 'AYMAN DASA', 111111, 3, 1, 'ADD NEW'),
(15002, '123456', 'ABCDE', 9000, 4, 1, ''),
(15003, '944440', 'bahri', 15000, 234, 0, ''),
(15004, '21321321', 'ZAMIL-406', 2000, 1, 1, ''),
(15005, '234234234234', 'ZAMIL/406', 10000, 2, 1, ''),
(15006, '22333', 'ZAMIL 406', 2222, 3, 1, ''),
(15008, '65655', 'ereererr', 526352, 11, 1, ''),
(15012, '198982158c', '198982158d', 33, 2, 1, ''),
(15018, '432270533	', '432270533	', 33, 2, 1, '32'),
(15023, '22', '22', 33, 5, 1, ''),
(15031, '232', '22', 32, 2, 1, ''),
(15032, '', 'TOPAZ LENA', 3183, 236, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cr` varchar(20) NOT NULL,
  `vat` varchar(20) NOT NULL,
  `conatct` text DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `cr`, `vat`, `conatct`, `is_active`, `create_date`, `update_date`) VALUES
(292, 'مؤسسة الرصد المتابعة لصيانة المعدات', '2051229255', '8609902341617732867', ' ', 0, '2022-08-18 17:46:26', '2022-08-18 17:09:34'),
(295, 'مؤسسة خبراء الاسناد للمقاولات العامة', '2050135521', '5471324538773599327', ' 22', 1, '2022-08-18 17:46:26', '2024-01-19 17:19:06'),
(296, 'مؤسسة نايف محمد علي القحطاني للمقاولات العامة', '2050135837', '9355148370446575448', '     xzccxzxcx\r\nzxzc\r\nxzc\r\nxzc\r\nxzc\r\ncxz', 1, '2022-08-18 17:46:26', '2022-08-19 07:44:45'),
(297, 'sssasas', '2051230553', '8487575591548983317', ' ', 0, '2022-08-18 17:46:26', '2022-08-19 20:45:11'),
(298, 'مؤسسة هدف الريادة للمقاولات العامة', '2051232396', '2433587455106864704', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(299, 'مؤسسة يوسف سالم بن عبدالعزيز الوشمي للمقاولات العامة', '2051232782', '7754727519557102175', ' ', 1, '2022-08-18 17:46:26', '2024-01-19 19:08:29'),
(300, 'مؤسسة سعيد متعب طامي الهاجري للمقاولات العامة', '2055100000', '8955846050352154256', ' ', 1, '2022-08-18 17:46:26', '2022-08-19 07:47:10'),
(301, 'مؤسسة تركي عبدالله عيسى العجمي للمقاولات العامة', '2060622902', '8503634786569690557', '', 1, '2022-08-18 17:46:26', '2022-08-19 07:48:15'),
(302, 'مؤسسة سمر عائش عبدالله العتيبي للمقاولات العامة', '2050132006', '1224114463596484436', '', 1, '2022-08-18 17:46:26', '2022-08-19 07:48:28'),
(303, 'مؤسسة فهد بن صالح بن حسن اليامي للمقاولات', '2050140256', '4616211642681058103', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(304, 'مؤسسة ابتكار الريادة للمقاولات العامة', '2051231090', '9641564170625754482', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(305, 'مؤسسة قايد صالح حسين القحطاني للمقاولات', '2051231869', '1836830570306633286', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(306, 'أكاديمية فرسان الخليج الرياضية', '2050138250', '6101490047348167765', ' ', 1, '2022-08-18 17:46:26', '2022-08-20 00:58:26'),
(307, 'مكتب راشد علي راشد الهتلان للاستشارات الأمنية', '2050134777', '2081601141792869367', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(308, 'شركة جازل للاستشارات الأمنية', '2051232186', '9591910246626935393', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(309, 'مكتب الراي السديد للاستشارات الأمنية', '2051232850', '3559377267831169259', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(311, 'شركة شروق الأمل للمقاولات المعمارية العامة', '2051233154', '4517641788059376287', ' ', 1, '2022-08-18 17:46:26', '2022-08-19 04:21:37'),
(314, 'شركة شدن للتجارة', '2050133143', '4500041000059326287', '   ', 1, '2022-08-18 17:46:26', '2022-08-19 04:22:41'),
(315, 'يحسن علي حسن آل الزعبي التجارية', '2050038741', '6489809946294556865', '   ', 1, '2022-08-18 17:46:26', '2022-08-19 07:29:07'),
(316, 'مؤسسة أحمد فوزي بن علي آل الشيخ التجارية', '2050137901', '4280454111561206648', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(317, 'مؤسسة عادل محمد الشيوخ التجارية', '2050139682', '4784962452502398824', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(318, 'مؤسسة مهدي صالح بن عيسى المهري التجارية', '2051229304', '6753769480011527561', '  asdsadsadsadsasda', 1, '2022-08-18 17:46:26', '2022-08-19 08:31:36'),
(319, 'مؤسسة اسطورة الالوان التجارية', '2051231416', '6381334416226112981', '  2051229304d', 0, '2022-08-18 17:46:26', '2022-08-19 08:34:01'),
(320, 'مؤسسة عبدالرحمن مروان عمر الغامدي التجارية', 'D2051231648', 'S3223601888758536584', '          sadsadd', 1, '2022-08-18 17:46:26', '2022-08-19 09:48:11'),
(321, 'مؤسسة ابتكار الالوان التجارية', '2051232583', '1313711986722514935', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(322, 'مؤسسة عالية العربية للتجارة', '2051233083', '1691506946231747432', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(323, 'محل دهانات الوطنية التجارية', '2055127351', '8022247922812194313', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(324, 'شركة مصنع الجزيره للدهانات', '2055128129', '8360234654444032322', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(325, 'مؤسسة اروى خلف فالح القنزع التجارية', '2057472929', '5304705435651649493', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(326, 'مؤسسة خلود خالد سيف العازمي التجارية', '2057472942', '7596510592491083417', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(327, 'مؤسسة سحر عبدالله بن خلف الشمري التجارية', '2057472960', '7802259370235201459', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(328, 'مؤسسة مها راضي بن حامد العنزي التجارية', '2057472967', '9732482989454717194', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(329, 'مؤسسة الطاف تركى بن غريب الخالدى التجارية', '2057472968', '9425827714704686181', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(330, 'مؤسسة ضحى راضي بن حامد العنزي التجارية', '2057472969', '3399714529728785351', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(331, 'مؤسسة بدر محمد خلوي الظفيري التجارية', '2057472971', '3054896329701921902', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(332, 'مؤسسة تهاني حماد ذيبان الشمري التجارية', '2057472983', '7696359722353953878', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(333, 'مؤسسة ناصر سالم عبدالمحسن العجمي التجارية', '2057472987', '1394975837855610651', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(334, 'مؤسسة صالح حمود عبيد الشمري التجارية', '2057472994', '2978749974387278499', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(335, 'مؤسسة عطاالله بن مبارك بن صلف المطيري التجارية', '2057473009', '7029733267823381307', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(336, 'مؤسسة محمد علوش بن محمد القحطاني التجارية', '2057473013', '5961627413422407160', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(337, 'مؤسسة تركي فهد بن محمد العتيبي التجارية', '2057473024', '9218559983712109712', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(338, 'مؤسسة عبدالرحمن عبد الله شرعان الظفيري التجارية', '2057473030', '3744323095253300949', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(339, 'مؤسسة نجلاء عجير ابن غالي العازمي التجارية', '2057473033', '9487183155244939757', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(340, 'مؤسسة حسن عوض حسن العنزي التجارية', '2057473035', '8483772795714018763', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(341, 'مؤسسة دلال محمد صنيتان العتيبي التجارية', '2057473049', '9187147364347038209', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(342, 'مؤسسة صباح المزينى عائض العتيبي التجارية', '2057473063', '9591951024245966945', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(343, 'مؤسسة منى سعد شباب العتيبي التجارية', '2057473089', '2075966934066060601', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(344, 'مؤسسة نايف نخيلان منصور الشمري التجارية', '2057473158', '7871923265167881209', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(345, 'مؤسسة نظر مسلط بن مطلق العتيبي التجارية', '2057473314', '5243164243022113650', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(346, 'مؤسسة ماريه محمد بن فاضل الغامدي التجارية', '2057473344', '3804973291011344467', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(347, 'مؤسسة فاديه محمد بن فاضل الغامدي التجارية', '2057473346', '8928270187955515239', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(348, 'مؤسسة عبدالعزيز محمد بن فاضل الغامدي التجارية', '2057473375', '8817592178521402214', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(349, 'مؤسسة فرحه هليل عسكر الماجدي التجارية', '2057473383', '1754108570579499477', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(350, 'مؤسسة هاجر أحمد صايل الظفيري التجارية', '2057473477', '1754255424138797393', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(351, 'مؤسسة ابتسام ابراهيم ناصر المرشود التجارية', '2057473481', '4939446449346007152', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(352, 'مؤسسة حلا فهد بن مخلف الشمري التجارية', '2057473488', '3983521141595811239', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(353, 'مؤسسة سيف ثاني خليف الشمري التجارية', '2057473513', '2144624728223543883', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(354, 'مؤسسة فوزيه بنت عياد بن دغفق الشمري التجارية', '2057473533', '1456106030907501484', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(355, 'مؤسسة فهاد خليفه بن مطلق الشمري التجارية', '2057473546', '6981228942806449217', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(356, 'مؤسسة برغش حمود شرعان الظفيري التجارية', '2057473575', '6094184667006745790', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(357, 'مؤسسة نايف بن يوسف عيسى العمره التجارية', '2050132696', '1564731523758039370', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(358, 'مؤسسة هاجر حمدان علي الشمراني لمواد البناء', '2050135159', '7500381872121758952', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(359, 'مؤسسة مناهل المدينة التجارية', '2055129413', '7919265984128401489', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(360, 'مؤسسة مجال الإختصاص للتجارة', '2050132240', '7500414958248743898', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(361, 'مؤسسة ألاء لمواد البناء', '2050140914', '2240517127011420223', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(362, 'مؤسسة عالم المجد لمواد البناء', '2050141058', '8897414112451876699', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(363, 'مؤسسة الانجاز الامثل لمواد البناء', '2055128067', '7835772747658888609', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(364, 'شركة كلاس التجارية (شركة شخص واحد)', '2050133810', '4897327867258060828', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(365, 'مؤسسة ساره علي بن ناشي المسلم التجارية', '2050138080', '2759925977046414569', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(366, 'مؤسسة جمعه قاسم سلمان غزواني التجارية', '2050138768', '2780228176003044605', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(367, 'مؤسسة نور البلد التجارية', '2050140812', '6225258819878453145', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(368, 'مؤسسة فاطمه سعد علي السالم التجارية', '2051233070', '6065690247596495605', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(369, 'مؤسسة سالم صالح بن سالم ال جيده التجارية', '2050136480', '5339538471166653669', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(370, 'محل اللون الثامن للتجارة', '2050136189', '7119410115103571848', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(371, 'مؤسسة حسين تركي بن محمد الشوملي التجارية', '2050137745', '4234860139986076660', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(372, 'مؤسسة الأنامل السحرية التجارية', '2051233432', '6594959188896577900', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(373, 'مؤسسة أوتاد الجبيل التجارية', '2055128449', '4653233314692550322', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(374, 'مؤسسة الجسر الصلب للتجارة', '2050133485', '4866472652369780951', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(375, 'مؤسسة علي حسين بن عباس الجميعه التجارية', '2050134136', '9042415146246219430', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(377, 'مؤسسة مروي السديري صنيدح العنزي لتقنية المعلومات', '2050137685', '4606406562727723441', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(378, 'مؤسسة هياء أحمد بن نهار القحطاني التجارية', '2050138394', '3294858043435765646', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(379, 'محل صالحه محمد سعد الزهراني التجارية', '2050138404', '2645139762323186854', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(380, 'مؤسسة خالد محمد عايض الدوسري التجارية', '2051229277', '8725670323558084826', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(383, 'مؤسسة أديب امين عبدالحميد المجددي للتجارة', '2051232133', '2717204273047418136', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(384, 'مؤسسة رشيد راشد بن سعود الحربي للتجارة', '2055128470', '4994656049837617299', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(385, 'مؤسسة الخليج سوفت التجارية', '2060622768', '6768298823176019152', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(386, 'مؤسسة ريان محمد عياش ماحي للتجارة', '2066612086', '1491489224987988457', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(387, 'مؤسسة نايف ناصر موسى غبيسي للتجارة', '2066612148', '5071878381849240108', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(388, 'مؤسسة احمد بن عبدالرضاء بن احمد الحمود التجارية', '2050134462', '9697137549456385680', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(389, 'مؤسسة مستوره عطيه سفر الزهراني لبيع الجوالات وصيانتها', '2050138075', '4622731683683021877', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(390, 'مؤسسة ايزي ستور للتجارة', '2051230646', '8029933993927746454', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(391, 'مؤسسة ريدان الريادة للتجارة', '2050132385', '4458599910615507289', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(392, 'مؤسسة حذيفه عماد بن عبدالعزيز الرشود التجارية', '2050135629', '8157143142286834947', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(393, 'مؤسسة بروق الشرق للاتصالات', '2050133406', '1912786215723899988', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(394, 'مؤسسة شبكات الإرسال للاتصالات', '2050136287', '8116671490662190878', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(395, 'مؤسسة هياء أحمد بن نهار القحطاني للاتصالات', '2050138332', '3702495269876678229', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(396, 'مؤسسة الجوال المتقدم للاتصالات', '2050139817', '8386311979405149118', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(397, 'مؤسسة خليج الخير للاتصالات', '2050140633', '4217506149527564428', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(398, 'مؤسسة العدسة الذكية للاتصالات', '2051231380', '6485260257847710741', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(400, 'مؤسسة الواحة الذهبي للاتصالات', '2055128207', '7435800410786707915', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(401, 'مؤسسة فرسان الجبيل التجارية', '2055128561', '6082202411682444803', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(402, 'مؤسسة حزام بن محمد بن مبخوت الدوسري لبيع الجوالات وصيانتها', '2057473325', '5509390165172370567', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(403, 'مؤسسة حسين عيسى البدن التجارية', '2051230589', '7123744936234033593', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(404, 'مؤسسة زبرقان التجارية', '2050136889', '8928129074916722192', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(405, 'موسسة باكو للتجارة', '2051233486', '5934677052095803380', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(406, 'مؤسسة علي سعيد بن مسعود آل مهدي للاتصالات', '2050134468', '3300616643074986563', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(407, 'مؤسسة فريق البدر الرياضي للتجارة', '2050135416', '5616937148542078557', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(408, 'مؤسسة مسار الحلم للتجارة', '2050137605', '5173932861162132173', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(409, 'مؤسسة توي ستار التجارية', '2051231778', '6960304380987169851', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(410, 'محل نطاق ابتكار لبيع الجوالات وصيانتها', '2051231852', '3851728113761690134', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(411, 'مؤسسة اجهزة المستقبل للتجارة', '2050139481', '1704464137727388912', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(412, 'مؤسسة رؤية الجوهرة لتقنية المعلومات', '2051231543', '5345737522191209218', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(413, 'مؤسسة وادي النظم التجارية', '2051231691', '2029834539507875787', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(414, 'مؤسسة نجاح المحاسبة لتقنية المعلومات', '2050134710', '7197837695791266202', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(415, 'مؤسسة عمر مشعل بن ابراهيم الصقير لتقنية المعلومات', '2051229093', '6151593235712848788', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(416, 'مؤسسة محمد جعفر بن حسين آل درويش التجارية', '2051230356', '9215487076867394670', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(417, 'مؤسسة فلاح لافي حديد الحربي لمواد البناء', '2057473397', '2782307664777909793', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(418, 'مؤسسة تمكين الشرق التجارية', '2050132682', '6476147534024649623', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(419, 'مؤسسة صالح عطيه الزهراني للإطارات', '2050132129', '8485238338234634831', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(420, 'مؤسسة يافع الخضراء التجارية', '2050137916', '2751935061404379920', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(421, 'مؤسسة حمد صالح بن سالم الشهي للاطارات', '2050140376', '9257179564522465964', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(422, 'مؤسسة خلود عبدالله ظافر آل سلوم للإطارات', '2051229499', '2207611480242927128', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(423, 'مؤسسة شباب البحرين للإطارات', '2051229866', '5253206687042101658', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(424, 'مؤسسة عماد على بن احمد الزهراني التجارية', '2050132471', '1856351155137237344', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(425, 'مؤسسة دروب الطريق التجارية', '2050135555', '9564443163531744357', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(426, 'مؤسسة محسنه مرشد عسكر صلاح للتجارة', '2050140879', '2694797870904976596', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(427, 'شركة الجميح للاطارات المحدودة', '2055127332', '7604572887686510374', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(428, 'مؤسسة سميره سعيد بن علي القاسم التجارية', '2050133024', '8314838960936641276', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(429, 'مؤسسة نواف محمد بن عبدالرحمن المبرزي للبطاريات', '2050135088', '4295695280252475604', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(430, 'مؤسسة جوهرة دله للبطاريات', '2050135119', '6437114366824070607', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(431, 'مؤسسة محمد مهدي محمد اليامي للتجارة', '2050135441', '9299896825532017366', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(432, 'مؤسسة منصور علي حسن مدخلي لتجارة الجملة و التجزئة', '2050135726', '9531392559197097659', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(433, 'مؤسسة حكاية عبير للبطاريات', '2050136924', '4153114976981089112', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(434, 'مؤسسة أنوار الشرقية للبطاريات', '2050137528', '3435364111619599898', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(435, 'مؤسسة صالح سعيد عبدالله البريكي للبطاريات', '2050138845', '5040883175255731514', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(436, 'مؤسسة بوابة القطع للتجارة', '2050139047', '7163225187308966304', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(437, 'مؤسسة حنان سالم شينان العيسي للبطاريات', '2050140920', '9079662319282160609', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(438, 'مؤسسة علي أحمد على حكمي للبطاريات', '2051229182', '6575521781249376596', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(439, 'مؤسسة محمد عبدالعزيز احمد الراجحي للبطاريات', '2051232279', '1586710089281037218', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(440, 'مؤسسة جزء مشرق للتجارة', '2055128218', '2928532322388627857', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(441, 'مؤسسة صالح سالم المهري التجارية', '2055128239', '6655893135277758687', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(442, 'مؤسسة صالح سعيد عبدالله البريكي للبطاريات', '2055128611', '5078765298036244325', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(443, 'مؤسسة زمزم بنت علي بن محمد السليم التجارية', '2060622851', '4273490616905392614', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(444, 'مؤسسة حمد بن حميد بن بسيس الهذلي للبطاريات', '2066612073', '2796273190791410279', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(445, 'مؤسسة صابرين يحي على جعونى للمقاولات العامة', '2050137638', '1788195669433178970', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(446, 'مؤسسة البناء الدائم للمقاولات', '2051233064', '7303348822603659516', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(447, 'شركة كانو لخدمات الخزانات', '2050132527', '9417215846035488808', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(448, 'ورشة فهد سامر ضبان المطيري لصيانة المعدات', '2055127440', '7747961659585315400', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(449, 'مؤسسة إمداد الخليج للصيانة', '2050131947', '1441399187334554708', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(450, 'شركة سيمنس للطاقة', '2051231499', '8724833910785671186', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(451, 'ورشة لفات تقنية الخليج الصناعية', '2055127334', '2911371819985186300', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(452, 'ورشة الهدى الصناعية', '2055127822', '8423652528549217320', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(453, 'مؤسسة مكانكم لتقنية المعلومات', '2050133195', '8818823852523260715', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(454, 'مؤسسة شبكة المنهاج لتقنية المعلومات', '2050136861', '4020481781806832274', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(455, 'مؤسسة تزايد للاتصالات و تقنية المعلومات', '2051230025', '1857198561646245650', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(456, 'مؤسسة منطقة المستقبل للاتصالات و تقنية المعلومات', '2051230152', '9531735981063054283', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(457, 'مؤسسة استضافة مربع لتقنية المعلومات', '2051230352', '2017311525788599855', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(458, 'مؤسسة علي عدنان بن باقر الحداد للاتصالات و تقنية المعلومات', '2051230487', '9615641021936237141', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(459, 'مؤسسة كيان سوفت لتقنية المعلومات', '2051231496', '3533584662548295921', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(460, 'مؤسسة النمط الرائع لتقنية المعلومات', '2055127569', '6727797266326903715', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(461, 'مؤسسة الدكان العجيب لتقنية المعلومات', '2055128326', '7759168277574845436', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(462, 'مؤسسة اتاح لتقنية المعلومات', '2055128342', '7604510669668277686', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(463, 'مؤسسة خالد بن سعود بن دغش الهاجري لتقنية المعلومات', '2060622867', '3300328797838052110', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(464, 'فرع شركة نيلم تكنولوجيز ش ش', '2050133475', '4007881768416793252', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(465, 'شركة تربه الشمال للزراعة', '2051230913', '8167188482517448271', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(466, 'مؤسسة عصام بن عثمان بن عبدالواحد اليوسف للمقاولات العامة', '2055129205', '1885395194686981577', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(467, 'مكتب نخيل الواحة للاستشارات الادارية', '2050138141', '1862806263954824727', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(468, 'مكتب برق السمان للاستشارات الادارية', '2050140571', '7364210610766380175', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(469, 'مكتب عبدالله بن علي بن محمد الصانع للاستشارات الادارية', '2050141005', '9097477958381848111', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(470, 'مكتب ادارات المرافق للاستشارات الادارية', '2051232516', '5747913785763112354', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(471, 'مكتب عبدالعزيز محمد علي الوادعي للاستشارات الادارية', '2055128573', '5191708795554487913', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(472, 'مكتب جدا للاستشارات الادارية', '2050137977', '1310719119716090226', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(473, 'مكتب بوارق للاستشارات الادارية', '2050139902', '5795720469387286408', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(474, 'مكتب النور الاول للاستشارات الادارية', '2050140822', '1656172213741524495', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(475, 'مكتب ذياب عايد العنزي للاستشارات الادارية', '2057473065', '8770445186479496400', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(476, 'مكتب رائد بن عبدالله بن ابراهيم العجاجي للاستشارات الصناعية', '2055127799', '6156401210669529965', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(477, 'شركة بيت الخبرة للاستشارات الصناعية', '2055128220', '1593728741674626931', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(478, 'مكتب خلايا فعاله للاستشارات الفنية والمختبرات', '2050133443', '2602278484178805876', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(479, 'مكتب رواد التميز للإستشارات الفنية والمختبرات', '2050140401', '2222843564639056325', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(480, 'مكتب مشاري مطلق بن سفر العتيبي للإستشارات المالية لغير الأوراق المالية', '2057473400', '1866780037108678838', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(481, 'مكتب الحياة للإستشارات المالية لغير الأوراق المالية', '2050138059', '9017491234997356548', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(482, 'مكتب رياس للإستشارات المالية لغير الأوراق المالية', '2051233060', '6822618114781811173', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(483, 'مكتب عبدالله عبدالمحسن علي الشايب للاستشارات الهندسية', '2050133316', '1160437037334357339', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(484, 'مكتب ديوان العمارة للاستشارات الهندسية', '2050133938', '9385769592028292948', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(485, 'مكتب سامي بن علي بن عبدالله الماضي للاستشارات الهندسية', '2050134669', '5041834044974790294', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(486, 'مكتب شبكة الانجاز للاستشارات الهندسية', '2050137131', '7584500734281353402', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(487, 'مكتب رنا منيراحمد قاضي القاضي للاستشارات الهندسية', '2050137218', '3966432222149260199', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(488, 'مكتب شلال فرحان جلال الشمري للاستشارات الهندسية', '2050138906', '3885911327724972232', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(489, 'مكتب حسن محمدصغير علي فقيه للاستشارات الهندسية', '2050139949', '5256170665764109802', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(490, 'مكتب بسمه خيري عبدالحليم بدر للاستشارات الهندسية', '2050140731', '7799190686487771448', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(491, 'مكتب مدن المستقبل للاستشارات الهندسية', '2050140792', '9573672111511462779', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(492, 'مكتب نبراس احمد بن علي آل ثواب للاستشارات الهندسية', '2050141021', '2339747240654654363', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(493, 'مكتب أحمد بن عبداللطيف بن احمد البراك للاستشارات الهندسية', '2051229932', '3731935578745347667', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(494, 'مكتب المعماريون السعوديون للاستشارات الهندسية', '2051230088', '8011718931439477214', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(495, 'مكتب عمرو فريد محمد زيدان للاستشارات الهندسية', '2051230484', '5763773062502037195', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(496, 'مكتب محمد أحمد رشيد الرشيد للاستشارات الهندسية', '2051230585', '2411344352214630240', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(497, 'مكتب ارتداد للاستشارات الهندسية', '2051230629', '3447374510275160106', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(498, 'شركة تكنيكاس ريونيداس العالمية للاستشارات الهندسية شركة الشخص الواحد', '2051230837', '9278946213648950572', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(499, 'شركة الخبراء المميزين للاستشارات الهندسية', '2051231050', '4942857472276414432', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(500, 'مكتب العمارة العربية للاستشارات الهندسية', '2051231106', '2579177686178516576', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(501, 'شركة مساحة للاستشارات الهندسية', '2051231178', '6651256618682058778', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(502, 'فرع شركة الرؤية الحديثة للاستشارات الهندسية', '2051231264', '2334477789041770751', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(503, 'مكتب أنس سعيد سعدي عسيري للاستشارات الهندسية', '2051231355', '8035188549654145304', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(504, 'مكتب الارتكاز للاستشارات الهندسية', '2051231709', '1138728797803110686', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(505, 'مكتب مهند محمد القرون للاستشارات الهندسية', '2051231836', '7238577452043444388', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(506, 'مكتب راديان للاستشارات الهندسية', '2051232698', '7232769960698672561', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(507, 'شركة البيكس الشرق الاوسط للاستشارات الهندسية', '2051232805', '3985368587649323691', '   ', 1, '2022-08-18 17:46:26', '2024-01-11 01:52:20'),
(508, 'مكتب نايل بن دهلوس بن نايل الرشيد للاستشارات الهندسية', '2051232844', '2307579854054422662', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(509, 'مكتب أروى محمد احمد عسيري للاستشارات الهندسية', '2051232965', '8655427672778907829', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(510, 'مكتب شقير صعفق حاكم الدويش للاستشارات الهندسية', '2051233512', '4725827290089474927', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(511, 'مكتب دقة التصاميم للاستشارات الهندسية', '2057473341', '8169572714381232935', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(512, 'مكتب بداية للاستشارات الهندسية', '2057473547', '2782129538116669507', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(513, 'مكتب سعد بن زاهي بن درويش الشمري للاستشارات الهندسية', '2055127401', '3314601648614015964', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(514, 'مكتب المنفذ الثلاثي للاستشارات في مجال الاتصالات وتقنية المعلومات', '2050135296', '4675923385207979380', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(515, 'مكتب تكامل الذكاء والبدائل للاستشارات في مجال الاتصالات وتقنية المعلومات', '2050136455', '9028643230795427537', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(516, 'مكتب يوسف عبدالله العريفي للاستشارات في مجال الحاسب الآلي', '2050133078', '5641795379743965705', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(517, 'مكتب يوسف بن احمد بن حسن ال موسى للاستشارات في مجال الزكاة وضريبة الدخل', '2050136150', '9710120378026564686', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(518, 'مكتب ميسان للاستشارات في مجال الزكاة وضريبة الدخل', '2050137221', '9582690212356095357', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(519, 'مكتب مفلح بن دواس بن مبارك الخالدي للاستشارات في مجال الزكاة وضريبة الدخل', '2050137417', '7238569861516665316', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(520, 'مكتب لميس حسن جميل ثقه للاستشارات في مجال الزكاة وضريبة الدخل', '2051230875', '4843772045165501841', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(521, 'مكتب علي عدنان بن باقر الحداد للاستشارات في مجال الزكاة وضريبة الدخل', '2051232523', '1575331757552202237', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(522, 'مؤسسة صبا التجارية', '2050137000', '4816957411688119863', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(523, 'مؤسسة هزاع بن ناصر بن علي الشمراني التجارية', '2051230145', '7851749558891597536', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(524, 'مؤسسة رايات الاعمال التجارية', '2051231880', '2712749223784233235', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(525, 'مؤسسة العشب الاخضر التجارية', '2050132289', '4117262634426839873', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(526, 'مؤسسة فن العشب التجارية', '2050133761', '8332845763591672505', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(527, 'مؤسسة ضياء العشب التجارية', '2050138854', '9122305345294574147', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(528, 'مؤسسة وردة شامية للتجارة', '2050139710', '5951922889347255571', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(529, 'مؤسسة عشب البستان التجارية', '2050140280', '5406200512112936270', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(530, 'مؤسسة فاطمه جابر بن احمد العوض لتأجير المعدات', '2050132505', '1835199324947193847', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(531, 'مؤسسة دولية المتكاملة التجارية', '2050132371', '4149162313082090545', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(532, 'مؤسسة فهد بن محمد بن علي الزهراني للالات والمعدات', '2050139302', '8848835376714242639', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(533, 'مؤسسة سعد حسن عوده الجلاسي التجارية', '2050140440', '6920632539098559943', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(534, 'مؤسسة مرجان الشرق للتجارة', '2051229946', '6516355873072176560', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(535, 'مؤسسة مرتضى سعيد بن محمد سبيتي للتجارة', '2055127879', '2812535869461638732', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(536, 'مؤسسة بخيت عيظه الزهراني التجارية', '2066612151', '1564321416659575232', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(537, 'مؤسسة اجهزه الاطفاء للتجارة', '2050132524', '1065192173749482938', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(538, 'مؤسسة رؤيا الاعمال لاجهزة السلامة', '2050134520', '6817141594282440330', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(539, 'مؤسسة نوره بنت بلال بن سالم الدوسري التجارية', '2050135442', '1376472948839424194', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(540, 'مؤسسة علي ناصر بن محمد السلطان لاجهزة السلامة', '2050136386', '7662824430055698491', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(541, 'مؤسسة علي حسين احمد بجوي التجارية', '2050137253', '5984214417425331800', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(542, 'مؤسسة متعب بن عبدالله بن شاهر الشمري لاجهزة السلامة', '2050137318', '6961429036704742161', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(543, 'مؤسسة نسمة الخليج لاجهزة السلامة', '2050137335', '8539452151298700475', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(544, 'مؤسسة احمد سالم مران اليامي لاجهزة السلامة', '2050138379', '5298808321887337248', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(545, 'مؤسسة معجبه علي محمد آل المحاضي لاجهزة السلامة', '2051229121', '1760570840036017415', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(546, 'مؤسسة ديوان الخبر لاجهزة السلامة', '2051230554', '3447553546606453876', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(547, 'مؤسسة الفارس الخيال لاجهزة السلامة', '2051232409', '8792631139552232691', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(548, 'مؤسسة أداة المشروع للتجارة', '2055127755', '3482496929796976887', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(549, 'مؤسسة حسن أحمد يوسف الصومالي لاجهزة السلامة', '2055127877', '6748540527994728827', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(550, 'مؤسسة زين الكون التجارية', '2055128498', '2609685965942879521', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(551, 'مؤسسة عبدالرحمن مساعد ابن مخاسر الشمراني للتجارة', '2055129183', '3022799038216264467', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(552, 'مؤسسة زايد جمعان صالح الدوسري لاجهزة السلامة', '2050136285', '3103484525979064703', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(553, 'مؤسسة تداول التدفق للتجارة', '2050137831', '9645961942609225251', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(554, 'مؤسسة علي سعيد عبدالله الغامدي لاجهزة السلامة', '2050138378', '4501939513896418651', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(555, 'مؤسسة نجوم الحريق للتجارة', '2050140138', '9741110715493978645', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(556, 'شركة الخليج للانظمه الصناعية', '2051229844', '9267299597136898713', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(557, 'مؤسسة فاطمه عبدالله بن حسن المحمدعلي لصيانة المعدات', '2050136418', '5422453087164333588', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(558, 'مؤسسة الوسط البديل لصيانة المعدات', '2050141068', '6981412748095857550', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(559, 'مؤسسة موثوقة و مسؤولة للصيانة', '2051229483', '4170219671295804386', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(560, 'مؤسسة قمة التفتيش للصيانة', '2057473256', '2327645422111973752', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(561, 'مؤسسة أصول الرخام للمقاولات العامة', '2050134156', '8874264585744775457', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(562, 'مصنع أحمد عيسى بن علي الدوسري للصناعة', '2050137566', '7119247893217670386', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(563, 'مصنع عبدالخالق محمد حسين الوادعي للصناعة', '2050139237', '8686595873728173972', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(564, 'مصنع زين صالح سالم ال منجم للحديد', '2050140959', '8452684885241615816', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(565, 'مصنع نايف سعد بن مرعي القحطاني للأنابيب', '2055128950', '8557603131386632178', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(566, 'مصنع أماني نومان بن فرحان الشمري للصناعة', '2057473007', '6441134569865853318', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(567, 'مصنع عبدالله سليمان بن غريب الشمري للحديد', '2057473108', '4641500971397203288', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(568, 'شركة الفاس التجارية (شركة شخص واحد)', '2051230316', '3771339139064227457', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(569, 'مؤسسة المحيط الهادئ المتحدة للتجارة', '2051231485', '4107837443612099236', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(570, 'مؤسسة وهج الشرقية التجارية', '2055128060', '2161974845256137347', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(576, '11111', '1111', '1111', ' 95827', 1, '2024-01-16 18:28:26', '2024-01-16 18:28:26'),
(577, '1111', '11111112', '11211111', ' 111111', 1, '2024-01-19 20:46:53', '2024-01-19 20:46:53'),
(578, '33', '33', '333', 'gfhghf', 1, '2024-02-14 21:10:41', '2024-02-14 19:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `is_admin` int(11) DEFAULT 0,
  `max_list` varchar(10) NOT NULL DEFAULT '100',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `clear_pass` varchar(50) DEFAULT NULL,
  `user_2fa_enable` int(11) DEFAULT 0,
  `user_2fa_secret` varchar(50) DEFAULT NULL,
  `user_2fa_code` varchar(50) DEFAULT NULL,
  `debug` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `f_name`, `l_name`, `avatar`, `created_at`, `is_admin`, `max_list`, `is_active`, `clear_pass`, `user_2fa_enable`, `user_2fa_secret`, `user_2fa_code`, `debug`) VALUES
(1, 'aymanoz', '$2y$10$Ianl25aGLKaDwlYcaaminubcrSvU.KcnjXAWiCyuXMPXw0ctnUOhG', 'Ayman', 'Dasa', 'Untitled.ipynb', '2022-05-17 19:21:05', 1, '25', 1, '1234512345', 1, 'MWKNBQFWARLMJPNQ', '', 0),
(4, 'admin', '$2y$10$YLmOh1mihx620toUI5kH9ObzGUDVCbi3bnd2YnPwFPvj9RVlmFuSW', 'sys', 'admin', '', '2024-01-07 14:33:17', 1, '100', 1, '123456', 1, 'UCIZBRRRGVHTBMYV', NULL, 0),
(7, 'adomom', '$2y$10$jJ7.cCywCGJCUY.DWhFbxO/DcSNKS.ycw7tFcl4tH8AtopkVgrzLK', 'Ahmad', 'Dooom', '', '2024-01-13 12:12:59', 0, '100', 1, '123456', 0, NULL, NULL, 0),
(8, 'abc', '$2y$10$.cevWGeGomvl/4pdiL586uLc8osYKHIRP6Pz2dqJj4CNC/TsHmYO.', 'abc', 'abc', '', '2024-02-18 13:05:00', 0, '100', 1, '1234567890', 1, 'AZOSDTAPUNTFMIAF', NULL, 1),
(9, 'syed', '$2y$10$zZSslISjSOUeAJHznVSHC.y9uXzovgo3E9XK5rn0MpdXagdpX4P7e', 'Syed', 'Asad', '', '2024-02-18 14:25:57', 0, '100', 1, 'Asad1415', 1, 'PDGGSFKICJNCPJME', NULL, 0),
(10, 'Samer', '$2y$10$5.PTuDicdDhsZRiaFV3WIO3DOB3EbQDHQ5Bs9bZ2uSDWfYcDnGk22', 'Samer', 'quraish', '', '2024-02-20 16:36:23', 0, '100', 1, 'Retal123', 1, 'PVLRHQQUUHVXLXSV', NULL, 0),
(11, 'Gnader81', '$2y$10$COhMGamDZVnd2SMXldgKgOPrekpn3r9ys2ON4KGCReH7aN8ktwJj2', 'Gamal', 'Nader', '', '2024-02-20 16:40:34', 0, '100', 1, 'G81nader', 1, 'HTTPNRASDWTPCRSH', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`alog_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`AgentID`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `sappo`
--
ALTER TABLE `sappo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_ID`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`ShipID`),
  ADD UNIQUE KEY `IMO` (`IMO`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cr` (`cr`),
  ADD UNIQUE KEY `vat` (`vat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `alog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54873;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `AgentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sappo`
--
ALTER TABLE `sappo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `ShipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15033;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=579;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
