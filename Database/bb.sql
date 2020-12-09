-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2015 at 05:58 পূর্বাহ্ণ
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_info`
--

CREATE TABLE IF NOT EXISTS `blood_info` (
  `ID` int(4) NOT NULL,
  `donate_date` varchar(100) NOT NULL,
  `BLOOD_GROUP` char(5) NOT NULL,
  `BLOOD_AMOUNT` int(11) NOT NULL,
  `DNR_ID` int(4) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_info`
--

INSERT INTO `blood_info` (`ID`, `donate_date`, `BLOOD_GROUP`, `BLOOD_AMOUNT`, `DNR_ID`, `age`, `weight`, `branch_name`) VALUES
(6, '0000-00-00', 'O+', 3, 31, 21, 60, 'Banani'),
(7, '2015-08-01 02:15:30', 'AB+', 4, 32, 27, 60, 'Mohakhali'),
(8, '2015-08-01 04:47:24', 'A-', 7, 33, 21, 55, 'Dhanmondi'),
(9, '2015-08-01 04:50:56', 'O+', 4, 34, 45, 55, 'Banani');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE IF NOT EXISTS `blood_request` (
  `request_id` int(2) NOT NULL,
  `blood_amount` int(10) NOT NULL,
  `BLOOD_GROUP` char(5) NOT NULL,
  `AREA` char(20) NOT NULL,
  `hospital` char(50) NOT NULL,
  `is_accept` tinyint(4) NOT NULL,
  `RQSTR_NAME` varchar(50) NOT NULL,
  `RQSTR_ADD` text NOT NULL,
  `RQSTR_EMAIL` varchar(50) NOT NULL,
  `RQSTR_PHONE` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`request_id`, `blood_amount`, `BLOOD_GROUP`, `AREA`, `hospital`, `is_accept`, `RQSTR_NAME`, `RQSTR_ADD`, `RQSTR_EMAIL`, `RQSTR_PHONE`) VALUES
(1, 5, 'AB-', 'Motijheel', '', 0, 'test name x', 'asd', 'p@x.com', '0132903829083'),
(2, 3, 'A-', 'Dhanmondi', 'Dhaka Medical', 0, 'Request test', 'asx', 'mn.pappox@yahoo.com', '01719431398');

-- --------------------------------------------------------

--
-- Table structure for table `branch_info`
--

CREATE TABLE IF NOT EXISTS `branch_info` (
  `BRN_ID` int(2) NOT NULL,
  `BRN_NAME` varchar(30) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `PHONE` char(15) NOT NULL,
  `EMAIL` char(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='this table contains the data about all of the branch of our blood bank';

--
-- Dumping data for table `branch_info`
--

INSERT INTO `branch_info` (`BRN_ID`, `BRN_NAME`, `ADDRESS`, `PHONE`, `EMAIL`) VALUES
(1, 'Mohakhali', 'Mohakhali, Waoijsi oia', '020841612', 'x@y.com'),
(2, 'Banani', 'Banani, Waoijsi oia', '01727851', 'banani@y.com'),
(3, 'Dhanmondi', 'Dhanmondi, Waoijsi oia', '01719431398', 'dmondi@y.com'),
(4, 'Gulshan', 'Gulshan, Waoijsi oia', '01719431399', 'Gulshan@y.com');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE IF NOT EXISTS `donor_info` (
  `DNR_ID` int(2) NOT NULL,
  `DNR_NAME` varchar(25) NOT NULL,
  `ADDRESS` char(30) NOT NULL,
  `AREA` char(25) NOT NULL,
  `PHONE` char(12) NOT NULL,
  `EMAIL` char(30) NOT NULL,
  `BRN_ID` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`DNR_ID`, `DNR_NAME`, `ADDRESS`, `AREA`, `PHONE`, `EMAIL`, `BRN_ID`) VALUES
(31, 'Mr. X', 'asas', 'Dhanmondi', '01719431398', 'mn.pappox@yahoo.com', 0),
(32, 'Another Test', '5665', 'Motijheel', '013290382908', 'p@x.com', 0),
(33, 'Sifat', 'aiuhs iuha', 'Dhanmondi', '034964341', 's@g.com', 0),
(34, 'Rakib', 'oiuasoiu 9oaiuns', 'Bonani', '048813561494', 'r@k.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `E_ID` int(5) NOT NULL,
  `E_NAME` varchar(20) NOT NULL,
  `E_ADDRESS` char(30) NOT NULL,
  `E_DESIGNATION` char(15) NOT NULL,
  `E_SALARY` char(6) NOT NULL,
  `EMAIL` char(30) NOT NULL,
  `PHONE` char(15) NOT NULL,
  `BRN_ID` int(2) NOT NULL,
  `E_Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`E_ID`, `E_NAME`, `E_ADDRESS`, `E_DESIGNATION`, `E_SALARY`, `EMAIL`, `PHONE`, `BRN_ID`, `E_Pass`) VALUES
(1, 'Pranjal Chakraborty', 'Mohakhali,Dh aka', 'Manager', '10,000', 'pcborty@bloddbank.org', '01573950327', 1, ' 78945'),
(2, 'Muyeed Hasan', 'Dhanmondi,Dhaka', 'R ecord Keeper', '8,000', 'm.hasan@bloddbank.org', '01567498098', 1, '741258'),
(3, 'Naima Zaman', 'Mirpur,Dhaka', 'Manager', '10,000', 'naima.z@bloddbank.org', '01774609959', 3, '12345'),
(4, 'Fahmida Hasan', 'Mohammadpur,Dhaka', 'Record Kepper', '8000', 'suimui.s@bloddbank.org', '01790435678', 3, '123456'),
(5, 'Rezaur Rashid', 'Mohammadpur,Dhaka', 'Manager', '10000', 'r.rashid@bloddbank.org', '01790454389', 2, '001100'),
(6, 'Rohan Sajid', 'Madartek,Dhaka', 'Record Kepper', '8,000', 's.zaman@bloddbank.org', '01790594672', 2, '789456'),
(7, 'Somania Dina', 'Mohakhali,Dhaka', 'Manager', '10,000', 's.dina@bloddbank.org', '01775123546', 4, '07456'),
(8, 'Chaity Swarnaker', 'Mohakhali,Dhaka', 'Record Kepper', '8,000', 's.chaity@bloddbank.org', '01790875496', 4, '897941');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE IF NOT EXISTS `feed_back` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_info`
--
ALTER TABLE `blood_info`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `DNR_ID` (`DNR_ID`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `branch_info`
--
ALTER TABLE `branch_info`
  ADD PRIMARY KEY (`BRN_ID`) COMMENT 'this is branch id, will increase continuously ',
  ADD UNIQUE KEY `BRN_ID` (`BRN_ID`),
  ADD UNIQUE KEY `BRN_ID_2` (`BRN_ID`),
  ADD KEY `BRN_ID_3` (`BRN_ID`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`DNR_ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `BRN_ID` (`BRN_ID`),
  ADD KEY `BRN_ID_2` (`BRN_ID`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`E_ID`),
  ADD KEY `BRN_ID` (`BRN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_info`
--
ALTER TABLE `blood_info`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `request_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `branch_info`
--
ALTER TABLE `branch_info`
  MODIFY `BRN_ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `DNR_ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_info`
--
ALTER TABLE `blood_info`
  ADD CONSTRAINT `blood_info_ibfk_1` FOREIGN KEY (`DNR_ID`) REFERENCES `donor_info` (`DNR_ID`);

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`BRN_ID`) REFERENCES `branch_info` (`BRN_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
