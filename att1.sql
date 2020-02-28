-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 08:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `att1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(10) NOT NULL,
  `PASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `PASS`) VALUES
('1234', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `USN` varchar(10) NOT NULL,
  `SUBJECT` varchar(50) NOT NULL,
  `ATTENDED` int(2) NOT NULL,
  `TOTAL` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`USN`, `SUBJECT`, `ATTENDED`, `TOTAL`) VALUES
('1BI16IS039', 'ML', 13, 15),
('1BI16IS039', 'SADP', 13, 15),
('1BI16IS039', 'SAN', 15, 18),
('1BI16IS039', 'USP', 12, 16),
('1BI16IS039', 'WT', 13, 16),
('1BI16IS039', 'IOT', 17, 18),
('1BI16IS039', 'ML LAB', 4, 5),
('1BI16IS039', 'WT LAB', 4, 4),
('1BI16IS041', 'ML', 16, 17),
('1BI16IS041', 'SADP', 11, 15),
('1BI16IS041', 'SAN', 14, 18),
('1BI16IS041', 'USP', 13, 16),
('1BI16IS041', 'WT', 11, 16),
('1BI16IS041', 'IOT', 16, 18),
('1BI16IS041', 'ML LAB', 4, 5),
('1BI16IS041', 'WT LAB', 3, 4),
('1BI16IS029', 'ML', 0, 0),
('1BI16IS029', 'SADP', 12, 15),
('1BI16IS029', 'SAN', 12, 14),
('1BI16IS029', 'USP', 0, 0),
('1BI16IS029', 'WT', 0, 0),
('1BI16IS029', 'CLOUD', 15, 17),
('1BI16IS029', 'ML LAB', 3, 5),
('1BI16IS029', 'WT LAB', 3, 4),
('1BI16CS022', 'ML', 0, 0),
('1BI16CS022', 'SADP', 0, 0),
('1BI16CS022', 'SAN', 0, 0),
('1BI16CS022', 'WT', 0, 0),
('1BI16CS022', 'CLOUD', 0, 0),
('1BI16CS022', 'IOT', 0, 0),
('1BI16CS022', 'ML LAB', 0, 0),
('1BI16CS022', 'CG LAB', 0, 0),
('1BI16CS044', 'ML', 0, 0),
('1BI16CS044', 'SADP', 0, 0),
('1BI16CS044', 'SAN', 0, 0),
('1BI16CS044', 'USP', 0, 0),
('1BI16CS044', 'CLOUD', 0, 0),
('1BI16CS044', 'IOT', 0, 0),
('1BI16CS044', 'ML LAB', 0, 0),
('1BI16CS044', 'CG LAB', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `USN` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `SEM` int(2) NOT NULL,
  `SECTION` varchar(2) NOT NULL,
  `BRANCH` varchar(20) NOT NULL,
  `SUBJECT1` varchar(30) NOT NULL,
  `SUBJECT2` varchar(30) NOT NULL,
  `SUBJECT3` varchar(30) NOT NULL,
  `SUBJECT4` varchar(30) NOT NULL,
  `SUBJECT5` varchar(30) NOT NULL,
  `SUBJECT6` varchar(30) NOT NULL,
  `LAB1` varchar(30) NOT NULL,
  `LAB2` varchar(30) NOT NULL,
  `PSW` varchar(30) NOT NULL,
  `PSWREPEAT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`USN`, `NAME`, `SEM`, `SECTION`, `BRANCH`, `SUBJECT1`, `SUBJECT2`, `SUBJECT3`, `SUBJECT4`, `SUBJECT5`, `SUBJECT6`, `LAB1`, `LAB2`, `PSW`, `PSWREPEAT`) VALUES
('1BI16CS022', 'MAYANK', 7, 'B', 'CSE', 'ML', 'SADP', 'SAN', 'WT', 'CLOUD', 'IOT', 'ML LAB', 'CG LAB', 'maya', 'maya'),
('1BI16CS044', 'ROBIN', 7, 'B', 'CSE', 'ML', 'SADP', 'SAN', 'USP', 'CLOUD', 'IOT', 'ML LAB', 'CG LAB', 'rob22', 'rob22'),
('1BI16IS029', 'ASIF', 7, 'B', 'ISE', 'ML', 'SADP', 'SAN', 'USP', 'WT', 'CLOUD', 'ML LAB', 'WT LAB', 'as12', 'as12'),
('1BI16IS039', 'PROSHANTO', 7, 'A', 'ISE', 'ML', 'SADP', 'SAN', 'USP', 'WT', 'IOT', 'ML LAB', 'WT LAB', 'pass', 'pass'),
('1BI16IS041', 'RAM', 7, 'A', 'ISE', 'ML', 'SADP', 'SAN', 'USP', 'WT', 'IOT', 'ML LAB', 'WT LAB', 'ram', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `BRANCH` varchar(50) NOT NULL,
  `SUBJECT1` varchar(50) NOT NULL,
  `SECTION1` varchar(2) NOT NULL,
  `SUBJECT2` varchar(50) NOT NULL,
  `SECTION2` varchar(2) NOT NULL,
  `PSW` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`ID`, `NAME`, `BRANCH`, `SUBJECT1`, `SECTION1`, `SUBJECT2`, `SECTION2`, `PSW`) VALUES
('1001', 'SHIVAKUMAR', 'ISE', 'ML', 'A', 'FS', 'A', 'shiva'),
('1002', 'PADMANABHA', 'ISE', 'SADP', 'A', 'SADP', 'B', 'padh22'),
('1003', 'M.SHILPA', 'ISE', 'SAN', 'A', 'MP', 'A', 'ship12'),
('1004', 'ROOPA', 'ISE', 'USP', 'A', 'OS', 'B', 'roop2'),
('1005', 'T.SHILPA', 'ISE', 'WT', 'A', 'CLOUD', 'B', 'shilp7'),
('1006', 'RAMESH', 'ISE', 'IOT', 'A', 'SAN', 'B', 'ram22'),
('1007', 'CHETANA', 'ISE', 'ML LAB', 'A', 'ML LAB', 'B', 'chet12'),
('1008', 'PRAMEELA', 'ISE', 'WT LAB', 'A', 'WT LAB', 'B', 'prem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
