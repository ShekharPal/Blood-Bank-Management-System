-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2025 at 08:54 PM
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
-- Database: `my_bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_registration`
--

CREATE TABLE `blood_bank_registration` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `reg_no` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `license_validity` date DEFAULT NULL,
  `phone` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_bank_registration`
--

INSERT INTO `blood_bank_registration` (`id`, `bank_name`, `reg_no`, `address`, `city`, `state`, `contact_person`, `email`, `license_validity`, `phone`) VALUES
(1, 'Lions Club', '7655432212', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', 'WEST BENGAL', 'JITRAJ DAS', 'swaraj.roy2018@gmail.com', '2036-10-29', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `blood_camp_registration`
--

CREATE TABLE `blood_camp_registration` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `organizer_name` varchar(255) DEFAULT NULL,
  `camp_address` text DEFAULT NULL,
  `camp_city` varchar(100) DEFAULT NULL,
  `camp_date` date DEFAULT NULL,
  `num_donors` int(11) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_camp_registration`
--

INSERT INTO `blood_camp_registration` (`id`, `bank_name`, `organizer_name`, `camp_address`, `camp_city`, `camp_date`, `num_donors`, `contact_email`, `contact_phone`) VALUES
(2, 'Lions Club', 'Ashutosh Banik', 'Siliguri,Champasari', 'Siliguri', '2025-06-25', 70, 'lionsclub@gmail.com', '7982013456'),
(3, 'Lions Club', 'Ashutosh Banik', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '2025-06-25', 89, 'swaraj.roy2018@gmail.com', '06294011706');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `age` varchar(25) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mno`) VALUES
(31, 'SUBHASREE SAHA', 'SRIBAS SAHA', 'SILIGURI, GHOGHOMARI', 'Siliguri', '21', 'O+', 'subhasreeofficial7@gmail.com', '7098201378'),
(32, 'JITRAJ DAS', 'BIKAS DAS', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '22', 'B+', 'swaraj.roy2018@gmail.com', '06294011706');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_b`
--

CREATE TABLE `exchange_b` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `age` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL,
  `bgroup` varchar(50) DEFAULT NULL,
  `ebgroup` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_b`
--

INSERT INTO `exchange_b` (`id`, `name`, `fname`, `address`, `city`, `age`, `email`, `mno`, `bgroup`, `ebgroup`) VALUES
(2, 'JITRAJ DAS', 'bikas', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '21', 'swaraj.roy2018@gmail.com', '6294011706', 'B+', 'O+'),
(3, 'JITRAJ DAS', 'buck', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '21', 'swaraj.roy2018@gmail.com', '06294011706', 'O+', 'B+'),
(4, 'JITRAJ DAS', 'bhalu', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '65', 'swaraj.roy2018@gmail.com', '06294011706', 'A+', 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `out_stoke_b`
--

CREATE TABLE `out_stoke_b` (
  `id` int(11) NOT NULL,
  `bname` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipient_registration`
--

CREATE TABLE `recipient_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `age` varchar(25) DEFAULT NULL,
  `rbgroup` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipient_registration`
--

INSERT INTO `recipient_registration` (`id`, `name`, `fname`, `address`, `city`, `age`, `rbgroup`, `email`, `mno`) VALUES
(31, 'JITRAJ DAS', 'buck', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '21', 'B-', 'swaraj.roy2018@gmail.com', '06294011706'),
(32, 'JITRAJ DAS', 'buck', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '21', 'O+', 'swaraj.roy2018@gmail.com', '06294011706'),
(33, 'JITRAJ DAS', 'q', 'S.P.Roy Sarani road\r\nSukantapally', 'Siliguri', '64', 'AB+', 'swaraj.roy2018@gmail.com', '06294011706');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`,`uname`,`pass`),
  ADD KEY `id` (`id`,`uname`,`pass`);

--
-- Indexes for table `blood_bank_registration`
--
ALTER TABLE `blood_bank_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_camp_registration`
--
ALTER TABLE `blood_camp_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_b`
--
ALTER TABLE `exchange_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stoke_b`
--
ALTER TABLE `out_stoke_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipient_registration`
--
ALTER TABLE `recipient_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_bank_registration`
--
ALTER TABLE `blood_bank_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_camp_registration`
--
ALTER TABLE `blood_camp_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `exchange_b`
--
ALTER TABLE `exchange_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `out_stoke_b`
--
ALTER TABLE `out_stoke_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipient_registration`
--
ALTER TABLE `recipient_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
