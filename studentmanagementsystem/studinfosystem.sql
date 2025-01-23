-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 10:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studinfosystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `Position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user`, `password`, `confirmpassword`, `Position`) VALUES
(1, 'admin', 'aeyaey', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN'),
(12, 'mond', 'esparagoza', 'mond@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'CLIENT'),
(13, 'Raymond', 'Esparagoza', 'raymond@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'CLIENT'),
(14, 'Mike', 'Batac', 'mike123g@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'CLIENT');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `NAME`, `DESCRIPTION`) VALUES
(23, 'BSIT', 'Bachelor of Science in Information Technology'),
(25, 'BSEMC', ' Bachelor of Science in Entertainment and Multimedia Computing'),
(26, 'BSCS', 'Bachelor of Science in Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `ENROLLMENT_ID` int(255) NOT NULL,
  `STUDENT` varchar(255) NOT NULL,
  `COURSE_ID` int(255) NOT NULL,
  `level_id` int(255) NOT NULL,
  `Status_id` int(255) NOT NULL,
  `DATE_ENROLLED` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`ENROLLMENT_ID`, `STUDENT`, `COURSE_ID`, `level_id`, `Status_id`, `DATE_ENROLLED`) VALUES
(108, 'Renee Boy Solas', 23, 4, 2, '2024-12-11'),
(109, 'Santa Maria', 26, 3, 1, '2024-12-05'),
(110, 'Raul Joseph Saint', 26, 2, 1, '2024-12-05'),
(111, 'Arnold Arthur', 25, 1, 2, '2024-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `year_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `year_level`) VALUES
(1, '1st year'),
(2, '2nd year'),
(3, '3rd year'),
(4, '4th year');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `DAY` varchar(255) NOT NULL,
  `START_TIME` varchar(255) NOT NULL,
  `END_TIME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `DAY`, `START_TIME`, `END_TIME`) VALUES
(45474, '2024-12-30', '07:01', '19:02'),
(45476, '2024-12-16', '10:00', '15:00'),
(45477, '2024-12-15', '17:00', '21:00');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `SECTION_ID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `COURSE_ID` varchar(50) NOT NULL,
  `SCHEDULE_ID` int(11) NOT NULL,
  `INSTRUCTION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SECTION_ID`, `NAME`, `COURSE_ID`, `SCHEDULE_ID`, `INSTRUCTION_ID`) VALUES
('1', 'Renee Boy Solas', '23', 45475, 0),
('2', 'Arnold Arthur', '25', 45476, 0),
('3', 'Santa Maria', '26', 45475, 0),
('4', 'Raul Joseph Saint', '26', 45476, 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_id`, `status_name`) VALUES
(1, 'Old'),
(2, 'New'),
(3, 'Transferee'),
(4, 'Returnee');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STUDENT_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `COURSE_ID` int(50) NOT NULL,
  `level_id` int(255) NOT NULL,
  `Status_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STUDENT_ID`, `FIRST_NAME`, `Last_Name`, `EMAIL`, `COURSE_ID`, `level_id`, `Status_id`) VALUES
(14, 'Santa', 'Maria', 'Santa@gmail.com', 26, 3, 1),
(15, 'Raul Joseph', 'Saint', 'Raul@gmial.com', 26, 2, 1),
(16, 'Renee Boy', 'Solas', 'renee@gmail.com', 23, 4, 2),
(18, 'Arnold', 'Arthur', 'arnold@gmail.com', 25, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`ENROLLMENT_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `Status_id` (`Status_id`),
  ADD KEY `enrollment_ibfk_2` (`level_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`SECTION_ID`) USING BTREE;

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUDENT_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `Status_id` (`Status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `ENROLLMENT_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45478;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`COURSE_ID`) REFERENCES `course` (`COURSE_ID`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`),
  ADD CONSTRAINT `enrollment_ibfk_3` FOREIGN KEY (`Status_id`) REFERENCES `status` (`Status_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`COURSE_ID`) REFERENCES `course` (`COURSE_ID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`Status_id`) REFERENCES `status` (`Status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
