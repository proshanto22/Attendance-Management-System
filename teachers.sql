-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 02:10 PM
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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `name` varchar(255) NOT NULL,
  `SSN` varchar(10) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `pswrepeat` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `section1` varchar(1) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `section2` varchar(1) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `section3` varchar(1) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `section4` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `SSN`, `psw`, `pswrepeat`, `branch`, `subject1`, `section1`, `subject2`, `section2`, `subject3`, `section3`, `subject4`, `section4`) VALUES
('Shukla', '1234qwe', '123', '123', 'CSE', 'ST', 'o', 'WSN', 'o', 'AI', 'o', 'CBD', 'o'),
('Sohan', '123abc', '12345678', '12345678', 'CSE', 'DS', 'o', 'AI', 'o', 'WSN', 'o', 'CPD', 'o'),
('ram', '123dca', 'abc', 'abc', 'CSE', 'DS', 'o', 'IWT', 'o', 'CN', 'o', 'DBMS', 'o'),
('Khan', '567ers', 'qwe', 'qwe', 'CSE', 'DS', 'o', 'FLAT', 'o', 'CD', 'o', 'CG', 'o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`SSN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
