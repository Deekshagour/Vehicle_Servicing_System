-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2019 at 07:57 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hondairiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvehicle`
--

CREATE TABLE IF NOT EXISTS `addvehicle` (
  `typeof_vehicle` varchar(20) NOT NULL,
  `vehicle_id` varchar(20) NOT NULL,
  `owned_by` varchar(60) NOT NULL,
  `brand_hondai` varchar(10) NOT NULL,
  `model` varchar(20) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`typeof_vehicle`, `vehicle_id`, `owned_by`, `brand_hondai`, `model`) VALUES
('car', '458', 'vicky@gmail.com', 'Hondai', 'i 10'),
('car', '478', 'vipingourkhede@gmail.com', 'Hondai', 'i 10 '),
('car', '852', 'deekshagour@gmail.com', 'Hondai', 'i 10'),
('bike', 'mp 04 cs 5832', 'sapna@gmail.com', 'Hondai', 'indigo'),
('bike', 'mp 40 ca 0545', 'vipingourkhede@gmail.com', 'Hondai', 'bmw'),
('bike', 'Mp04 3456', 'riyam22452gmail.com', 'Hondai', 'i 10');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_date` date NOT NULL,
  `pick_up` char(20) NOT NULL,
  `booking_status` varchar(30) NOT NULL DEFAULT 'PLACED',
  `registration_id` varchar(30) NOT NULL,
  `booked_by` varchar(20) NOT NULL,
  `booked_for` varchar(20) NOT NULL,
  `bookingid` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_date`, `pick_up`, `booking_status`, `registration_id`, `booked_by`, `booked_for`, `bookingid`) VALUES
('2019-04-20', 'pick from home', 'completed', 'mp 04 cs 5832', 'sapna@gmail.com', 'servicing', 1),
('2019-04-20', 'pick from home', 'delivered', 'mp 04 cs 5832', 'sapna@gmail.com', 'booked your vehicle', 2),
('2019-04-20', 'pick from home', 'confirm', '458', 'vicky@gmail.com', 'servicing', 3),
('2019-04-24', 'pick from home', 'delivered', 'Mp04 3456', 'riyam22452gmail.com', 'servicing', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` char(15) NOT NULL,
  `password` int(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` char(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email_id`, `mobile_no`, `address`, `password`) VALUES
('riya', 'riya54mishra@gmail.com', 9340933689, 'chhindwara', '12345'),
('riya mishra', 'riyam22452gmail.com', 9340933689, 'mata mandir', '12345'),
('Sapna sahu', 'sapna@gmail.com', 7554287043, 'Bhopal', '12345'),
('Vicky', 'vicky@gmail.com', 7554287043, ' bhopal', '12345'),
('Vipin gourkhede', 'vipingourkhede@gmail.com', 8319494921, 'Bhopal', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
