-- phpMyAdmin SQL Dump
-- version 4.2.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2015 at 04:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` text NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `uname`, `pwd`) VALUES
('Prasad Sawant', 'prasad14', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `bookrecords`
--

CREATE TABLE IF NOT EXISTS `bookrecords` (
  `uid` varchar(15) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `fine` int(15) NOT NULL,
  `bookstatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookrecords`
--

INSERT INTO `bookrecords` (`uid`, `bookname`, `fine`, `bookstatus`) VALUES
('113CP1111A', ' Fluid Mechanics: K.L.Kumar.', 20, 'HELD'),
('113CP1176A', 'Computer Networks-Andres S. T.', 0, 'HELD'),
('113CP2222A', 'Maths4-G. V. KUMBHOJKAR', 0, 'HELD'),
('113CP3333A', 'Strength Of MAterials-MD Dayal', 0, 'HELD'),
('113CP4444A', 'Thermal Engineering-RK Rajput', 0, 'Returned'),
('113CP5555A', 'DLDA- R.P. Jain', 10, 'Not Returned');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `uid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `name`, `email`, `password`) VALUES
('113CP1111A', 'Nitin Sawant', 'nitinsawant@gmail.com', '123456789'),
('113CP1176A', 'Prasad Sawant', 'prasadsawant@gmail.com', '123456789'),
('113CP2222A', 'Sunil Sawant', 'sunilsawant@gmail.com', '123456789'),
('113CP3333A', 'Avaneesh Sawant', 'avaneeshsawant@gmail.com', '123456789'),
('113CP4444A', 'Haamid Shaikh', 'haamidshaikh@gmail.com', '123456789'),
('113CP5555A', 'user1', 'user@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `bookrecords`
--
ALTER TABLE `bookrecords`
 ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`uid`), ADD KEY `uid` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
