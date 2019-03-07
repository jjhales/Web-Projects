-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 07, 2019 at 05:04 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgtrackerprod`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `flatNumber` int(11) NOT NULL,
  `seedName` varchar(100) NOT NULL,
  `seedUsed` decimal(13,4) NOT NULL,
  `seedManufacturer` varchar(100) NOT NULL,
  `mediumName` varchar(100) NOT NULL,
  `mediumUsed` decimal(13,4) NOT NULL,
  `mediumManufacturer` varchar(250) NOT NULL,
  `mediumMaterial` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dateStart` date NOT NULL,
  `dateLight` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `yieldWeight` decimal(13,2) DEFAULT NULL,
  `testing` varchar(100) NOT NULL,
  `cropRating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`flatNumber`, `seedName`, `seedUsed`, `seedManufacturer`, `mediumName`, `mediumUsed`, `mediumManufacturer`, `mediumMaterial`, `location`, `dateStart`, `dateLight`, `dateEnd`, `yieldWeight`, `testing`, `cropRating`) VALUES
(41, 'Speckled Pea Sprout', 250.0000, 'Mountain Valley Seed Company', 'None', 0.0000, 'None', 'None', 'testbed', '2019-02-09', '2019-02-12', '2019-02-20', 596.00, 'testing', 4),
(42, 'Basic Salad Mix MG', 28.3400, 'Mountain Valley Seed Company', 'GreenEase Jute', 1.0000, 'Enroot Products LLC', 'Jute', 'testbed', '2019-02-11', '2019-02-15', '2019-02-18', 200.00, 'testing', 3),
(43, 'Wheat Berries', 250.0000, 'Handy Pantry', 'GreenEase Jute', 1.0000, 'Enroot Products LLC', 'Jute', 'testbed', '2019-02-12', '2019-02-16', '2019-02-19', 192.00, 'testing', 3),
(44, 'Basic Salad Mix MG', 30.0000, 'Mountain Valley Seed Company', 'Screen', 1.0000, 'Screen', 'Screen', 'testbed', '2019-02-17', '2019-02-22', '2019-02-27', 196.00, 'testing', 4),
(45, 'Wheat Berries', 225.0000, 'Handy Pantry', 'Screen', 1.0000, 'Screen', 'Screen', 'testbed', '2019-02-19', '2019-02-24', '2019-02-28', 192.00, 'testing', 4),
(46, 'Basic Salad Mix MG', 90.0000, 'Mountain Valley Seed Company', 'Screen', 1.0000, 'Screen', 'Screen', 'testbed', '2019-02-22', '2019-02-26', '2019-03-05', 446.00, 'testing', 3),
(47, 'Wheat Berries', 200.0000, 'Handy Pantry', 'Screen', 1.0000, 'Screen', 'Screen', 'testbed', '2019-03-01', '2019-03-05', NULL, NULL, 'testing', NULL),
(48, 'Basic Salad Mix MG', 60.0000, 'Mountain Valley Seed Company', 'Screen', 1.0000, 'Screen', 'Screen', 'testbed', '2019-03-05', NULL, NULL, NULL, 'testing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerNumber` int(11) NOT NULL,
  `customerFName` varchar(60) NOT NULL,
  `customerLName` varchar(60) NOT NULL,
  `customerCompany` varchar(100) NOT NULL,
  `customerPhone` int(11) NOT NULL,
  `CustomerEmail` varchar(100) NOT NULL,
  `customerNews` tinyint(1) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `resetCode` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipmentName` varchar(100) NOT NULL,
  `equipmentType` varchar(100) NOT NULL,
  `equipmentVendor` varchar(100) NOT NULL,
  `equipmentManufacturer` varchar(100) NOT NULL,
  `equipmentPrice` decimal(13,4) NOT NULL,
  `equipmentAmount` int(11) NOT NULL,
  `equipmentPurchaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipmentName`, `equipmentType`, `equipmentVendor`, `equipmentManufacturer`, `equipmentPrice`, `equipmentAmount`, `equipmentPurchaseDate`) VALUES
('Mesh Bottom Trays', 'Tray', 'Bootstrap Farmer', 'Bootstrap Farmer', 52.9900, 10, '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `mediumNumber` int(11) NOT NULL,
  `mediumName` varchar(100) DEFAULT NULL,
  `mediumVendor` varchar(100) DEFAULT NULL,
  `mediumManufacturer` varchar(100) DEFAULT NULL,
  `mediumMaterial` varchar(100) NOT NULL,
  `mediumAmount` int(11) NOT NULL,
  `mediumSize` varchar(100) NOT NULL,
  `mediumCost` decimal(13,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`mediumNumber`, `mediumName`, `mediumVendor`, `mediumManufacturer`, `mediumMaterial`, `mediumAmount`, `mediumSize`, `mediumCost`) VALUES
(15, 'GreenEase Jute', 'Amazon', 'Enroot Products LLC', 'Jute', 10, 'sheet', 1.5990),
(16, 'None', 'None', 'None', 'None', 0, 'sheet', 0.0000),
(17, 'Screen', 'Screen', 'Screen', 'Screen', 10, 'sheet', 0.5990);

-- --------------------------------------------------------

--
-- Table structure for table `nutrients`
--

CREATE TABLE `nutrients` (
  `nutrientNumber` int(11) NOT NULL,
  `nutrientName` varchar(255) NOT NULL,
  `nutrientManufacturer` varchar(255) NOT NULL,
  `nutrientVendor` varchar(255) NOT NULL,
  `nutrientSize` decimal(13,2) NOT NULL,
  `nutrientPrice` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nutrients`
