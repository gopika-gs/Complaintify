-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 09:01 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Aadhar` int(12) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` text NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `Aadhar`, `Gender`, `Address`, `Phone_no`, `Email`, `Password`) VALUES
(1, 'gopika', 1234567, 'female', 'xyz,vellanad.p.o', 1234567, 'gopika @gmail.com', '56789'),
(2, 'name', 7654, 'ff', 'add', 908, 'mail', 'pass'),
(3, 'ram', 5464654, 'jk', 'hugkugk', 897456, 'gopika@gmail.com', 'kljkjhj'),
(4, 'gopika', 64665465, 'female', 'gugygy', 2147483647, 'gopika@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`,`Aadhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
