-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 10:52 AM
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
-- Database: `onlinequizsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attempts`
--

CREATE TABLE `attempts` (
  `id` int(11) NOT NULL,
  `total_question` varchar(50) NOT NULL,
  `correct_answer` varchar(50) NOT NULL,
  `wrong_answer` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `totalmarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attempts`
--

INSERT INTO `attempts` (`id`, `total_question`, `correct_answer`, `wrong_answer`, `username`, `category`, `totalmarks`) VALUES
(1, '2', '1', '1', 'lamisa', 'PHP', '1'),
(2, '2', '2', '0', 'lamisa', 'PHP', '2'),
(3, '2', '1', '1', 'lamisa', 'PHP', '1'),
(4, '2', '0', '2', 'lamisa', 'PHP', '0'),
(5, '2', '2', '0', 'lamisa', 'PHP', '2'),
(6, '2', '2', '0', 'lamisa', 'math', '2'),
(7, '1', '0', '1', 'lamisa', 'math', '0'),
(8, '2', '2', '0', 'lamisa', 'PHP', '2'),
(9, '2', '2', '0', 'lamisa', 'PHP', '2'),
(12, '2', '2', '0', 'lamisa', 'PHP', '2'),
(13, '1', '0', '1', 'lamisa', 'C', '0'),
(14, '2', '2', '0', 'lamisa', 'PHP', '2'),
(15, '2', '2', '0', 'lamisa', 'PHP', '2'),
(20, '1', '1', '0', 'lamisa', 'C', '1'),
(21, '1', '1', '0', 'lamisa', 'C', '1'),
(22, '1', '1', '0', 'lamisa', 'C', '1'),
(23, '1', '1', '0', 'lamisa', 'C', '1'),
(24, '1', '1', '0', 'lamisa', 'C', '1'),
(25, '2', '1', '1', 'lamisa', 'PHP', '1'),
(26, '1', '0', '1', 'lamisa', 'C', '0'),
(27, '1', '0', '1', 'lamisa', 'math', '0'),
(28, '1', '0', '1', 'lamisa', 'math', '0'),
(29, '1', '0', '1', 'lamisa', 'math', '0'),
(30, '1', '0', '1', 'lamisa', 'math', '0'),
(31, '1', '0', '1', 'lamisa', 'math', '0'),
(32, '1', '0', '1', 'lamisa', 'math', '0'),
(33, '1', '0', '1', 'lamisa', 'math', '0'),
(34, '1', '0', '1', 'lamisa', 'math', '0'),
(35, '1', '1', '0', 'lamisa', 'english', '1'),
(36, '1', '1', '0', 'lamisa', 'english', '1'),
(37, '2', '0', '2', 'lamisa', 'PHP', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(12, 'C'),
(17, 'english'),
(14, 'math'),
(15, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question_no` varchar(10) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `opt1` varchar(100) DEFAULT NULL,
  `opt2` varchar(100) DEFAULT NULL,
  `opt3` varchar(100) DEFAULT NULL,
  `opt4` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `categoryname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `categoryname`) VALUES
(4, '1', 'How to insert single line comment in C++?', '/*This is a comment', '*This is a comment', '//This is a comment', '!!This is a comment', '//This is a comment', 'C'),
(5, '1', 'What is the full form of PHP?', 'Personal House Page', 'Personal Home Page', 'Processor Home Page', 'None of them', 'Personal Home Page', 'PHP'),
(6, '2', 'How to insert single line comment in PHP?', '//', '??', '&&', 'none', '//', 'PHP'),
(10, '1', '5+5=?', '10', '3', '12', '9', '10', 'math'),
(11, '1', '5+5=?', '8', '11', '10', '13', '10', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `pass`) VALUES
(1, 'lamisa', '1234'),
(7, 'adeeba', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `attempts`
--
ALTER TABLE `attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryname` (`categoryname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attempts`
--
ALTER TABLE `attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`categoryname`) REFERENCES `category` (`name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
