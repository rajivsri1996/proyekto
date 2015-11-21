-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2012 at 04:32 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('adminccro', 'cityhall');

-- --------------------------------------------------------

--
-- Table structure for table `registerprofile`
--

CREATE TABLE IF NOT EXISTS `registerprofile` (
  `Id_num` int(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Bdate` varchar(20) NOT NULL,
  `Bplace` varchar(50) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` text NOT NULL,
  `Mobileno` int(11) NOT NULL,
  `Contactno` int(7) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Civilstatus` text NOT NULL,
  PRIMARY KEY (`Id_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerprofile`
--

INSERT INTO `registerprofile` (`Id_num`, `Lastname`, `Firstname`, `Middlename`, `Address`, `Bdate`, `Bplace`, `Age`, `Gender`, `Mobileno`, `Contactno`, `Email`, `Civilstatus`) VALUES
(678, 'Lariosa', 'Maricor', 'Palangao', '1659 San Roque St., Brgy. Holy Spirit QC', '3/28/1993', 'Manila', 19, 'Female', 2147483647, 4287295, 'maricorpalangao@yahoo.com', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `servicerecord`
--

CREATE TABLE IF NOT EXISTS `servicerecord` (
  `Id_num` varchar(20) NOT NULL,
  `Svc_datefrom` text NOT NULL,
  `Svc_dateto` text NOT NULL,
  `Designation` text NOT NULL,
  `Status` text NOT NULL,
  `Salary_annum` int(20) NOT NULL,
  `office_station` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `leave_nopay` int(20) NOT NULL,
  `separation` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerecord`
--

INSERT INTO `servicerecord` (`Id_num`, `Svc_datefrom`, `Svc_dateto`, `Designation`, `Status`, `Salary_annum`, `office_station`, `division`, `leave_nopay`, `separation`) VALUES
('678', 'June 2012', 'Dec 2013', 'CCRO', 'Regular', 10000000, 'ICT', 'Admin', 0, 'none');
