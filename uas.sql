-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 06:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicatiions`
--

CREATE TABLE `applicatiions` (
  `course` varchar(10) NOT NULL,
  `application_number` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approved_req`
--

CREATE TABLE `approved_req` (
  `course` varchar(20) NOT NULL,
  `application_number` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course` varchar(20) NOT NULL,
  `total seats` int(11) NOT NULL,
  `filled_seat` int(11) NOT NULL,
  `requests` int(11) NOT NULL,
  `rejected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course`, `total seats`, `filled_seat`, `requests`, `rejected`) VALUES
('CE', 150, 0, 0, 0),
('IT', 150, 0, 0, 0),
('MH', 150, 0, 0, 0),
('CH', 150, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rejected_req`
--

CREATE TABLE `rejected_req` (
  `course` varchar(20) NOT NULL,
  `application_number` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `student_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gujcetro` int(11) NOT NULL,
  `boardro` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gujcettotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `fname`, `email`, `gujcetro`, `boardro`, `password`, `gujcettotal`) VALUES
(1, 'dhrumil patel', 'dhrumil@mail.com', 0, '00000', 'dhru1', 0),
(2, 'dhrumil2', 'dhru@mail.com', 555111, '555111', 'dhru2', 100),
(3, 'dhrumil3', 'dhrumil1@mail.com', 111555, '111555', 'dhru3', 120),
(4, 'dhrumil2', 'dhrumil2@mail.com', 101010, '101010', 'dhru5', 120),
(5, 'dhrumil7', 'dhrumil7@mail.com', 101111, '101111', 'dhru7', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicatiions`
--
ALTER TABLE `applicatiions`
  ADD KEY `application_number` (`application_number`),
  ADD KEY `student_id` (`student_id`) USING BTREE;

--
-- Indexes for table `approved_req`
--
ALTER TABLE `approved_req`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicatiions`
--
ALTER TABLE `applicatiions`
  MODIFY `application_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicatiions`
--
ALTER TABLE `applicatiions`
  ADD CONSTRAINT `applicatiions_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `approved_req`
--
ALTER TABLE `approved_req`
  ADD CONSTRAINT `approved_req_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
