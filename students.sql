-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 02:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(255) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `Attended1` int(2) NOT NULL,
  `Total1` int(2) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `Attended2` int(2) NOT NULL,
  `Total2` int(2) NOT NULL,
  `pswrepeat` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `Attended3` int(2) NOT NULL,
  `Total3` int(2) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `Attended4` int(2) NOT NULL,
  `Total4` int(2) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `Attended5` int(2) NOT NULL,
  `Total5` int(2) NOT NULL,
  `subject6` varchar(255) NOT NULL,
  `Attended6` int(2) NOT NULL,
  `Total6` int(2) NOT NULL,
  `lab1` varchar(255) NOT NULL,
  `Attended7` int(2) NOT NULL,
  `Total7` int(2) NOT NULL,
  `lab2` varchar(255) NOT NULL,
  `Attended8` int(2) NOT NULL,
  `Total8` int(2) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `USN`, `subject1`, `Attended1`, `Total1`, `subject2`, `Attended2`, `Total2`, `pswrepeat`, `subject3`, `Attended3`, `Total3`, `subject4`, `Attended4`, `Total4`, `subject5`, `Attended5`, `Total5`, `subject6`, `Attended6`, `Total6`, `lab1`, `Attended7`, `Total7`, `lab2`, `Attended8`, `Total8`, `Branch`, `psw`) VALUES
('Sourabh ', '1DS16CS110', 'DS', 4, 7, 'CBD', 5, 5, '1234', 'AI', 8, 8, 'CN', 13, 15, 'CD', 0, 12, 'DMS', 12, 12, 'IWT Lab', 3, 6, 'CG Lab', 2, 2, 'CSE', '1234'),
('Tharun Virat', '1DS16CS115', 'DS', 13, 14, 'IWT', 5, 5, '12345678', 'CN', 4, 9, 'CD', 23, 62, 'CBD', 10, 12, 'CG', 1, 9, 'IWT Lab', 2, 2, 'CG Lab', 3, 5, 'CSE', '12345678'),
('Yash Kaushal', '1DS16CS122', 'DS', 13, 15, 'IWT', 7, 9, '123', 'CD', 10, 15, 'DMS', 12, 14, 'CBD', 18, 31, 'ST', 20, 20, 'IWT Lab', 8, 8, 'CG Lab', 2, 8, 'CSE', '123'),
('Ruthvik Param', '1DS16CS125', 'DS', 5, 8, 'DBMS', 9, 9, '12345678', 'DMS', 2, 11, 'CPD', 5, 5, 'CBD', 6, 7, 'CG', 9, 9, 'IWT Lab', 1, 3, 'CG Lab', 3, 3, 'CSE', '12345678'),
('Abhi Shek', '1DS16CS130', 'DS', 0, 0, 'IWT', 0, 0, '123', 'CN', 0, 0, 'CG', 0, 0, 'CBD', 0, 0, 'ST', 0, 0, 'IWT Lab', 0, 0, 'CG Lab', 0, 0, 'CSE', '123'),
('Vadiraj KRH', '1DS16CS131', 'DS', 11, 15, 'IWT', 0, 0, '123', 'AI', 0, 0, 'FLAT', 0, 0, 'CBD', 0, 0, 'WSN', 0, 0, 'IWT Lab', 0, 0, 'CG Lab', 0, 0, 'CSE', '123'),
('Shubham', '1DS16CS132', 'DS', 1, 15, 'IWT', 0, 0, '123', 'CD', 0, 0, 'CG', 0, 0, 'CBD', 0, 0, 'ST', 0, 0, 'IWT Lab', 0, 0, 'CG Lab', 0, 0, 'CSE', '123'),
('Revanth', '1DS16CS133', 'IWT', 2, 2, 'DS', 4, 5, '123', 'CD', 5, 8, 'CN', 10, 16, 'CG', 6, 6, 'CBD', 1, 5, 'IWT Lab', 1, 1, 'CG Lab', 2, 4, 'CSE', '123'),
('Sacheth', '1DS16CS134', 'DS', 0, 0, 'CN', 0, 0, '1234', 'AI', 0, 0, 'DBMS', 0, 0, 'CBD', 0, 0, 'SA', 0, 0, 'IWT Lab', 0, 0, 'CG Lab', 0, 0, 'CSE', '1234'),
('Adith', '1DS17CS400', 'DS', 0, 0, 'IWT', 0, 0, '1234', 'CN', 0, 0, 'DBMS', 0, 0, 'CBD', 0, 0, 'WSN', 0, 0, 'IWT Lab', 0, 0, 'CG Lab', 0, 0, 'CSE', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
