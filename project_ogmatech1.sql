-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 12:24 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ogmatech1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `fname`, `mname`, `lname`, `email`, `pass`, `gender`) VALUES
(1, 'Saumitra', '', 'Das', 'admin@gmail.com', '333', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `did` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `durl` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `filename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`did`, `tid`, `durl`, `uid`, `about`, `filename`) VALUES
(27, 5, 'uploaded_files/23127822_pulsar-150.png', 1, 'pulsar 150', 'pulsar-150.png'),
(28, 1, 'uploaded_files/14608593_ApplicationReceipt_106001170261.pdf', 1, 'try', 'ApplicationReceipt_1'),
(29, 1, 'uploaded_files/8414783_1.pdf', 1, 'trrrryyy', '1.pdf'),
(31, 1, 'uploaded_files/70790698_3.pdf', 2, 'try', '3.pdf'),
(32, 1, 'uploaded_files/14187539_4.pdf', 2, 'try', '4.pdf'),
(33, 1, 'uploaded_files/61663823_5.pdf', 2, 'trrrryyy', '5.pdf'),
(34, 1, 'uploaded_files/72233951_6.pdf', 2, 'try', '6.pdf'),
(35, 4, 'uploaded_files/89794990_7.pdf', 2, 'try', '7.pdf'),
(36, 2, 'uploaded_files/1664622_8.pdf', 2, 'logo', '8.pdf'),
(37, 7, 'uploaded_files/29603288_WBUTAdmitCard_171060110003 of 2017-2018_10600117026.pdf', 1, 'pulsar 150', 'WBUTAdmitCard_171060');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `down id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `nofd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`down id`, `did`, `nofd`) VALUES
(3, 23, 3),
(4, 24, 1),
(5, 25, 1),
(6, 27, 1),
(7, 28, 5),
(8, 29, 3),
(10, 31, 3),
(11, 32, 0),
(12, 33, 0),
(13, 34, 0),
(14, 35, 0),
(15, 36, 1),
(16, 37, 3);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_document`
--

CREATE TABLE `status_document` (
  `appid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_document`
--

INSERT INTO `status_document` (`appid`, `did`, `status`) VALUES
(11, 23, '1'),
(12, 24, '2'),
(13, 25, '1'),
(14, 27, '1'),
(15, 28, '1'),
(16, 29, '1'),
(18, 31, '2'),
(19, 32, '1'),
(20, 33, '1'),
(21, 34, '1'),
(22, 35, '1'),
(23, 36, '1'),
(24, 37, '0');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `tid` int(11) NOT NULL,
  `tname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`tid`, `tname`) VALUES
(1, 'Arts'),
(2, 'It'),
(3, 'English'),
(4, 'Commerce'),
(5, 'Technology'),
(7, 'Science'),
(8, 'bike');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `squestion` varchar(100) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `ph` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `mname`, `lname`, `email`, `pwd`, `dob`, `gender`, `squestion`, `ans`, `ph`) VALUES
(1, 'Anirban', '', 'Sarkar', 'ani@gmail.com', '123', '2018-07-04', 'male', 'Enter your favourite animal', 'dog', '122334'),
(2, 'suman', '', 'Saha', 's@gmail.com', '11', '2018-08-06', 'female', 'Enter favourite food name', 'alu', '12121'),
(3, 'ankit', '', 'SAHA', 'aaa1@gmail.com', '11', '2018-08-16', 'female', 'Enter your favourite animal', 'ME', '323232'),
(11, 'Anirban 22', '', 'Sarkar', 'Asasa@gmail.com', '111', '2018-08-17', 'male', 'Enter favourite food name', 'aasdasd', '3123123'),
(12, 'Anirban 22', '', 'Sarkar', 'Asasa@gmail.com', '111', '2018-08-17', 'male', 'Enter favourite food name', 'aasdasd', '3123123'),
(13, '123242354235', '232', '423423', '', '', '', '', '', '', ''),
(14, '123242354235', '232', '423423', '', '', '', '', '', '', ''),
(15, '12', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`down id`);

--
-- Indexes for table `status_document`
--
ALTER TABLE `status_document`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `down id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `status_document`
--
ALTER TABLE `status_document`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
