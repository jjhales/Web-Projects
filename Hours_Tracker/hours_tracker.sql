-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2015 at 05:10 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hours_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
`client_id` int(11) NOT NULL,
  `client_fname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_lname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_fname`, `client_lname`) VALUES
(1, 'Shane', 'Burbank'),
(2, 'Colt', 'Trinks'),
(3, 'Conner', 'Bollard'),
(4, 'Nora', 'Addyson'),
(5, 'Anthony', 'Bruegman'),
(6, 'Braxton', 'Lucas'),
(7, 'Audrina', 'Rister'),
(8, 'Lila', 'Bailey'),
(9, 'Rose', 'Camryn');

-- --------------------------------------------------------

--
-- Table structure for table `client_hours`
--

DROP TABLE IF EXISTS `client_hours`;
CREATE TABLE `client_hours` (
  `client_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `hours_auth` int(11) NOT NULL,
  `hours_remain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_hours`
--

INSERT INTO `client_hours` (`client_id`, `service_id`, `hours_auth`, `hours_remain`) VALUES
(1, 3, 10, 2),
(2, 2, 60, 45),
(2, 1, 60, 45),
(1, 1, 40, 24),
(1, 2, 30, 17),
(3, 1, 30, 20),
(3, 2, 30, 19),
(2, 3, 30, 20),
(4, 2, 30, 25),
(5, 2, 30, 22),
(6, 2, 30, 4),
(7, 2, 30, 20),
(8, 2, 30, 20),
(9, 2, 30, 15);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
`employee_id` int(11) NOT NULL,
  `employee_fname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_lname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_fname`, `employee_lname`, `username`, `password`, `email`) VALUES
(1, 'Juanita', 'Hales', 'jhales', '5f4dcc3b5aa765d61d8327deb882cf99', 'jjhales@fullsail.edu'),
(2, ' neo', 'anderson', 'nanderson', '5f4dcc3b5aa765d61d8327deb882cf99', 'nanderson@irc.com'),
(3, ' Sandra', 'Lee', 'sandylee', '5f4dcc3b5aa765d61d8327deb882cf99', 'sandylee@greese.com'),
(4, ' Mike', 'Myers', 'mmyers', '5f4dcc3b5aa765d61d8327deb882cf99', 'mmyers@austinpowers.com'),
(5, 'Bob', 'Roper', 'broper', '5f4dcc3b5aa765d61d8327deb882cf99', 'broper@att.net'),
(6, 'Steven', 'Miller', 'smiller', '5f4dcc3b5aa765d61d8327deb882cf99', 'smiller@smband.com'),
(7, ' Betty', 'Boop', 'bboop', '5f4dcc3b5aa765d61d8327deb882cf99', 'bboop@universal.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_hours`
--

DROP TABLE IF EXISTS `employee_hours`;
CREATE TABLE `employee_hours` (
  `employee_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `service_id` int(11) NOT NULL,
  `hours_worked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_hours`
--

INSERT INTO `employee_hours` (`employee_id`, `client_id`, `date`, `service_id`, `hours_worked`) VALUES
(1, 1, '2015-02-01', 1, 5),
(1, 1, '2015-02-02', 2, 5),
(1, 1, '2015-02-03', 3, 5),
(1, 2, '2015-02-04', 1, 5),
(1, 2, '2015-02-05', 2, 5),
(1, 2, '2015-02-06', 3, 5),
(1, 3, '2015-02-07', 1, 5),
(1, 3, '2015-02-08', 2, 5),
(1, 4, '2015-02-09', 2, 5),
(1, 5, '2015-02-10', 2, 5),
(1, 6, '2015-02-10', 2, 5),
(1, 7, '2015-02-11', 2, 5),
(1, 8, '2015-02-12', 2, 5),
(1, 9, '2015-02-12', 2, 5),
(1, 1, '2015-02-13', 1, 5),
(1, 1, '2015-02-14', 2, 5),
(1, 1, '2015-02-14', 2, 3),
(2, 9, '2015-02-10', 2, 5),
(1, 5, '2015-02-09', 2, 3),
(1, 2, '2015-02-18', 1, 5),
(3, 8, '2015-02-04', 2, 5),
(1, 6, '2015-02-06', 2, 5),
(1, 2, '2015-02-11', 1, 5),
(1, 2, '2015-02-12', 2, 5),
(1, 6, '2015-02-06', 2, 5),
(1, 7, '2015-02-04', 2, 5),
(2, 3, '2015-02-04', 2, 1),
(2, 1, '2015-02-05', 1, 5),
(2, 9, '2015-02-05', 2, 5),
(1, 2, '2015-02-11', 2, 5),
(1, 6, '2015-02-19', 2, 3),
(3, 3, '2015-02-22', 1, 5),
(3, 2, '2015-02-15', 3, 5),
(3, 1, '2015-02-23', 1, 1),
(3, 6, '2015-02-24', 2, 8),
(7, 1, '2015-02-24', 3, 3),
(7, 3, '2015-02-24', 2, 5);

--
-- Triggers `employee_hours`
--
DROP TRIGGER IF EXISTS `new_hours_remain`;
DELIMITER //
CREATE TRIGGER `new_hours_remain` AFTER INSERT ON `employee_hours`
 FOR EACH ROW BEGIN
UPDATE client_hours
SET hours_remain = hours_remain - NEW.hours_worked
WHERE client_hours.service_id = NEW.service_id AND client_hours.client_id = NEW.client_id;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payrate`
--

DROP TABLE IF EXISTS `payrate`;
CREATE TABLE `payrate` (
  `employee_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `pay_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrate`
--

INSERT INTO `payrate` (`employee_id`, `service_id`, `pay_rate`) VALUES
(1, 1, 20),
(1, 2, 30),
(1, 3, 35),
(2, 1, 20),
(2, 2, 30),
(2, 3, 35),
(3, 1, 20),
(3, 2, 30),
(3, 3, 35),
(4, 1, 20),
(4, 2, 30),
(4, 3, 35),
(5, 1, 20),
(5, 2, 30),
(5, 3, 35),
(6, 1, 15),
(6, 2, 25),
(6, 3, 30),
(7, 3, 30),
(7, 2, 25),
(7, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
`service_id` int(11) NOT NULL,
  `service_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_rate`) VALUES
(1, 'Companion Care', 25),
(2, 'Personal Support', 35),
(3, 'Life Coaching', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_hours`
--
ALTER TABLE `client_hours`
 ADD KEY `client_id` (`client_id`), ADD KEY `service_id` (`service_id`), ADD KEY `hours_auth` (`hours_auth`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`employee_id`), ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `employee_hours`
--
ALTER TABLE `employee_hours`
 ADD KEY `employee_id` (`employee_id`), ADD KEY `client_id` (`client_id`), ADD KEY `service_id` (`service_id`), ADD KEY `hours_worked` (`hours_worked`);

--
-- Indexes for table `payrate`
--
ALTER TABLE `payrate`
 ADD KEY `employee_id` (`employee_id`), ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_hours`
--
ALTER TABLE `client_hours`
ADD CONSTRAINT `client_hours_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
ADD CONSTRAINT `client_hours_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `employee_hours`
--
ALTER TABLE `employee_hours`
ADD CONSTRAINT `employee_hours_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
ADD CONSTRAINT `employee_hours_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
ADD CONSTRAINT `employee_hours_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `payrate`
--
ALTER TABLE `payrate`
ADD CONSTRAINT `payrate_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
ADD CONSTRAINT `payrate_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
