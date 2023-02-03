-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 04:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `early_drop`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_stud_file`
--

CREATE TABLE `check_stud_file` (
  `id` int(11) NOT NULL,
  `file_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_stud_file`
--

INSERT INTO `check_stud_file` (`id`, `file_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL,
  `section` varchar(250) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`, `section`, `date_uploaded`) VALUES
(1, 'STUDENT - Sheet1 (4)', 'files/STUDENT - Sheet1 (4).csv', '1B', '2022-10-05'),
(2, 'STUDENT - Sheet1 (4)', 'files/STUDENT - Sheet1 (4).csv', '4B', '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `file_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `course`, `year`, `section`, `gender`, `date_created`, `file_id`) VALUES
(1, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(2, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'FEMALE', '10-05-2022', 1),
(3, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'FEMALE', '10-05-2022', 1),
(4, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'FEMALE', '10-05-2022', 1),
(5, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'MALE', '10-05-2022', 1),
(6, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(7, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(8, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(9, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(10, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(11, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 1),
(12, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'MALE', '10-05-2022', 1),
(14, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'FEMALE', '10-05-2022', 2),
(15, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'FEMALE', '10-05-2022', 2),
(16, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'FEMALE', '10-05-2022', 2),
(17, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'MALE', '10-05-2022', 2),
(18, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 2),
(19, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 2),
(20, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 2),
(21, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 2),
(22, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 2),
(23, 'GERALD MICO', 'FACISTOL', 'BSIT', '1ST YEAR', '1B', 'MALE', '10-05-2022', 2),
(24, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'MALE', '10-05-2022', 2);

-- --------------------------------------------------------

--
-- Table structure for table `survey_file`
--

CREATE TABLE `survey_file` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_file`
--

INSERT INTO `survey_file` (`id`, `name`, `file`, `survey_id`, `date_uploaded`) VALUES
(1, 'Qoo10 New Product Listing', 'files/Qoo10 New Product Listing.docx', 2, '2022-10-05'),
(2, 'Qoo10 New Product Listing (1)', 'files/Qoo10 New Product Listing (1).docx', 3, '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `survey_response`
--

CREATE TABLE `survey_response` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `survey_id` int(10) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_response`
--

INSERT INTO `survey_response` (`id`, `first_name`, `last_name`, `department`, `email`, `contact_no`, `survey_id`, `date_created`) VALUES
(1, 'Gerald Mico', 'Facistol', 'INFORMATION TECHNOLOGY', 'tricore012@gmail.com', '639166513189', 2, '2022-10-05'),
(2, 'Abegail', 'Sevilla', 'INFORMATION TECHNOLOGY', 'tricore012@gmail.com', '639166513189', 3, '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `suvery`
--

CREATE TABLE `suvery` (
  `id` int(11) NOT NULL,
  `survey_name` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suvery`
--

INSERT INTO `suvery` (`id`, `survey_name`, `start_date`, `end_date`, `date_created`) VALUES
(2, 'TEST SURVEY', '2022-10-05', '2022-10-12', '2022-10-05'),
(3, 'MY SURVEY', '2022-10-12', '2022-10-13', '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Gerald Mico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_stud_file`
--
ALTER TABLE `check_stud_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_file`
--
ALTER TABLE `survey_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_response`
--
ALTER TABLE `survey_response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suvery`
--
ALTER TABLE `suvery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_stud_file`
--
ALTER TABLE `check_stud_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `survey_file`
--
ALTER TABLE `survey_file`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey_response`
--
ALTER TABLE `survey_response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suvery`
--
ALTER TABLE `suvery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
