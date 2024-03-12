ALTER TABLE `activitylog` CHANGE `alog_time` `alog_time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP; 

CREATE TABLE `credit` (
  `CreditID` int(10) NOT NULL,
  `InvoiceID` int(10) NOT NULL,
  `ShipID` int(10) NOT NULL,
  `AgentID` int(10) NOT NULL,
  `CreditDate` datetime NOT NULL DEFAULT current_timestamp(),
  `InvoiceDate` text NOT NULL,
  `reason` text DEFAULT NULL,
  `Note` text DEFAULT NULL,
  `MSTOTAL` double NOT NULL DEFAULT 0,
  `SSTOTAL` double NOT NULL DEFAULT 0,
  `TOTAL` double NOT NULL DEFAULT 0,
  `VAT` double NOT NULL DEFAULT 0,
  `VAT_TOTAL` double NOT NULL DEFAULT 0,
  `Status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
 
ALTER TABLE `credit`
  ADD PRIMARY KEY (`CreditID`);
 
ALTER TABLE `credit`
  MODIFY `CreditID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
 
 