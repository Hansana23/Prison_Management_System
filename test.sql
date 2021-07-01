-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Age`, `NIC`, `Address`, `Username`, `password`) VALUES
(2, 'sman perea', 43, '991230211v', 'grbrb fgvdf dfbdfbfbfd', 'dgbnfgn', 'rgerbreb'),
(3, 'sman perea', 43, '991230211v', 'grbrb fgvdf dfbdfbfbfd', 'dgbnfgn', 'rgerbreb'),
(4, 'amal croos', 23, '991230211v', 'ertbrtb breb', 'asdsdd', '12345'),
(9, 'Nishal Fernando', 45, '23532455v', '223f3', 'sgsrg', 'weg'),
(10, 'Nishal Fernando', 45, '23532455v', '223f3', 'sgsrg', 'weg'),
(13, 'sman perea', 56, 'efgberberv', 'sfvbsedfbebf', 'sdfv', 'sdv'),
(15, 'amal croos', 54, '991230211v', 'thbrtbhrtb', 'rtty', 'ertert'),
(16, 'Nishal Fernando', 54, 'gfgfddfgv', 'regergreg', 'rgergerg', '34567');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `ID` varchar(5) NOT NULL,
  `bloodPresure` float NOT NULL,
  `cholesterolLevel` float NOT NULL,
  `diabetesLevel` float NOT NULL,
  `otherHealthIssues` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`ID`, `bloodPresure`, `cholesterolLevel`, `diabetesLevel`, `otherHealthIssues`) VALUES
('123d', 10, 20, 30, 'Dengue');

-- --------------------------------------------------------

--
-- Table structure for table `jailor`
--

CREATE TABLE `jailor` (
  `ID` varchar(5) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jailor`
--

INSERT INTO `jailor` (`ID`, `NIC`, `name`, `age`, `address`, `phoneNo`) VALUES
('123d', '324543v', 'Nishal Fernando', 43, 'svvwevwvsvsdvsdv', 32424),
('124d', '324543v', 'saman perera', 43, 'wqfqwf', 23523);

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `register_ID` varchar(5) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `crime` varchar(100) NOT NULL,
  `punishment` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`register_ID`, `NIC`, `name`, `age`, `address`, `crime`, `punishment`) VALUES
('123d', '324543v', 'Nishal Fernando', 43, 'svvwevwvsvsdvsdv', 'rgvbrwevewrv', 10),
('125t', '9923567v', 'kamal perera', 50, 'sdvsdvds dfvbdsfbdf erfbgfb', 'dfdfh', 4),
('156f', '23434v', 'amal croos', 42, 'svddsvd fvsdvsdv', 'dvsdvdsv', 4),
('567y', '23434v', 'Siril croos', 89, 'svvwevwvsvsdvsdv', 'Rape', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jailor`
--
ALTER TABLE `jailor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`register_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
