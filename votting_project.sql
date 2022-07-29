-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 09:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votting_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `UNAME` varchar(200) NOT NULL,
  `PASS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `UNAME`, `PASS`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(5) NOT NULL,
  `Department_Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Department_Name`) VALUES
(1, 'Engineering'),
(3, 'Zoology'),
(4, 'Math'),
(7, 'Botany'),
(8, 'Bcs'),
(9, 'Mca');

-- --------------------------------------------------------

--
-- Table structure for table `generate_date`
--

CREATE TABLE `generate_date` (
  `ID` int(100) NOT NULL,
  `Voting_date` date NOT NULL,
  `End_votting` date NOT NULL,
  `result_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `generate_date`
--

INSERT INTO `generate_date` (`ID`, `Voting_date`, `End_votting`, `result_time`) VALUES
(1, '2022-02-27', '2022-02-28', '22:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `Notice` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `Notice`) VALUES
(4, 'Please! Register who want to participate '),
(5, 'Registation end in few days harry up..'),
(6, 'Only final year students can Register');

-- --------------------------------------------------------

--
-- Table structure for table `registation_date`
--

CREATE TABLE `registation_date` (
  `ID` int(100) NOT NULL,
  `Registation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registation_date`
--

INSERT INTO `registation_date` (`ID`, `Registation_date`) VALUES
(1, '2022-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
  `ID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `GOAL` varchar(500) NOT NULL,
  `vote_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_students`
--

INSERT INTO `registered_students` (`ID`, `SID`, `GOAL`, `vote_count`) VALUES
(1, 3, 'hhh', 6),
(2, 4, 'kkk shs wgwtws wsgw', 3),
(3, 10, 'hjh asagfasa', 5),
(4, 11, 'nnn', 0),
(5, 6, 'uiui', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(5) NOT NULL,
  `Department` int(5) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(65) NOT NULL,
  `Mob` varchar(13) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Department`, `Year`, `Name`, `Email`, `Mob`, `Address`, `Photo`, `password`) VALUES
(1, 4, 'Second Year', 'Jayesh Bhagwan Chavan', 'jayeshchavan598@gmail.com', '9370669810', 'Old Nandgaon, tq.Ambajogai,beed', 'upload/1_students.png', 'jayesh'),
(2, 1, 'Third Year', 'Manoj Suresh Raut', 'manojraut975@gmail.com', '9168260360', 'Hasegaon,Tq.Kallam,Dist.Osmanabad', 'upload/2_students.png', 'manoj'),
(3, 3, 'Third Year', 'mehu', 'm@gmail.com', '5555', 'Old Nandgaon, tq.Ambajogai,beed', 'upload/3_students.png', 'mehu'),
(4, 1, 'Final Year', 'Jagdish Bhagwan Chavan', 'jagdishchavan55@gmail.com', '9370669810', 'Old Nandgaon, tq.Ambajogai,beed', 'upload/4_students.png', 'jag'),
(5, 4, 'Second Year', 'Mahesh Srikrushn Kadam', 'mahesh@gmail.com', '5555555', 'pune', 'upload/5_students.png', 'mhesh'),
(6, 4, 'Third Year', 'Ram xyz', 'ram@gmail.com', '6766666', 'pune', 'upload/6_students.png', 'ram'),
(7, 1, 'Final Year', 'Subhash Chavan', 's@gmail.com', '1001', 'Old Nandgaon, tq.Ambajogai,beed', 'upload/7_students.png', 'sub'),
(8, 1, 'Third Year', 'Shubham Chavan', 'sh@gmail.com', '1002', 'Old Nandgaon, tq.Ambajogai,beed', 'upload/8_students.png', 'sh'),
(9, 1, 'Second Year', 'Manoj Chavan', 'ma@gmail.com', '1003', 'Ambajogai', 'upload/9_students.png', 'man'),
(10, 3, 'Third Year', 'Pratik More', 'pm@gmail.com', '1004', 'Bardapur, tq.Ambajogai,beed', 'upload/10_students.png', 'pra'),
(11, 7, 'Third Year', 'Dhiraj Kesare', 'dk@gmail.com', '1005', 'latur', 'upload/11_students.png', 'dhi'),
(12, 4, 'First Year', 'Akash Sharma', 'akash@gmail.com', '858588588', 'mumbai', 'upload/12_students.png', 'akshay');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `ID` int(11) NOT NULL,
  `voter` int(11) NOT NULL,
  `candidate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`ID`, `voter`, `candidate`) VALUES
(1, 6, 3),
(2, 12, 3),
(3, 3, 3),
(4, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `ID` int(100) NOT NULL,
  `Year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`ID`, `Year`) VALUES
(1, 'Second Year'),
(3, 'First Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `generate_date`
--
ALTER TABLE `generate_date`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registation_date`
--
ALTER TABLE `registation_date`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `generate_date`
--
ALTER TABLE `generate_date`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registation_date`
--
ALTER TABLE `registation_date`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registered_students`
--
ALTER TABLE `registered_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
