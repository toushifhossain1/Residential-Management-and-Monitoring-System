-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 12:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `HouseCertificationNo` varchar(256) NOT NULL,
  `BuildingName` varchar(256) DEFAULT NULL,
  `BuildYear` int(4) NOT NULL,
  `RealStateDeveloper` varchar(256) DEFAULT NULL,
  `InsuranceNo` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `NoOfFloors` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`HouseCertificationNo`, `BuildingName`, `BuildYear`, `RealStateDeveloper`, `InsuranceNo`, `Location`, `NoOfFloors`) VALUES
('DHK1217SB478', 'Green Valley', 1992, 'Sheltech', 'DLIC1217SB478\r\n', '478/2, DIT Road, Malibag, Dhaka 1217', 5);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `ComplainSurrogateKey` int(16) NOT NULL,
  `RenteeID` int(4) NOT NULL,
  `ComplainMessage` text NOT NULL,
  `DateOfComplain` date NOT NULL,
  `FeedbackOfComplain` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`ComplainSurrogateKey`, `RenteeID`, `ComplainMessage`, `DateOfComplain`, `FeedbackOfComplain`) VALUES
(1, 2001, 'working', '2023-12-10', 0),
(2, 2001, 'Lightbulb is not working', '2023-12-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `FlatNo` varchar(4) NOT NULL,
  `NoOfRooms` int(2) NOT NULL,
  `NoOfBalcony` int(1) NOT NULL,
  `NoOfWashroom` int(1) NOT NULL,
  `Area` varchar(16) NOT NULL,
  `RentAmount` int(8) DEFAULT NULL,
  `HouseCertificationNo` varchar(256) NOT NULL,
  `OwnershipIdentityNumber` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`FlatNo`, `NoOfRooms`, `NoOfBalcony`, `NoOfWashroom`, `Area`, `RentAmount`, `HouseCertificationNo`, `OwnershipIdentityNumber`) VALUES
('B1', 4, 2, 2, '2400 sq ft', 24000, 'DHK1217SB478', NULL),
('B2', 4, 2, 2, '2400 sq ft', 24000, 'DHK1217SB478', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flatowner`
--

CREATE TABLE `flatowner` (
  `OwnershipIdentityNumber` varchar(256) NOT NULL,
  `DateOfOwnership` date NOT NULL,
  `FlatOwnerName` varchar(32) NOT NULL,
  `FlatOwnerGender` varchar(8) NOT NULL,
  `FlatOwnerPhoneNo` varchar(16) NOT NULL,
  `FlatOwnerEmail` varchar(256) NOT NULL,
  `FlatOwnerDOB` date NOT NULL,
  `FlatOwnerNID` int(17) NOT NULL,
  `FlatNo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flatowner`
--

INSERT INTO `flatowner` (`OwnershipIdentityNumber`, `DateOfOwnership`, `FlatOwnerName`, `FlatOwnerGender`, `FlatOwnerPhoneNo`, `FlatOwnerEmail`, `FlatOwnerDOB`, `FlatOwnerNID`, `FlatNo`) VALUES
('19216801', '2023-12-05', 'Nilufa', 'Female', '12', 'nilufa@gmail.com', '2023-12-05', 12321, 'B2'),
('255255254', '2023-12-10', 'Richard', 'Male', '123456', 'Richard@gmail.com', '1988-07-06', 97984453, 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `flatownerstate`
--

CREATE TABLE `flatownerstate` (
  `OwnershipIdentityNumber` varchar(256) NOT NULL,
  `RenterID` int(4) DEFAULT NULL,
  `SOID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flatownerstate`
--

INSERT INTO `flatownerstate` (`OwnershipIdentityNumber`, `RenterID`, `SOID`) VALUES
('19216801', NULL, 3001),
('255255254', 1001, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE `guard` (
  `GuardID` int(4) NOT NULL,
  `GuardName` varchar(32) NOT NULL,
  `ShiftDay` tinyint(1) NOT NULL,
  `GuardAddress` varchar(256) NOT NULL,
  `GuardNID` int(17) NOT NULL,
  `HouseCertificationNo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`GuardID`, `GuardName`, `ShiftDay`, `GuardAddress`, `GuardNID`, `HouseCertificationNo`) VALUES
