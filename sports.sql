-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 08:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `empid` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `altmobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `class` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `name`, `empid`, `dob`, `gender`, `mobile`, `altmobile`, `email`, `department`, `class`, `username`, `pass`) VALUES
(1, 'gomathi', 'kasc102', '1996-02-19', 'female', 9876543211, 9876556789, 'gomathi@gmail.com', 'CS', '3 Year', 'gomathi@gmail.com', 'gom102');

-- --------------------------------------------------------

--
-- Table structure for table `hod_details`
--

CREATE TABLE `hod_details` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `empid` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `altmobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hod_details`
--

INSERT INTO `hod_details` (`id`, `name`, `empid`, `dob`, `gender`, `mobile`, `altmobile`, `email`, `department`, `username`, `pass`) VALUES
(2, 'RAJASH', 'KASC002', '1989-11-09', 'male', 9876543210, 9876512345, 'raj@gmail.com', 'CS', 'raj@gmail.com', 'RAJ002');

-- --------------------------------------------------------

--
-- Table structure for table `player_details`
--

CREATE TABLE `player_details` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rno` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `game` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_details`
--

INSERT INTO `player_details` (`id`, `name`, `rno`, `gender`, `department`, `class`, `game`, `status`) VALUES
(1, 'Padhmakumar', '2022k1783', 'male', 'CS', '3 Year', 'Volleyball', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rolno` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `resalt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `rolno`, `dob`, `gender`, `mobile`, `email`, `department`, `class`, `username`, `pass`, `resalt`) VALUES
(1, 'Padhmakumar', '2022k1783', '2024-01-29', 'male', 9876543211, 'padhma@gmail.com', 'CS', '3 Year', 'padhma', 'padhma@01', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(3) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(5) NOT NULL,
  `game` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `department1` varchar(10) NOT NULL,
  `department2` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `date`, `time`, `game`, `gender`, `department1`, `department2`, `type`, `status`, `result`) VALUES
(2, '2024-12-27', '3pm', 'Football', 'male', 'CS', 'IT', '1st Round', 'new', ''),
(3, '2024-12-31', '5pm', 'Volleyball', 'male', 'CS', 'CDF', 'Semi final', 'update', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_details`
--

CREATE TABLE `volunteer_details` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rno` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `date` date NOT NULL,
  `department` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `game` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer_details`
--

INSERT INTO `volunteer_details` (`id`, `name`, `rno`, `gender`, `date`, `department`, `class`, `game`, `status`) VALUES
(1, 'Padhmakumar', '2022k1783', 'male', '2025-01-02', 'CS', '3 Year', 'Cricket', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_details`
--
ALTER TABLE `hod_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_details`
--
ALTER TABLE `player_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_details`
--
ALTER TABLE `volunteer_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hod_details`
--
ALTER TABLE `hod_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `player_details`
--
ALTER TABLE `player_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `volunteer_details`
--
ALTER TABLE `volunteer_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
