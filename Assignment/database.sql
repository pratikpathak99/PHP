-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 03:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `birthDate` date NOT NULL,
  `eid` varchar(25) NOT NULL,
  `psw` varchar(15) NOT NULL,
  `status` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `birthDate`, `eid`, `psw`, `status`) VALUES
(1, 'Pratik Pathak', '1999-09-11', 'pratikpathak45@gmail.com', '123', 1),
(2, 'Harit', '2020-11-03', 'harit@gmail.com', '123', 1),
(3, 'Dhara', '1999-06-26', 'dhara@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_login_log`
--

CREATE TABLE `employee_login_log` (
  `log_id` int(11) NOT NULL,
  `E_id` varchar(25) NOT NULL,
  `Entery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_login_log`
--

INSERT INTO `employee_login_log` (`log_id`, `E_id`, `Entery_date`) VALUES
(2, 'pratikpathak45@gmail.com', '2021-01-30'),
(3, 'pratikpathak45@gmail.com', '2021-01-30'),
(4, 'pratikpathak45@gmail.com', '2021-01-30'),
(5, 'pratikpathak45@gmail.com', '2021-01-30'),
(6, 'harit@gmail.com', '2021-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `student_id` int(11) NOT NULL,
  `STQA` int(11) NOT NULL,
  `OOAD` int(11) NOT NULL,
  `PHP` int(11) NOT NULL,
  `IP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`student_id`, `STQA`, `OOAD`, `PHP`, `IP`) VALUES
(1, 83, 84, 87, 86),
(4, 40, 40, 40, 40),
(5, 65, 76, 63, 59);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `status`) VALUES
(1, 'Pratik', 1),
(2, 'Harit', 1),
(3, 'vishal', 1),
(4, 'Shruti', 1),
(5, 'indus', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_login_log`
--
ALTER TABLE `employee_login_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_login_log`
--
ALTER TABLE `employee_login_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
