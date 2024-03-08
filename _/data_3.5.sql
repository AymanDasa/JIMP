-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 03:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+03:00";


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

--
-- Dumping data for table `activitylog`
--

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
(255, '', 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '', 'JABRI4582', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(256, '', 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '', 'AET.4030163749', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(257, '', 'الشركة الملاحية للوكالات البحرية', 'MARITIME COMPANY FOR MARINE AGENCIES', '', 'MRTM4200052', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(258, '', 'شركة الخماسية', 'AL KHOMASIA SHHIPING AGENCIES', '', 'KHO4581', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(259, '', 'شركة التكامل الدولية للملاحة', 'AL TAKAMUL MARITIME CO. LTD', '', '403022', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(260, '', 'شركة مماس لخدمات الموانيء المحدودة', 'MAMAS PORT SERVICES CO. LTD', '', 'MAM4222', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(261, '', 'السنديان الماسي', 'ALSINDYAN ALMASY', '', 'SIND4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(262, '', 'الشركة السعودية للملاحةوالخدمات البحرية', 'SAUDI SHIPPING MARITIME SERVICES CO.', '', 'SSM', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(263, '', 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '', 'EDM4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0);

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
-- Stand-in structure for view `full_invoice_view`
-- (See below for the actual view)
--
CREATE TABLE `full_invoice_view` (
`InvoiceID` int(10)
,`ShipID` int(10)
,`ShipName` varchar(50)
,`ShipWeight` int(10)
,`AgentID` int(10)
,`AgentNameAr` text
,`AgentNameEn` text
,`ServiceType` varchar(50)
,`ServiceTypeName` varchar(50)
,`ServiceTypeFactor` double
,`InvoiceDate` datetime
,`InvoiceDateT` varchar(50)
,`ArrivalDate` datetime
,`ArrivalDateT` varchar(50)
,`DepartureDate` datetime
,`DepartureDateT` varchar(50)
,`PeriodDays` int(10)
,`MSericeBathPrice` double
,`AnchorageEntry` datetime
,`AnchorageEntryT` varchar(50)
,`AnchorageLeave` datetime
,`AnchorageLeaveT` varchar(50)
,`AnchorageDays` int(10)
,`MSericeAnchoragePrice` double
,`MovePort1` varchar(50)
,`MovePort2` varchar(50)
,`MovePort3` varchar(50)
,`MovePortPrice` double
,`TripNo` varchar(50)
,`DockingNo` varchar(50)
,`RouteNo` varchar(50)
,`ShiftedNo` varchar(50)
,`Reason` text
,`MSFraction1` double
,`MSFraction2` double
,`MSFraction3` double
,`MService1` varchar(50)
,`MService2` varchar(50)
,`MService3` varchar(50)
,`MSericeInPrice` double
,`MSericeOutPrice` double
,`MSTOTAL` double
,`SScode1` varchar(9)
,`Description1` varchar(200)
,`SSName1` text
,`SSUnit1` text
,`SSQut1` text
,`SSPrice1` text
,`SSNote1` text
,`SSUPrice1` text
,`SScode2` varchar(9)
,`Description2` varchar(200)
,`SSName2` text
,`SSUnit2` text
,`SSQut2` text
,`SSPrice2` text
,`SSNote2` text
,`SSUPrice2` text
,`SScode3` varchar(9)
,`Description3` varchar(200)
,`SSName3` text
,`SSUnit3` text
,`SSQut3` text
,`SSPrice3` text
,`SSNote3` text
,`SSUPrice3` text
,`SScode4` varchar(9)
,`Description4` varchar(200)
,`SSName4` text
,`SSUnit4` text
,`SSQut4` text
,`SSPrice4` text
,`SSNote4` text
,`SSUPrice4` text
,`SScode5` varchar(9)
,`Description5` varchar(200)
,`SSUnit5` text
,`SSQut5` text
,`SSName5` text
,`SSNote5` text
,`SSUPrice5` text
,`SSPrice5` text
,`SSTOTAL` double
,`MGPrice` double
,`TOTAL` double
,`VAT` double
,`is_VAT` int(4)
,`Status` int(10)
,`VAT_TOTAL` double
);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES
(1, 'name_user1', 'اسم معد البيان', 'text'),
(2, 'job_user1', 'معد البيان', 'text'),
(3, 'name_user2', 'اسم مدير المحاسبة', 'text'),
(4, 'job_user2', 'مدير المحاسبة', 'text'),
(5, 'name_user3', 'اسم المدير المالي', 'text'),
(6, 'job_user3', 'المدير المالي', 'text'),
(7, 'name_user4', NULL, 'text'),
(8, 'job_user4', NULL, 'text'),
(9, 'name_user5', NULL, 'text'),
(10, 'job_user5', NULL, 'text'),
(11, 'IBAN', 'SA7745000000242379501001', 'text'),
(12, 'invoiceStart', 'JD-', 'text'),
(13, 'com_fax', NULL, 'text'),
(14, 'vat', '15', 'text'),
(15, 'AdressMamwani', '<span style=\"font-size:8pt\" lang=\"ar-SA\">\nالمملكة العربية السعودية \n<br>\nالهيئة العامة للموانئ\n<br>\nميناء جدة الإسلامي\n<br>\nwww.ports.gov.sa\n</span>', 'textarea '),
(16, 'AdressCompany', '<span lang=\"ar-SA\">   \nالمملكة العربية السعودية <br>\nشركة الزامل للخدمات البحرية <br>\n<span lang=\"ar-SA\">هـاتف :8696300 013</span>\n<br>\n<span lang=\"ar-SA\">فـاكس :8574202 013</span>      \n</span>', 'textarea '),
(17, 'footerAR', '\nفيما يلي تفاصيل الحساب المذكور مع  <br>   البنك السعودي الأول \n<br> \nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء  \n<br> \nرقم السجل التجاري: 4030534211 \n<br>\nرقم الحساب: 242-379501-001 \n<br>\nSA7745000000242379501001 : رقم الايبان\n<br>\nإسم البنك: البنك السعودي الأول\n<br>\nSABBSAR : رمز سويفت \n<br>\nSAR : العملة\n<br> \nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء  \n<br> \nرقم السجل التجاري: 4030534211 \n<br>\nرقم الحساب: 242-379501-001 \n<br>\nSA77450', 'text'),
(18, 'footerEN', 'Below are the details of the aforementioned account with <br> First Saudi Bank   \n<br>\nAccount name: West Coast Port Services Company\n<br>\nC.R number: 4030534211 \n<br>\n	Account number: 001-379501-242\n<br>\nIBAN number: SA7745000000242379501001 \n<br>\nBank name: First Saudi Bank\n<br>\nCurrency: SAR \n<br>\nSWIFT code: SABBSAR', 'text'),
(19, 'mawniLogo', 'mawani.png', 'text'),
(20, 'companyLogo', 'logo_s1.png', 'text'),
(21, 'company_vat', '311940454500003', 'text'),
(22, 'port_name', 'ميناء جدة الإسلامي', 'text');

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
(2, 'اسم معد البيان', 'معد البيان', 'اسم مدير المحاسبة', 'مدير المحاسبة', 'اسم المدير المالي', 'المدير المالي', 'اسم مدير تشغي الميناء', 'مدير تشغيل الميناء', '', '', 'SA123456798000132465798000', '', '', '', '15', '');

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

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `ShipID`, `ShipName`, `ShipWeight`, `AgentID`, `AgentNameAr`, `AgentNameEn`, `ServiceType`, `ServiceTypeName`, `ServiceTypeFactor`, `InvoiceDate`, `InvoiceDateT`, `InvoiceDateH`, `ArrivalDate`, `ArrivalDateT`, `ArrivalDateH`, `DepartureDate`, `DepartureDateT`, `DepartureDateH`, `PeriodDays`, `AnchorageEntry`, `AnchorageEntryT`, `AnchorageEntryH`, `AnchorageLeave`, `AnchorageLeaveT`, `AnchorageLeaveH`, `AnchorageDays`, `MSericeAnchoragePrice`, `MovePort1`, `MovePort2`, `MovePort3`, `TripNo`, `DockingNo`, `RouteNo`, `ShiftedNo`, `Reason`, `Note`, `MSFraction1`, `MSFraction2`, `MSFraction3`, `MService1`, `MService2`, `MService3`, `CA0`, `CA1`, `CA2`, `CA3`, `MSericeInPrice`, `CB0`, `CB1`, `CB2`, `CB3`, `MSericeOutPrice`, `MA`, `MA0`, `MA1`, `MA2`, `MA3`, `MB`, `MB0`, `MB1`, `MB2`, `MB3`, `MC`, `MC0`, `MC1`, `MC2`, `MC3`, `MovePortPrice`, `MSericeBathPrice`, `MSNote1`, `MSNote2`, `MSNote3`, `MGPrice`, `MSTOTAL`, `SService1`, `SService2`, `SService3`, `SService4`, `SService5`, `SServiceCode1`, `SServiceCode2`, `SServiceCode3`, `SServiceCode4`, `SServiceCode5`, `SSName1`, `SSName2`, `SSName3`, `SSName4`, `SSName5`, `SSNote1`, `SSNote2`, `SSNote3`, `SSNote4`, `SSNote5`, `SSUnit1`, `SSUnit2`, `SSUnit3`, `SSUnit4`, `SSUnit5`, `SSQut1`, `SSQut2`, `SSQut3`, `SSQut4`, `SSQut5`, `SSUPrice1`, `SSUPrice2`, `SSUPrice3`, `SSUPrice4`, `SSUPrice5`, `SSPrice1`, `SSPrice2`, `SSPrice3`, `SSPrice4`, `SSPrice5`, `SSTOTAL`, `TOTAL`, `is_VAT`, `VAT`, `VAT_TOTAL`, `Status`, `OracleCode`) VALUES
(1, 15032, 'TOPAZ LENA', 3183, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-20 11:05:00', '11:05', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 01:29:00', '01:29', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 31.11, 0, 5406.11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 5406.11, 5406.11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5406.11, 1, 0, 5406.11, 800, ''),
(2, 15033, 'AMMAN', 5453, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-20 11:26:00', '11:26', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 00:38:00', '00:38', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '17', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 417.01, 0, 5792.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 5792.01, 5792.01, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5792.01, 1, 0, 5792.01, 800, ''),
(3, 15034, 'DA HONG XIA', 20454, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-02-20 11:46:00', '11:46', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 02:29:00', '02:29', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 545.4, 7960.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 7960.4, 7960.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 7960.4, 1, 0, 7960.4, 800, ''),
(142, 15147, 'TARIK', 2, 261, 'السنديان الماسي', 'ALSINDYAN ALMASY', '1', 'عادية', 1, '2024-02-29 13:30:00', '13:30', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '13', '', '', '', '', '', '', '', '', '', 'طول 20 قدما أو أقل', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '100', '', '', '', '', '1100', '', '', '', '', 1100, 1100, 1, 165, 1265, 800, ''),
(143, 15148, 'ALMOHAMADIAH', 3, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 13:33:00', '13:33', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '13', '', '', '', '', '', '', '', '', '', 'طول 20 قدما أو أقل', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '100', '', '', '', '', '1100', '', '', '', '', 1100, 1100, 1, 165, 1265, 800, ''),
(144, 15149, 'RIZQ', 4, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 13:34:00', '13:34', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '14', '', '', '', '', '', '', '', '', '', 'أطول من 20 قدما و حتى 40 قدما', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '200', '', '', '', '', '2200', '', '', '', '', 2200, 2200, 1, 330, 2530, 800, ''),
(145, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:39:00', '13:39', '1445/08/19', '2024-02-22 21:15:00', '21:15', '1445/08/12', '2024-02-22 22:29:00', '22:29', '1445/08/12', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '2', '', '', '', '', '2200', '', '', '', '', '4400', '', '', '', '', 4400, 4400, 1, 0, 4400, 800, ''),
(146, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:41:00', '13:41', '1445/08/19', '2024-02-23 08:00:00', '08:00', '1445/08/13', '2024-02-23 08:30:00', '08:30', '1445/08/13', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '41', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', 'JED-32', 'JED-33', '', '', '', 'ساعة', 'ساعة', '', '', '', '1', '1', '', '', '', '2200', '2200', '', '', '', '2200', '2200', '', '', '', 4400, 4400, 1, 0, 4400, 800, ''),
(147, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:43:00', '13:43', '1445/08/19', '2024-02-25 20:10:00', '20:10', '1445/08/15', '2024-02-25 22:55:00', '22:55', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '2200', '', '', '', '', '2200', '', '', '', '', 2200, 2200, 1, 0, 2200, 800, ''),
(148, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:46:00', '13:46', '1445/08/19', '2024-02-25 15:10:00', '15:10', '1445/08/15', '2024-02-25 16:30:00', '16:30', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '2200', '', '', '', '', '2200', '', '', '', '', 2200, 2200, 1, 0, 2200, 800, ''),
(149, 15132, 'SANTA INES', 86601, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-29 13:48:00', '13:48', '1445/08/19', '2024-02-26 12:00:00', '12:00', '1445/08/16', '2024-02-26 14:30:00', '14:30', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '39', '', '', '', '', '', '', '', '', '', 'حتى 1200 حصان', '', '', '', '', 'JED-20', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '600', '', '', '', '', '600', '', '', '', '', 600, 600, 1, 0, 600, 800, '');

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
(35, '1-10-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(36, '3-2-1', 'استخدام رصيف غير تجاري حتى 30 م', '', 0, 'يوم', 'Day', 0, 1, 0, 100, 0, ''),
(37, '3-2-2', 'استخدام رصيف غير تجاري اكثر من 30 حتى 40 م', '', 0, 'يوم', 'Day', 0, 1, 0, 200, 0, ''),
(38, '3-2-3', 'استخدام رصيف غير تجاري أكثر من 40 م', '', 0, 'يوم', 'Day', 0, 1, 0, 500, 0, ''),
(39, '2-2-1', 'حتى 1200 حصان', '', 0, 'ساعة', 'Hour', 0, 1, 0, 660, 0, ''),
(40, '2-2-2', 'اكثر من 1200 حصان الى 2000 حصان', '', 0, 'ساعة', 'Hour', 0, 1, 0, 1650, 0, ''),
(41, '2-2-3', 'اكثر من 2000 حصان الى 4000 حصان', '', 0, 'ساعة', 'Hour', 0, 1, 0, 2200, 0, ''),
(42, '2-2-4', 'اكثر من 4000', '', 0, 'ساعة', 'Hour', 0, 1, 0, 3300, 0, '');

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
(14983, '198982158d', 'HUANG UPs', 16000, 4, 1, 'HUANG UPs'),
(14984, '9539377 ', 'BASILISK', 1500, 9, 0, ''),
(14985, '432270533 ', 'AL-HAJI KASIM', 524, 4, 0, ''),
(15148, '3', 'ALMOHAMADIAH', 3, 249, 1, ''),
(15149, '4', 'RIZQ', 4, 249, 1, ''),
(15150, '101', 'ALBARQ ALSAUDI', 101, 263, 0, '');

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
(292, 'مؤسسة الرصد المتابعة لصيانة المعدات', '2051229255', '8609902341617732867', ' ', 0, '2022-08-18 14:46:26', '2022-08-18 14:09:34'),
(567, 'مصنع عبدالله سليمان بن غريب الشمري للحديد', '2057473108', '4641500971397203288', NULL, 1, '2022-08-18 14:46:26', '2022-08-18 14:46:26'),
(568, 'شركة الفاس التجارية (شركة شخص واحد)', '2051230316', '3771339139064227457', NULL, 1, '2022-08-18 14:46:26', '2022-08-18 14:46:26'),
(569, 'مؤسسة المحيط الهادئ المتحدة للتجارة', '2051231485', '4107837443612099236', NULL, 1, '2022-08-18 14:46:26', '2022-08-18 14:46:26'),
(570, 'مؤسسة وهج الشرقية التجارية', '2055128060', '2161974845256137347', NULL, 1, '2022-08-18 14:46:26', '2022-08-18 14:46:26');

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
(1, 'aymanoz', '$2y$10$Ianl25aGLKaDwlYcaaminubcrSvU.KcnjXAWiCyuXMPXw0ctnUOhG', 'Ayman', 'Dasa', '1_aymanoz.png', '2022-05-17 19:21:05', 1, '25', 1, '1234512345', 1, 'MWKNBQFWARLMJPNQ', '', 0),
(4, 'admin', '$2y$10$YLmOh1mihx620toUI5kH9ObzGUDVCbi3bnd2YnPwFPvj9RVlmFuSW', 'sys', 'admin', '', '2024-01-07 14:33:17', 1, '100', 1, '123456', 1, 'UCIZBRRRGVHTBMYV', NULL, 0),
(7, 'adomom', '$2y$10$jJ7.cCywCGJCUY.DWhFbxO/DcSNKS.ycw7tFcl4tH8AtopkVgrzLK', 'Ahmad', 'Dooom', '', '2024-01-13 12:12:59', 0, '100', 1, '123456', 0, NULL, NULL, 0),
(8, 'abc', '$2y$10$.cevWGeGomvl/4pdiL586uLc8osYKHIRP6Pz2dqJj4CNC/TsHmYO.', 'abc', 'abc', '', '2024-02-18 13:05:00', 0, '100', 1, '1234567890', 1, 'AZOSDTAPUNTFMIAF', NULL, 1),
(9, 'syed', '$2y$10$zZSslISjSOUeAJHznVSHC.y9uXzovgo3E9XK5rn0MpdXagdpX4P7e', 'Syed', 'Asad', '9_240229113631.png', '2024-02-18 14:25:57', 0, '100', 1, 'Asad1415', 1, 'PDGGSFKICJNCPJME', NULL, 0),
(10, 'Samer', '$2y$10$5.PTuDicdDhsZRiaFV3WIO3DOB3EbQDHQ5Bs9bZ2uSDWfYcDnGk22', 'Samer', 'quraish', '', '2024-02-20 16:36:23', 0, '100', 1, 'Retal123', 1, 'PVLRHQQUUHVXLXSV', NULL, 0),
(11, 'Gnader81', '$2y$10$COhMGamDZVnd2SMXldgKgOPrekpn3r9ys2ON4KGCReH7aN8ktwJj2', 'Gamal', 'Nader', '', '2024-02-20 16:40:34', 0, '100', 1, 'G81nader', 1, 'HTTPNRASDWTPCRSH', NULL, 0);

-- --------------------------------------------------------

--
-- Structure for view `full_invoice_view`
--
DROP TABLE IF EXISTS `full_invoice_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `full_invoice_view`  AS SELECT `i`.`InvoiceID` AS `InvoiceID`, `i`.`ShipID` AS `ShipID`, `i`.`ShipName` AS `ShipName`, `i`.`ShipWeight` AS `ShipWeight`, `i`.`AgentID` AS `AgentID`, `i`.`AgentNameAr` AS `AgentNameAr`, `i`.`AgentNameEn` AS `AgentNameEn`, `i`.`ServiceType` AS `ServiceType`, `i`.`ServiceTypeName` AS `ServiceTypeName`, `i`.`ServiceTypeFactor` AS `ServiceTypeFactor`, `i`.`InvoiceDate` AS `InvoiceDate`, `i`.`InvoiceDateT` AS `InvoiceDateT`, `i`.`ArrivalDate` AS `ArrivalDate`, `i`.`ArrivalDateT` AS `ArrivalDateT`, `i`.`DepartureDate` AS `DepartureDate`, `i`.`DepartureDateT` AS `DepartureDateT`, `i`.`PeriodDays` AS `PeriodDays`, `i`.`MSericeBathPrice` AS `MSericeBathPrice`, `i`.`AnchorageEntry` AS `AnchorageEntry`, `i`.`AnchorageEntryT` AS `AnchorageEntryT`, `i`.`AnchorageLeave` AS `AnchorageLeave`, `i`.`AnchorageLeaveT` AS `AnchorageLeaveT`, `i`.`AnchorageDays` AS `AnchorageDays`, `i`.`MSericeAnchoragePrice` AS `MSericeAnchoragePrice`, `i`.`MovePort1` AS `MovePort1`, `i`.`MovePort2` AS `MovePort2`, `i`.`MovePort3` AS `MovePort3`, `i`.`MovePortPrice` AS `MovePortPrice`, `i`.`TripNo` AS `TripNo`, `i`.`DockingNo` AS `DockingNo`, `i`.`RouteNo` AS `RouteNo`, `i`.`ShiftedNo` AS `ShiftedNo`, `i`.`Reason` AS `Reason`, `i`.`MSFraction1` AS `MSFraction1`, `i`.`MSFraction2` AS `MSFraction2`, `i`.`MSFraction3` AS `MSFraction3`, `i`.`MService1` AS `MService1`, `i`.`MService2` AS `MService2`, `i`.`MService3` AS `MService3`, `i`.`MSericeInPrice` AS `MSericeInPrice`, `i`.`MSericeOutPrice` AS `MSericeOutPrice`, `i`.`MSTOTAL` AS `MSTOTAL`, `s1`.`code` AS `SScode1`, `s1`.`Description` AS `Description1`, `i`.`SSName1` AS `SSName1`, `i`.`SSUnit1` AS `SSUnit1`, `i`.`SSQut1` AS `SSQut1`, `i`.`SSPrice1` AS `SSPrice1`, `i`.`SSNote1` AS `SSNote1`, `i`.`SSUPrice1` AS `SSUPrice1`, `s2`.`code` AS `SScode2`, `s2`.`Description` AS `Description2`, `i`.`SSName2` AS `SSName2`, `i`.`SSUnit2` AS `SSUnit2`, `i`.`SSQut2` AS `SSQut2`, `i`.`SSPrice2` AS `SSPrice2`, `i`.`SSNote2` AS `SSNote2`, `i`.`SSUPrice2` AS `SSUPrice2`, `s3`.`code` AS `SScode3`, `s3`.`Description` AS `Description3`, `i`.`SSName3` AS `SSName3`, `i`.`SSUnit3` AS `SSUnit3`, `i`.`SSQut3` AS `SSQut3`, `i`.`SSPrice3` AS `SSPrice3`, `i`.`SSNote3` AS `SSNote3`, `i`.`SSUPrice3` AS `SSUPrice3`, `s4`.`code` AS `SScode4`, `s4`.`Description` AS `Description4`, `i`.`SSName4` AS `SSName4`, `i`.`SSUnit4` AS `SSUnit4`, `i`.`SSQut4` AS `SSQut4`, `i`.`SSPrice4` AS `SSPrice4`, `i`.`SSNote4` AS `SSNote4`, `i`.`SSUPrice4` AS `SSUPrice4`, `s5`.`code` AS `SScode5`, `s5`.`Description` AS `Description5`, `i`.`SSUnit5` AS `SSUnit5`, `i`.`SSQut5` AS `SSQut5`, `i`.`SSName5` AS `SSName5`, `i`.`SSNote5` AS `SSNote5`, `i`.`SSUPrice5` AS `SSUPrice5`, `i`.`SSPrice5` AS `SSPrice5`, `i`.`SSTOTAL` AS `SSTOTAL`, `i`.`MGPrice` AS `MGPrice`, `i`.`TOTAL` AS `TOTAL`, `i`.`VAT` AS `VAT`, `i`.`is_VAT` AS `is_VAT`, `i`.`Status` AS `Status`, `i`.`VAT_TOTAL` AS `VAT_TOTAL` FROM (((((`invoice` `i` left join `services` `s1` on(cast(`i`.`SService1` as unsigned) = `s1`.`Service_ID`)) left join `services` `s2` on(cast(`i`.`SService2` as unsigned) = `s2`.`Service_ID`)) left join `services` `s3` on(cast(`i`.`SService3` as unsigned) = `s3`.`Service_ID`)) left join `services` `s4` on(cast(`i`.`SService4` as unsigned) = `s4`.`Service_ID`)) left join `services` `s5` on(cast(`i`.`SService5` as unsigned) = `s5`.`Service_ID`))  ;

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
-- Indexes for table `info`
--
ALTER TABLE `info`
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
  MODIFY `alog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55117;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `AgentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

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
  MODIFY `Service_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `ShipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15151;

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
 