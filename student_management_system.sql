-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 06:13 PM
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
-- Database: `student_management_system`
--
CREATE DATABASE IF NOT EXISTS `student_management_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `student_management_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

DROP TABLE IF EXISTS `admin_login_details`;
CREATE TABLE `admin_login_details` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `admin_login_details`:
--

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`username`, `pass`) VALUES
('viveksai', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE `student_details` (
  `pinno` varchar(15) NOT NULL,
  `studentname` text NOT NULL,
  `branch` text NOT NULL,
  `course` text NOT NULL,
  `DOB` date NOT NULL,
  `Admission_No` varchar(12) NOT NULL,
  `Admission_Type` text NOT NULL,
  `Gender` text NOT NULL,
  `Caste` varchar(5) NOT NULL,
  `Sub_Caste` text NOT NULL,
  `Religion` text NOT NULL,
  `Student_Aadhar` decimal(12,0) NOT NULL,
  `Ration_Card` varchar(20) NOT NULL,
  `EMail` varchar(35) NOT NULL,
  `Phone` decimal(10,0) NOT NULL,
  `Blood_Group` varchar(4) NOT NULL,
  `Mole1` text NOT NULL,
  `Mole2` text NOT NULL,
  `Permanent_Address` varchar(70) NOT NULL,
  `Present_Address` varchar(70) NOT NULL,
  `Year10` year(4) NOT NULL,
  `Hall_Ticket10` varchar(15) NOT NULL,
  `Institution10` text NOT NULL,
  `Board10` text NOT NULL,
  `Medium10` text NOT NULL,
  `Total_Marks10` int(4) NOT NULL,
  `Obtained_Marks10` int(4) NOT NULL,
  `Percentage_of_Marks10` decimal(10,0) NOT NULL,
  `Marks_Certificate_No10` varchar(19) NOT NULL,
  `TC_No10` varchar(10) NOT NULL,
  `InYear` year(4) NOT NULL,
  `InHall_Ticket` varchar(15) NOT NULL,
  `InInstitution` text NOT NULL,
  `InBoard` text NOT NULL,
  `InMedium` text NOT NULL,
  `InTotal_Marks` int(4) NOT NULL,
  `InObtained_Marks` int(4) NOT NULL,
  `In_Percentage_of_Marks` decimal(10,0) NOT NULL,
  `InMarks_Certificate_No` varchar(19) NOT NULL,
  `InTC_No` varchar(10) NOT NULL,
  `polyHall_Ticket` int(15) NOT NULL,
  `PolyMarks` int(3) NOT NULL,
  `PolyRank` int(8) NOT NULL,
  `Father_Name` text NOT NULL,
  `Fage` int(2) NOT NULL,
  `FQualification` text NOT NULL,
  `Foccupation` text NOT NULL,
  `Faadhar` decimal(12,0) NOT NULL,
  `Fphone` decimal(10,0) NOT NULL,
  `Mother_Name` text NOT NULL,
  `Mage` int(2) NOT NULL,
  `MQualification` text NOT NULL,
  `Moccupation` varchar(15) NOT NULL,
  `Maadhar` decimal(12,0) NOT NULL,
  `Mphone` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `student_details`:
--

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`pinno`, `studentname`, `branch`, `course`, `DOB`, `Admission_No`, `Admission_Type`, `Gender`, `Caste`, `Sub_Caste`, `Religion`, `Student_Aadhar`, `Ration_Card`, `EMail`, `Phone`, `Blood_Group`, `Mole1`, `Mole2`, `Permanent_Address`, `Present_Address`, `Year10`, `Hall_Ticket10`, `Institution10`, `Board10`, `Medium10`, `Total_Marks10`, `Obtained_Marks10`, `Percentage_of_Marks10`, `Marks_Certificate_No10`, `TC_No10`, `InYear`, `InHall_Ticket`, `InInstitution`, `InBoard`, `InMedium`, `InTotal_Marks`, `InObtained_Marks`, `In_Percentage_of_Marks`, `InMarks_Certificate_No`, `InTC_No`, `polyHall_Ticket`, `PolyMarks`, `PolyRank`, `Father_Name`, `Fage`, `FQualification`, `Foccupation`, `Faadhar`, `Fphone`, `Mother_Name`, `Mage`, `MQualification`, `Moccupation`, `Maadhar`, `Mphone`) VALUES
('22352-CM-019', 'Katuri Vivek', 'Computer Engineering ', 'Diploma', '2006-09-14', 'D-2132', 'Convenor ', 'Male', 'BC-A', 'Rajaka ', 'Hindhu', 750172589168, '21815623523 ', 'katuriviveksai@gmail.com', 9014285569, 'B+ ', 'A MOLE ON LEFT CHEEK ', 'A MOLE ON LEFT LEG FEET ', 'VIJAYAWADA-10 ', 'VIAYAWADA-10 ', '2022', '2212111887 ', 'SRI SRINIVASA HIGH SCHOOL ', 'SSC ', 'ENGLISH ', 600, 551, 92, '556565 ', '566656 ', '0000', 'NA ', 'NA ', 'NA ', 'NA ', 0, 0, 0, 'NA ', 'NA ', 3551396, 81, 4252, 'Katuri hari babu', 50, 'NA ', 'CAR DRIVER ', 123456789012, 9014285569, 'KATURI SAMRAJYAM ', 39, 'D.Ed. ', 'SCHOOL INCHARGE', 123456789012, 9014255569),
('22352-CM-023', 'Katuri Vivek sai', 'Computer Engineering ', 'Diploma', '2006-09-14', 'D-2132', 'Convenor ', 'Male', 'BC-A', 'Rajaka ', 'Hindhu', 750172589168, '21815623523 ', 'katuriviveksai@gmail.com', 9014285569, 'B+ ', 'A MOLE ON LEFT CHEEK ', 'A MOLE ON LEFT LEG FEET ', 'VIJAYAWADA-10 ', 'VIAYAWADA-10 ', '2022', '2212111887 ', 'SRI SRINIVASA HIGH SCHOOL ', 'SSC ', 'ENGLISH ', 600, 551, 92, '556565 ', '566656 ', '0000', 'NA ', 'NA ', 'NA ', 'NA ', 0, 0, 0, 'NA ', 'NA ', 3551396, 81, 4252, 'Katuri hari babu', 50, 'NA ', 'CAR DRIVER ', 123456789012, 9014285569, 'KATURI SAMRAJYAM ', 39, 'D.Ed. ', 'SCHOOL INCHARGE', 123456789012, 9014255569),
('22352-CM-045', 'Katuri Vivek sai', 'Computer Engineering ', 'Diploma', '0200-06-14', 'D-2132', 'Convenor ', 'Male', 'BC-A', 'Rajaka ', 'Hindhu', 750172589168, '21815623523 ', 'katuriviveksai@gmail.com', 9014285569, 'B+ ', 'A MOLE ON LEFT CHEEK ', 'A MOLE ON LEFT LEG FEET ', 'VIJAYAWADA-10 ', 'VIAYAWADA-10 ', '2022', '2212111887 ', 'SRI SRINIVASA HIGH SCHOOL ', 'SSC ', 'ENGLISH ', 600, 551, 92, '556565 ', '566656 ', '0000', 'NA ', 'NA ', 'NA ', 'NA ', 0, 0, 0, 'NA ', 'NA ', 3551396, 81, 4252, 'Katuri hari babu', 50, 'NA ', 'CAR DRIVER ', 123456789012, 9014285569, 'KATURI SAMRAJYAM ', 39, 'D.Ed. ', 'SCHOOL INCHARGE', 123456789012, 9014255569),
('22352-CM-100', 'Katuri Vive', 'Computer Engineering CME', 'Diploma', '2006-09-14', 'D-2131', 'Convenor', 'Male', 'BC-A', 'Rajaka', 'Hindhu', 7501, '21815623523', 'katuriviveksai@gmail.com', 9014285569, '0', 'A MOLE ON LEFT CHEEK', 'A MOLE ON LEFT LEG FEET', 'VIJAYAWADA-10', 'VIAYAWADA-10', '2022', '2212111887', 'SRI SRINIVASA HIGH SCHOOL', 'SSC', 'ENGLISH', 600, 551, 91, '556565', '566656', '0000', 'na', 'na', 'na', 'na', 0, 0, 0, '0', 'na', 3551396, 81, 4252, '0', 50, '0', 'CAR DRIVER', 123456789012, 9014285569, '0', 39, '0', 'SCHOOL INCHARGE', 123456789012, 9014255565);

-- --------------------------------------------------------

--
-- Table structure for table `student_login_details`
--

DROP TABLE IF EXISTS `student_login_details`;
CREATE TABLE `student_login_details` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `student_login_details`:
--

--
-- Dumping data for table `student_login_details`
--

INSERT INTO `student_login_details` (`username`, `pass`) VALUES
('22352-CM-019', '22352-CM-019'),
('22352-CM-039', '22352-CM-039'),
('22352-CM-045', '22352-CM-045'),
('22352-CM-100', '22352-CM-019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`pinno`);

--
-- Indexes for table `student_login_details`
--
ALTER TABLE `student_login_details`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
