-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 10:53 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5281510_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `addname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`addname`) VALUES
('Dr. Ashok kumar'),
('Dr Sk Choudhary'),
('sfdgfh'),
('Dr. SK Sethi'),
('Dr.Narayan'),
(''),
('sds'),
(''),
(''),
('Dr.Narayan');

-- --------------------------------------------------------

--
-- Table structure for table `doctorapptb`
--

CREATE TABLE `doctorapptb` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorapptb`
--

INSERT INTO `doctorapptb` (`fname`, `lname`, `email`, `contact`, `docapp`, `payment`) VALUES
('kartik', 'bhojak', 'bhojak.kartik72@gmail.com', '7073069148', 'Dr Sharma From 6pm to 8pm', 'not-pais'),
('kartik', 'bhojak', 'bhojak.kartik72@gmail.com', '7073069148', 'Dr Sharma From 6pm to 8pm', 'not-pais'),
('zsaf', 'saf', 'saf@hmaol.com', 'sdg', 'Dr Sharma From 6pm to 8pm', ''),
('kjasgchkj', 'ksjdgc', 'ASKJCG@gmail.com', '65465', 'Dr Sharma From 6pm to 8pm', ''),
('sdg', 'dsfdssdfsd', 'efdhjv@gmail.com', '654986512', 'Dr Sharma From 6pm to 8pm', 'pay-later'),
('asc', 'dsc', 'ascfa@gmail.com', '6626050', 'Dr Sharma From 6pm to 8pm', 'paid'),
('kartik', 'bhojak', 'bhojak@gmail.com', '135468', 'Dr Shetty From 4pm to 6pm', 'paid'),
('abc', 'def', '123@gmail.com', '56874', 'Dr. Ashok kumar', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
