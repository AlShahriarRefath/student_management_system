-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 06:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_done`
--

CREATE TABLE `reg_done` (
  `No` int(11) NOT NULL,
  `Stu_Name` varchar(20) NOT NULL,
  `Stu_ID` int(20) NOT NULL,
  `Stu_Dept` varchar(20) NOT NULL,
  `Stu_Courses` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_done`
--

INSERT INTO `reg_done` (`No`, `Stu_Name`, `Stu_ID`, `Stu_Dept`, `Stu_Courses`) VALUES
(1, 'Refath', 51020, 'CSE', 'Software, Compiler, Graphics'),
(2, 'Sinthia', 51011, 'CSE', 'Compiler, Graphics, Industrial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_done`
--
ALTER TABLE `reg_done`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_done`
--
ALTER TABLE `reg_done`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