--

INSERT INTO `nutrients` (`nutrientNumber`, `nutrientName`, `nutrientManufacturer`, `nutrientVendor`, `nutrientSize`, `nutrientPrice`) VALUES
(1, 'Photosynthesis Plus', 'Microbe Life', 'Microbe Life', 591.40, 0.03);

-- --------------------------------------------------------

--
-- Table structure for table `nutrientuse`
--

CREATE TABLE `nutrientuse` (
  `nutrientName` varchar(255) NOT NULL,
  `nutrientManufacturer` varchar(255) NOT NULL,
  `nutrientAmount` decimal(13,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `nutrientUseDate` date NOT NULL,
  `inUse` tinyint(1) NOT NULL,
  `nutrientUseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `retail`
--

CREATE TABLE `retail` (
  `productName` varchar(255) NOT NULL,
  `productSize` decimal(13,2) NOT NULL,
  `retailPrice` decimal(13,2) NOT NULL,
  `wholesalePrice` decimal(13,2) NOT NULL,
  `currentCost` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seed`
--

CREATE TABLE `seed` (
  `seedNumber` int(11) NOT NULL,
  `seedName` varchar(100) NOT NULL,
  `seedVendor` varchar(100) NOT NULL,
  `seedManufacturer` varchar(100) NOT NULL,
  `seedAmount` decimal(13,4) NOT NULL,
  `seedPrice` decimal(13,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seed`
--

INSERT INTO `seed` (`seedNumber`, `seedName`, `seedVendor`, `seedManufacturer`, `seedAmount`, `seedPrice`) VALUES
(20, 'Speckled Pea Sprout', 'True Leaf Market', 'Mountain Valley Seed Company', 453.5900, 0.0264),
(21, 'Basic Salad Mix MG', 'True Leaf Market', 'Mountain Valley Seed Company', 453.5900, 0.0375),
(22, 'Wheat Berries', 'Thunder Acres', 'Handy Pantry', 4535.9000, 0.0044);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`flatNumber`),
  ADD UNIQUE KEY `flatNumber` (`flatNumber`);

--
-- Indexes for table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`mediumNumber`),
  ADD UNIQUE KEY `mediumNumber` (`mediumNumber`),
  ADD KEY `mediumNumber_2` (`mediumNumber`);

--
-- Indexes for table `nutrients`
--
ALTER TABLE `nutrients`
  ADD PRIMARY KEY (`nutrientNumber`);

--
-- Indexes for table `nutrientuse`
--
ALTER TABLE `nutrientuse`
  ADD PRIMARY KEY (`nutrientUseID`);

--
-- Indexes for table `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`seedNumber`),
  ADD UNIQUE KEY `seedNumber` (`seedNumber`),
  ADD KEY `seedNumber_2` (`seedNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `flatNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `medium`
--
ALTER TABLE `medium`
  MODIFY `mediumNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `nutrients`
--
ALTER TABLE `nutrients`
  MODIFY `nutrientNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nutrientuse`
--
ALTER TABLE `nutrientuse`
  MODIFY `nutrientUseID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seed`
--
ALTER TABLE `seed`
  MODIFY `seedNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
