 
--
-- Table structure for table `sslines`
--

CREATE TABLE `sslines` (
  `ss_id` int(4) NOT NULL,
  `ss_Invoice` int(10) NOT NULL,
  `ss_Description` varchar(100) NOT NULL,
  `ss_DescriptionEn` varchar(200) NOT NULL,
  `ss_Unit` varchar(100) NOT NULL,
  `ss_code` varchar(9) NOT NULL DEFAULT '0',
  `ss_Qut` double NOT NULL,
  `ss_UPrice` double NOT NULL,
  `ss_Price` double NOT NULL,
  `ss_Cost` double NOT NULL,
  `ss_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
 
ALTER TABLE `sslines`
  ADD PRIMARY KEY (`ss_id`);
 AUTO_INCREMENT for table `sslines` 
ALTER TABLE `sslines`
  MODIFY `ss_id` int(4) NOT NULL AUTO_INCREMENT; 