(5001, 'Kashem', 1, 'noakhali', 452133, 'DHK1217SB478');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ManagerID` int(4) NOT NULL,
  `HouseCertificationNo` varchar(256) NOT NULL,
  `ManagerName` varchar(32) NOT NULL,
  `ManagerPhoneNo` varchar(16) NOT NULL,
  `ManagerAddress` varchar(256) NOT NULL,
  `ManagerNID` int(17) NOT NULL,
  `ManagerDOB` date NOT NULL,
  `ManagerSalary` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ManagerID`, `HouseCertificationNo`, `ManagerName`, `ManagerPhoneNo`, `ManagerAddress`, `ManagerNID`, `ManagerDOB`, `ManagerSalary`) VALUES
(4001, 'DHK1217SB478', 'Sohel', ' 123', '2324,Dit Road', 43247834, '2023-12-05', 20000),
(4002, 'DHK1217SB478', 'Sohel', ' 123', '2324,Dit Road', 43247834, '2023-12-05', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `managertask`
--

CREATE TABLE `managertask` (
  `ManagerTaskID` int(11) NOT NULL,
  `TaskDescription` text DEFAULT NULL,
  `TaskLocation` varchar(255) DEFAULT NULL,
  `TaskPriority` enum('Low','Medium','High') DEFAULT NULL,
  `TaskDueDate` date DEFAULT NULL,
  `AssignedBy` varchar(11) DEFAULT NULL,
  `FlatNo` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managertask`
--

INSERT INTO `managertask` (`ManagerTaskID`, `TaskDescription`, `TaskLocation`, `TaskPriority`, `TaskDueDate`, `AssignedBy`, `FlatNo`) VALUES
(1, 'anything', 'anywhere', 'High', '2023-12-09', 'Nilufa', 'B1'),
(2, 'Fix the lighting on Flat B1', 'B1', 'Medium', '2023-12-12', 'Richard', 'B2'),
(3, 'Water pipe is not working', 'C3', 'High', '2023-12-10', 'Nilufa', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` varchar(16) NOT NULL,
  `RenterID` int(4) NOT NULL,
  `RenteeID` int(4) NOT NULL,
  `ServantID` int(4) NOT NULL,
  `Amount` int(8) NOT NULL,
  `DateOfPayment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentee`
--

CREATE TABLE `rentee` (
  `RenteeID` int(4) NOT NULL,
  `RenteeName` varchar(32) NOT NULL,
  `RenteeGender` varchar(8) NOT NULL,
  `RenteePhoneNo` varchar(16) NOT NULL,
  `RenteeEmail` varchar(256) NOT NULL,
  `RenteeDOB` date NOT NULL,
  `RenteeNID` int(17) NOT NULL,
  `RenteeOccupation` varchar(24) DEFAULT NULL,
  `PaymentMobileNo` varchar(16) NOT NULL,
  `PaymentBankAccountNo` varchar(12) NOT NULL,
  `FlatNo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentee`
--

INSERT INTO `rentee` (`RenteeID`, `RenteeName`, `RenteeGender`, `RenteePhoneNo`, `RenteeEmail`, `RenteeDOB`, `RenteeNID`, `RenteeOccupation`, `PaymentMobileNo`, `PaymentBankAccountNo`, `FlatNo`) VALUES
(2001, 'TOUSHIF HOSSAIN', 'Male', '12121', 'toushif.hossain.1@gmail.com', '1999-05-07', 12345678, 'student', '01621748363', '19216801', 'B1');

-- --------------------------------------------------------

--
-- Table structure for table `renteeinformmanager`
--

CREATE TABLE `renteeinformmanager` (
  `ManagerTaskID` int(11) NOT NULL,
  `RenteeID` int(11) DEFAULT NULL,
  `ComplainMessage` text DEFAULT NULL,
  `DateOfComplain` date DEFAULT NULL,
  `LocationOfIncident` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renteeinformmanager`
--

INSERT INTO `renteeinformmanager` (`ManagerTaskID`, `RenteeID`, `ComplainMessage`, `DateOfComplain`, `LocationOfIncident`) VALUES
(10, 2001, 'informing manager', '2023-12-10', 'B1');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `RenterID` int(4) NOT NULL,
  `LeaseStartDate` date NOT NULL,
  `PaymentMobileNo` varchar(16) DEFAULT NULL,
  `MonthlyRentAmount` int(16) DEFAULT NULL,
  `PaymentBankAccountNo` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`RenterID`, `LeaseStartDate`, `PaymentMobileNo`, `MonthlyRentAmount`, `PaymentBankAccountNo`) VALUES
(1001, '2023-02-10', '01621748363', 40000, 192255255);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `RulesStatedSurrogateKey` int(11) NOT NULL,
  `OwnershipIdentityNumber` varchar(256) NOT NULL,
  `ManagerID` int(4) DEFAULT NULL,
  `RenteeID` int(4) DEFAULT NULL,
  `GuardID` int(4) DEFAULT NULL,
  `DateOfRuleState` date NOT NULL DEFAULT current_timestamp(),
  `StatedRules` text NOT NULL,
  `Feedback` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`RulesStatedSurrogateKey`, `OwnershipIdentityNumber`, `ManagerID`, `RenteeID`, `GuardID`, `DateOfRuleState`, `StatedRules`, `Feedback`) VALUES
(1, '19216801', NULL, NULL, NULL, '2023-12-10', 'naothingg', NULL),
(2, '19216801', NULL, NULL, NULL, '2023-12-10', 'working', NULL),
(7, '255255254', NULL, NULL, NULL, '2023-12-10', 'Strictly forbidden to let visitors in after 11 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `selflivingflatowner`
--

CREATE TABLE `selflivingflatowner` (
  `SOID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selflivingflatowner`
--

INSERT INTO `selflivingflatowner` (`SOID`) VALUES
(3001);

-- --------------------------------------------------------

--
-- Table structure for table `servant`
--

CREATE TABLE `servant` (
  `ServantID` int(4) NOT NULL,
  `ServantName` varchar(32) NOT NULL,
  `ServantAddress` varchar(256) NOT NULL,
  `ServantPhoneNo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servant`
--

INSERT INTO `servant` (`ServantID`, `ServantName`, `ServantAddress`, `ServantPhoneNo`) VALUES
(6001, 'Jorina', '345,tilpapara', '3121');

-- --------------------------------------------------------

--
-- Table structure for table `servantwork`
--

CREATE TABLE `servantwork` (
  `ServantWorkID` int(16) NOT NULL,
  `ServantID` int(4) NOT NULL,
  `RenteeID` int(4) DEFAULT NULL,
  `OwnershipIdentityNumber` varchar(256) DEFAULT NULL,
  `WorkStartTime` datetime DEFAULT NULL,
  `WorkEndTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servantwork`
--

INSERT INTO `servantwork` (`ServantWorkID`, `ServantID`, `RenteeID`, `OwnershipIdentityNumber`, `WorkStartTime`, `WorkEndTime`) VALUES
(26, 6001, 2001, '', '2023-12-10 17:42:45', '2023-12-10 17:43:24'),
(27, 6001, 0, '19216801', '2023-12-09 19:40:40', '2023-12-09 19:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `serviceform`
--

CREATE TABLE `serviceform` (
  `FullName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `PhoneNo` varchar(15) DEFAULT NULL,
  `WebAddress` varchar(512) DEFAULT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serviceform`
--

INSERT INTO `serviceform` (`FullName`, `Email`, `PhoneNo`, `WebAddress`, `Message`) VALUES
('', '', '', '', ''),
('Toushif', 'abcd123@gmail.com', '+8801621748363', '', 'I want to take this app for my home service'),
('name', 'name@email.com', '123', 'https://www.xyz.com', 'added?'),
('TOUSHIF HOSSAIN', 'toushif.hossain.1@gmail.com', '+8801621748363', 'https://toushifhossain1.github.io/Portfolio/', 'working?'),
('TOUSHIF HOSSAIN', 'xzc@gmail.com', '+8801621748363', 'https://toushifhossain1.github.io/Portfolio/', 'service?');

-- --------------------------------------------------------

--
-- Table structure for table `updateinformation`
--

CREATE TABLE `updateinformation` (
  `UserID` int(11) NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Occupation` varchar(50) DEFAULT NULL,
  `PaymentMobileNumber` varchar(20) DEFAULT NULL,
  `PaymentAccountNumber` varchar(20) DEFAULT NULL,
  `LeaseStartDate` date DEFAULT NULL,
  `MonthlyRentAmount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UniqueID` int(11) NOT NULL,
  `UserID` int(4) NOT NULL,
  `Occupation` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UniqueID`, `UserID`, `Occupation`, `Password`) VALUES
(1, 9999, 'Admin', 'admin'),
(29, 2001, 'Rentee', 'password'),
(34, 3001, 'SelfLiving', 'password'),
(35, 4001, 'Manager', 'manager'),
(36, 4002, 'Manager', 'manager'),
(37, 5001, 'Guard', 'guard'),
(38, 6001, 'Servant', 'jorina'),
(39, 1001, 'Renter', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `visitorinformation`
--

CREATE TABLE `visitorinformation` (
  `VisitorInformationSurrogateKey` int(11) NOT NULL,
  `VisitorNID` int(17) NOT NULL,
  `VisitorName` varchar(32) NOT NULL,
  `VisitorContactNo` varchar(16) NOT NULL,
  `EnterTime` datetime DEFAULT NULL,
  `ExitTime` datetime DEFAULT NULL,
  `GuardID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitorinformation`
--

INSERT INTO `visitorinformation` (`VisitorInformationSurrogateKey`, `VisitorNID`, `VisitorName`, `VisitorContactNo`, `EnterTime`, `ExitTime`, `GuardID`) VALUES
(2, 1234, 'Toushif', '0162', '2023-12-08 21:55:00', '2023-12-08 21:59:00', 5001),
(3, 1234, 'Toushif', '0162', '2023-12-09 21:55:00', '2023-12-11 21:56:00', 5001),
(4, 456342, 'Toushif', '0987', '2023-12-10 17:05:00', '2023-12-10 19:09:00', 5001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`HouseCertificationNo`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`ComplainSurrogateKey`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`FlatNo`),
  ADD KEY `flat_ibfk_1` (`HouseCertificationNo`);

--
-- Indexes for table `flatowner`
--
ALTER TABLE `flatowner`
  ADD PRIMARY KEY (`OwnershipIdentityNumber`),
  ADD KEY `FlatNo` (`FlatNo`);

--
-- Indexes for table `flatownerstate`
--
ALTER TABLE `flatownerstate`
  ADD PRIMARY KEY (`OwnershipIdentityNumber`),
  ADD KEY `SOID` (`SOID`),
  ADD KEY `RenterID` (`RenterID`),
  ADD KEY `RenterID_2` (`RenterID`),
  ADD KEY `RenterID_3` (`RenterID`);

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
  ADD PRIMARY KEY (`GuardID`),
  ADD KEY `HouseCertificationNo` (`HouseCertificationNo`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ManagerID`),
  ADD KEY `HouseCertificationNo` (`HouseCertificationNo`);

--
-- Indexes for table `managertask`
--
ALTER TABLE `managertask`
  ADD PRIMARY KEY (`ManagerTaskID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `ServantID` (`ServantID`),
  ADD KEY `payment_ibfk_2` (`RenteeID`);

--
-- Indexes for table `rentee`
--
ALTER TABLE `rentee`
  ADD PRIMARY KEY (`RenteeID`),
  ADD KEY `FlatNo` (`FlatNo`);

--
-- Indexes for table `renteeinformmanager`
--
ALTER TABLE `renteeinformmanager`
  ADD PRIMARY KEY (`ManagerTaskID`),
  ADD KEY `RenteeID` (`RenteeID`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`RenterID`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`RulesStatedSurrogateKey`);

--
-- Indexes for table `selflivingflatowner`
--
ALTER TABLE `selflivingflatowner`
  ADD PRIMARY KEY (`SOID`);

--
-- Indexes for table `servant`
--
ALTER TABLE `servant`
  ADD PRIMARY KEY (`ServantID`);

--
-- Indexes for table `servantwork`
--
ALTER TABLE `servantwork`
  ADD PRIMARY KEY (`ServantWorkID`),
  ADD KEY `RenteeID` (`RenteeID`),
  ADD KEY `SOID` (`OwnershipIdentityNumber`),
  ADD KEY `ServantID` (`ServantID`);

--
-- Indexes for table `serviceform`
--
ALTER TABLE `serviceform`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `updateinformation`
--
ALTER TABLE `updateinformation`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UniqueID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `visitorinformation`
--
ALTER TABLE `visitorinformation`
  ADD PRIMARY KEY (`VisitorInformationSurrogateKey`),
  ADD UNIQUE KEY `VisitorInformationSurrogateKey` (`VisitorInformationSurrogateKey`),
  ADD KEY `GuardID` (`GuardID`),
  ADD KEY `VisitorInformationSurrogateKey_2` (`VisitorInformationSurrogateKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `ComplainSurrogateKey` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managertask`
--
ALTER TABLE `managertask`
  MODIFY `ManagerTaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renteeinformmanager`
--
ALTER TABLE `renteeinformmanager`
  MODIFY `ManagerTaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `RulesStatedSurrogateKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `servantwork`
--
ALTER TABLE `servantwork`
  MODIFY `ServantWorkID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UniqueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `visitorinformation`
--
ALTER TABLE `visitorinformation`
  MODIFY `VisitorInformationSurrogateKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flat`
--
ALTER TABLE `flat`
  ADD CONSTRAINT `flat_ibfk_1` FOREIGN KEY (`HouseCertificationNo`) REFERENCES `building` (`HouseCertificationNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flatowner`
--
ALTER TABLE `flatowner`
  ADD CONSTRAINT `flatowner_ibfk_1` FOREIGN KEY (`FlatNo`) REFERENCES `flat` (`FlatNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flatownerstate`
--
ALTER TABLE `flatownerstate`
  ADD CONSTRAINT `flatownerstate_ibfk_1` FOREIGN KEY (`OwnershipIdentityNumber`) REFERENCES `flatowner` (`OwnershipIdentityNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guard`
--
ALTER TABLE `guard`
  ADD CONSTRAINT `guard_ibfk_1` FOREIGN KEY (`HouseCertificationNo`) REFERENCES `building` (`HouseCertificationNo`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`HouseCertificationNo`) REFERENCES `building` (`HouseCertificationNo`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`RenteeID`) REFERENCES `rentee` (`RenteeID`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`ServantID`) REFERENCES `servant` (`ServantID`);

--
-- Constraints for table `rentee`
--
ALTER TABLE `rentee`
  ADD CONSTRAINT `rentee_ibfk_1` FOREIGN KEY (`FlatNo`) REFERENCES `flat` (`FlatNo`);

--
-- Constraints for table `renteeinformmanager`
--
ALTER TABLE `renteeinformmanager`
  ADD CONSTRAINT `renteeinformmanager_ibfk_1` FOREIGN KEY (`RenteeID`) REFERENCES `rentee` (`RenteeID`);

--
-- Constraints for table `renter`
--
ALTER TABLE `renter`
  ADD CONSTRAINT `renter_ibfk_1` FOREIGN KEY (`RenterID`) REFERENCES `flatownerstate` (`RenterID`) ON UPDATE CASCADE;

--
-- Constraints for table `selflivingflatowner`
--
ALTER TABLE `selflivingflatowner`
  ADD CONSTRAINT `selflivingflatowner_ibfk_1` FOREIGN KEY (`SOID`) REFERENCES `flatownerstate` (`SOID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitorinformation`
--
ALTER TABLE `visitorinformation`
  ADD CONSTRAINT `visitorinformation_ibfk_1` FOREIGN KEY (`GuardID`) REFERENCES `guard` (`GuardID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
