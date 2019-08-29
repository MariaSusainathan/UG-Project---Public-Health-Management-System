-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2015 at 12:14 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `CID` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `toc` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  `queries` text NOT NULL,
  `request` text NOT NULL,
  UNIQUE KEY `CID` (`CID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`CID`, `username`, `toc`, `desc`, `queries`, `request`) VALUES
(89, 'mariolycan4@gmail.com', 'Disease', 'Our area is prone to chlorea', 'What mediciene can be done as first aid??', 'please procide us with necessary medicine');

-- --------------------------------------------------------

--
-- Table structure for table `empolyee`
--

CREATE TABLE `empolyee` (
  `EID` int(10) NOT NULL auto_increment,
  `email` varchar(20) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `des` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `area` varchar(15) NOT NULL,
  PRIMARY KEY  (`EID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `empolyee`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `area` varchar(20) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY  (`username`),
  UNIQUE KEY `username` (`username`,`password`,`mobile_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `name`, `dob`, `area`, `mobile_no`, `gender`, `address`) VALUES
('mariolycan4@gmail.com', 'mario007', 'Maria Susainathan', '1994-09-14', 'Butt Road', 9840437650, 'Male', '7/2,Viswanathar Koil Street,\r\nSt.Thomas Mount,\r\nChennai-16.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`username`) REFERENCES `register` (`username`);
