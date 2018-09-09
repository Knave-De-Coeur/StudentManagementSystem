-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 01:14 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Id` int(11) NOT NULL,
  `StudentId` int(6) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `ZipPostalCode` varchar(255) NOT NULL,
  `DisplayOrder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Id`, `StudentId`, `Address1`, `Address2`, `City`, `State`, `ZipPostalCode`, `DisplayOrder`) VALUES
(1, 1, '153 Tara', 'Luqa Briffa Street', 'Gzira', 'Gzira', 'GZR 1505', 0),
(11, 79, '123 Name', '123 Name', 'CityName', 'StateName', 'SPS 900', 1),
(12, 1, '89 Something', '89 Something', '', 'San Gwan', 'SGW 104', -1),
(13, 80, '10 House', 'Something Road ', '', 'Birgu', 'BRG 798', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Id` int(3) NOT NULL,
  `Room` varchar(255) NOT NULL,
  `Faculty` varchar(255) DEFAULT NULL,
  `ShortDescription` text,
  `FullDescription` text,
  `Lecturer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Id`, `Room`, `Faculty`, `ShortDescription`, `FullDescription`, `Lecturer`) VALUES
(1, '101', 'Science', 'Lorem Ipsuum', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet posuere massa. Aliquam non luctus massa. Praesent id malesuada nulla. Donec turpis lorem, commodo at turpis sed, dictum tempus libero. Sed sagittis est ut felis ultricies, in commodo velit ultrices. Quisque ornare dolor at aliquam tincidunt. Nulla est nisi, mollis ut tellus sit amet, tincidunt ornare lorem. Aenean pharetra in quam in dictum. Vivamus semper, mauris et feugiat consectetur, nisi diam mollis erat, sed dictum elit tortor et dolor. Nulla nec felis sed metus lacinia efficitur. Duis mattis purus at vulputate efficitur.', 'Mr. Science Teacher'),
(2, '501', 'Science', 'Lorem ipsum but for 501', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet posuere massa. Aliquam non luctus massa. Praesent id malesuada nulla. Donec turpis lorem, commodo at turpis sed, dictum tempus libero. Sed sagittis est ut felis ultricies, in commodo velit ultrices. Quisque ornare dolor at aliquam tincidunt. Nulla est nisi, mollis ut tellus sit amet, tincidunt ornare lorem. Aenean pharetra in quam in dictum. Vivamus semper, mauris et feugiat consectetur, nisi diam mollis erat, sed dictum elit tortor et dolor. Nulla nec felis sed metus lacinia efficitur. Duis mattis purus at vulputate efficitur.', 'Mr. Science Teacher'),
(3, '502', 'History', 'Lorem Historia', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet posuere massa. Aliquam non luctus massa. Praesent id malesuada nulla. Donec turpis lorem, commodo at turpis sed, dictum tempus libero. Sed sagittis est ut felis ultricies, in commodo velit ultrices. Quisque ornare dolor at aliquam tincidunt. Nulla est nisi, mollis ut tellus sit amet, tincidunt ornare lorem. Aenean pharetra in quam in dictum. Vivamus semper, mauris et feugiat consectetur, nisi diam mollis erat, sed dictum elit tortor et dolor. Nulla nec felis sed metus lacinia efficitur. Duis mattis purus at vulputate efficitur.', 'Mr. History Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(6) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `IDNumber` varchar(255) NOT NULL,
  `Level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `Name`, `Surname`, `DateOfBirth`, `IDNumber`, `Level`) VALUES
(1, 'Alex', 'Mifsud', '1996-03-14', '123896M', 5),
(79, 'Nathan Drake', 'Drake', '1996-04-13', '978987N', 1),
(80, 'Sarah', 'Smith', '2000-06-01', '76856N', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student_class_mapper`
--

CREATE TABLE `student_class_mapper` (
  `id` int(11) NOT NULL,
  `ClassId` int(3) NOT NULL,
  `StudentId` int(6) NOT NULL,
  `DisplayOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class_mapper`
--

INSERT INTO `student_class_mapper` (`id`, `ClassId`, `StudentId`, `DisplayOrder`) VALUES
(3, 2, 1, 1),
(4, 3, 1, 2),
(8, 1, 79, 0),
(9, 3, 80, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StudentId` (`StudentId`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_class_mapper`
--
ALTER TABLE `student_class_mapper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ClassId` (`ClassId`),
  ADD KEY `StudentId` (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `student_class_mapper`
--
ALTER TABLE `student_class_mapper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fy_student_Constraint` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_class_mapper`
--
ALTER TABLE `student_class_mapper`
  ADD CONSTRAINT `fk_class_mapper` FOREIGN KEY (`ClassId`) REFERENCES `class` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_mapper` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
