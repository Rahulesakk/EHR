-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.epizy.com
-- Generation Time: Jul 29, 2020 at 01:36 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26370859_mainproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adharcarddetails`
--

CREATE TABLE `adharcarddetails` (
  `adharcardnumber` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adharcarddetails`
--

INSERT INTO `adharcarddetails` (`adharcardnumber`, `firstname`, `lastname`, `dob`, `age`, `gender`, `phonenumber`, `fathername`, `address`, `state`, `image`) VALUES
('123', 'Rahul', 'E', '1998-03-14', '21', 'Male', '8277272314', 'Rahul', 'Haveri', 'Karnataka', 'images/rahul.jpg'),
('456', 'Pramod ', 'D P', '1999-01-05', '21', 'Male', '8277272315', 'Prakash ', 'Sagar', 'Karnataka', 'images/pramod.jpeg'),
('789', 'Sachin', 'K C', '1998-05-12', '21', 'Male', '8277272326', 'Sachin', 'Davangere', 'karnataka', 'images/sachin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `doctor1` tinyint(1) NOT NULL,
  `doctor2` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`doctor1`, `doctor2`) VALUES
(0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `adharcardnumber` int(11) NOT NULL,
  `roomthatalloted` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorname` varchar(500) NOT NULL,
  `moblienumber` varchar(500) NOT NULL,
  `Department` varchar(500) NOT NULL,
  `consultancycharge` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `loginpassword` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorname`, `moblienumber`, `Department`, `consultancycharge`, `education`, `loginpassword`) VALUES
('Anil Kumar', '8884271678', 'OPD', '250', 'MBBS,MD', '123'),
('Mohan Bhat', '7899110456', 'OPD', '250', 'MBBS,MD', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug` varchar(250) NOT NULL,
  `m_d` date NOT NULL,
  `e_d` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug`, `m_d`, `e_d`, `quantity`) VALUES
('Cetirizine', '2020-07-03', '2020-08-29', 250),
('Chloroquine', '2020-07-15', '2022-07-09', 250),
('Nimesulide', '2020-07-11', '2021-07-25', 250),
('Oseltamivir', '2020-07-09', '2023-07-31', 250),
('Paracetamol', '2020-07-09', '2021-09-17', 250),
('Salbutamol', '2020-07-13', '2022-07-16', 250);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `adharcardnumber` int(11) NOT NULL,
  `report` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`adharcardnumber`, `report`) VALUES
(123, 'images/form2.pdf'),
(456, 'images/form3.pdf'),
(789, 'images/form1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `adharcardnumber` int(11) NOT NULL,
  `completebloodcount` tinyint(1) NOT NULL,
  `bloodpressure` tinyint(1) NOT NULL,
  `bloodsugar` tinyint(1) NOT NULL,
  `ecg` tinyint(1) NOT NULL,
  `urineanalysis` tinyint(1) NOT NULL,
  `thyroid` tinyint(1) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `report` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'abc', '123'),
(2, 'abc', '123'),
(2, 'abcd', '1234'),
(3, 'abc', '123'),
(4, 'abc', '123'),
(5, 'abc', '123'),
(6, 'abc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `prescribe`
--

CREATE TABLE `prescribe` (
  `adharcardnumber` int(11) NOT NULL,
  `med` varchar(888) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adharcarddetails`
--
ALTER TABLE `adharcarddetails`
  ADD PRIMARY KEY (`adharcardnumber`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD UNIQUE KEY `adharcardnumber` (`adharcardnumber`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorname`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`adharcardnumber`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
