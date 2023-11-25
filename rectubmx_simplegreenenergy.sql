-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 03:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rectubmx_simplegreenenergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(27) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `password`) VALUES
('klscse6@gmail.com', 'admin1234'),
('sgecrm@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `atp`
--

CREATE TABLE `atp` (
  `f.no` int(11) NOT NULL,
  `fuleType` varchar(15) NOT NULL,
  `boilerType` varchar(15) NOT NULL,
  `boilerCondition` varchar(30) NOT NULL,
  `isWallMounted` varchar(10) NOT NULL,
  `bolierAge` varchar(50) NOT NULL,
  `shouldBoilerLocationChange` varchar(10) NOT NULL,
  `propertyType` varchar(10) NOT NULL,
  `bedroomCount` varchar(15) NOT NULL,
  `radiatorCount` varchar(10) NOT NULL,
  `isThermostaticRadiatorValvesPresent` varchar(10) NOT NULL,
  `flueExhaustLocation` varchar(10) NOT NULL,
  `flueLocation` varchar(20) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(15) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `postcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atp`
--

INSERT INTO `atp` (`f.no`, `fuleType`, `boilerType`, `boilerCondition`, `isWallMounted`, `bolierAge`, `shouldBoilerLocationChange`, `propertyType`, `bedroomCount`, `radiatorCount`, `isThermostaticRadiatorValvesPresent`, `flueExhaustLocation`, `flueLocation`, `firstName`, `lastName`, `email`, `phone`, `addressLine1`, `city`, `postcode`) VALUES
(1, 'Oil', 'System', 'Other', 'No, its fl', '10-20', 'No', 'Semi-Detac', '3 Bedrooms', '4', 'No', 'Wall', 'Sloped Roof', 'John', 'Doe', 'john.doe@gmail3.com', 1234567890, '1st Lane', 'Birmingham', 443);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `email` varchar(25) NOT NULL,
  `name` varchar(666) NOT NULL,
  `phone` int(12) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`email`, `name`, `phone`, `location`) VALUES
('klscse6@gmail.com', '', 0, 'https://sgecrm.rectusmedia.in/uploads/klscse6@gmail.com/reshma.JPG'),
('joh1n.doe@gmail.com', '', 0, 'https://sgecrm.rectusmedia.in/uploads\\joh1n.doe@gmail.com/KaviyarasanM.pdf'),
('sgecrm@gmail.com', '', 0, 'https://sgecrm.rectusmedia.in/uploads\\sgecrm@gmail.com/div.JPG'),
('kavidcome@gmail.com', '', 0, 'https://sgecrm.rectusmedia.in/uploads\\kavidcome@gmail.com/cavity.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f.no` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gasworks`
--

CREATE TABLE `gasworks` (
  `id` int(25) NOT NULL,
  `workconfirmation` varchar(25) NOT NULL,
  `workdatatime` varchar(25) NOT NULL,
  `heatingSource` varchar(25) NOT NULL,
  `isHeatingSourceOld` varchar(25) NOT NULL,
  `propertyOwnership` varchar(25) NOT NULL,
  `benefit` varchar(25) NOT NULL,
  `property` varchar(25) NOT NULL,
  `bedroom` varchar(25) NOT NULL,
  `wall` varchar(25) NOT NULL,
  `CustomerfirstName` varchar(25) NOT NULL,
  `CustomerlastName` varchar(25) NOT NULL,
  `Customeremail` varchar(25) NOT NULL,
  `Customerphone` varchar(25) NOT NULL,
  `CustomeraddressLine1` varchar(25) NOT NULL,
  `CustomeraddressLine2` varchar(25) NOT NULL,
  `Customercity` varchar(25) NOT NULL,
  `Customerpostcode` varchar(25) NOT NULL,
  `Customerreference` varchar(25) NOT NULL,
  `gasengineeremail` varchar(25) NOT NULL,
  `gasengineername` varchar(25) NOT NULL,
  `statusofwork` varchar(25) NOT NULL,
  `uploaddetails` varchar(400) NOT NULL,
  `feedbackwork` varchar(60) NOT NULL,
  `idstatus` varchar(10) NOT NULL,
  `gasengineerphone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about_gasengineer` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gasworks`
--

INSERT INTO `gasworks` (`id`, `workconfirmation`, `workdatatime`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `CustomerfirstName`, `CustomerlastName`, `Customeremail`, `Customerphone`, `CustomeraddressLine1`, `CustomeraddressLine2`, `Customercity`, `Customerpostcode`, `Customerreference`, `gasengineeremail`, `gasengineername`, `statusofwork`, `uploaddetails`, `feedbackwork`, `idstatus`, `gasengineerphone`, `password`, `about_gasengineer`) VALUES
(1, 'Confirmed', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'gasdemo@gmail.com', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `installworks`
--

CREATE TABLE `installworks` (
  `id` int(25) NOT NULL,
  `workconfirmation` varchar(25) NOT NULL,
  `workdatatime` varchar(25) NOT NULL,
  `heatingSource` varchar(25) NOT NULL,
  `isHeatingSourceOld` varchar(25) NOT NULL,
  `propertyOwnership` varchar(25) NOT NULL,
  `benefit` varchar(25) NOT NULL,
  `property` varchar(25) NOT NULL,
  `bedroom` varchar(25) NOT NULL,
  `wall` varchar(25) NOT NULL,
  `CustomerfirstName` varchar(25) NOT NULL,
  `CustomerlastName` varchar(25) NOT NULL,
  `Customeremail` varchar(25) NOT NULL,
  `Customerphone` varchar(25) NOT NULL,
  `CustomeraddressLine1` varchar(25) NOT NULL,
  `CustomeraddressLine2` varchar(25) NOT NULL,
  `Customercity` varchar(25) NOT NULL,
  `Customerpostcode` varchar(25) NOT NULL,
  `Customerreference` varchar(25) NOT NULL,
  `installateremail` varchar(25) NOT NULL,
  `installatername` varchar(25) NOT NULL,
  `statusofwork` varchar(25) NOT NULL,
  `uploaddetails` varchar(400) NOT NULL,
  `feedbackwork` varchar(60) NOT NULL,
  `idstatus` varchar(10) NOT NULL,
  `installaterphone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about_installater` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `installworks`
--

INSERT INTO `installworks` (`id`, `workconfirmation`, `workdatatime`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `CustomerfirstName`, `CustomerlastName`, `Customeremail`, `Customerphone`, `CustomeraddressLine1`, `CustomeraddressLine2`, `Customercity`, `Customerpostcode`, `Customerreference`, `installateremail`, `installatername`, `statusofwork`, `uploaddetails`, `feedbackwork`, `idstatus`, `installaterphone`, `password`, `about_installater`) VALUES
(1, 'Rejected', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'installationdemo@gmail.co', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `insulationworks`
--

CREATE TABLE `insulationworks` (
  `id` int(25) NOT NULL,
  `workconfirmation` varchar(25) NOT NULL,
  `workdatatime` varchar(25) NOT NULL,
  `heatingSource` varchar(25) NOT NULL,
  `isHeatingSourceOld` varchar(25) NOT NULL,
  `propertyOwnership` varchar(25) NOT NULL,
  `benefit` varchar(25) NOT NULL,
  `property` varchar(25) NOT NULL,
  `bedroom` varchar(25) NOT NULL,
  `wall` varchar(25) NOT NULL,
  `CustomerfirstName` varchar(25) NOT NULL,
  `CustomerlastName` varchar(25) NOT NULL,
  `Customeremail` varchar(25) NOT NULL,
  `Customerphone` varchar(25) NOT NULL,
  `CustomeraddressLine1` varchar(25) NOT NULL,
  `CustomeraddressLine2` varchar(25) NOT NULL,
  `Customercity` varchar(25) NOT NULL,
  `Customerpostcode` varchar(25) NOT NULL,
  `Customerreference` varchar(25) NOT NULL,
  `insulatoremail` varchar(25) NOT NULL,
  `insulatorname` varchar(25) NOT NULL,
  `statusofwork` varchar(25) NOT NULL,
  `uploaddetails` varchar(400) NOT NULL,
  `feedbackwork` varchar(60) NOT NULL,
  `idstatus` varchar(10) NOT NULL,
  `insulatorphone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about_insulator` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insulationworks`
--

INSERT INTO `insulationworks` (`id`, `workconfirmation`, `workdatatime`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `CustomerfirstName`, `CustomerlastName`, `Customeremail`, `Customerphone`, `CustomeraddressLine1`, `CustomeraddressLine2`, `Customercity`, `Customerpostcode`, `Customerreference`, `insulatoremail`, `insulatorname`, `statusofwork`, `uploaddetails`, `feedbackwork`, `idstatus`, `insulatorphone`, `password`, `about_insulator`) VALUES
(1, 'Rejected', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Insulationteam@gmail.com', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

CREATE TABLE `otp_table` (
  `email` varchar(25) NOT NULL,
  `otp` int(6) NOT NULL,
  `timestamp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `otp_table`
--

INSERT INTO `otp_table` (`email`, `otp`, `timestamp`) VALUES
('codetree247@gmail.com', 7006, '169580'),
('klscse6@gmail.com', 3562, '169683'),
('klscse6@gmail.com', 7061, '169686');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(25) NOT NULL,
  `workconfirmation` varchar(25) NOT NULL,
  `workdatatime` varchar(25) NOT NULL,
  `heatingSource` varchar(25) NOT NULL,
  `isHeatingSourceOld` varchar(25) NOT NULL,
  `propertyOwnership` varchar(25) NOT NULL,
  `benefit` varchar(25) NOT NULL,
  `property` varchar(25) NOT NULL,
  `bedroom` varchar(25) NOT NULL,
  `wall` varchar(25) NOT NULL,
  `CustomerfirstName` varchar(25) NOT NULL,
  `CustomerlastName` varchar(25) NOT NULL,
  `Customeremail` varchar(25) NOT NULL,
  `Customerphone` varchar(25) NOT NULL,
  `CustomeraddressLine1` varchar(25) NOT NULL,
  `CustomeraddressLine2` varchar(25) NOT NULL,
  `Customercity` varchar(25) NOT NULL,
  `Customerpostcode` varchar(25) NOT NULL,
  `Customerreference` varchar(25) NOT NULL,
  `surveyoremail` varchar(25) NOT NULL,
  `surveyorname` varchar(25) NOT NULL,
  `statusofwork` varchar(25) NOT NULL,
  `uploaddetails` varchar(400) NOT NULL,
  `feedbackwork` varchar(60) NOT NULL,
  `idstatus` varchar(10) NOT NULL,
  `surveyorphone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about_surveyor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `workconfirmation`, `workdatatime`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `CustomerfirstName`, `CustomerlastName`, `Customeremail`, `Customerphone`, `CustomeraddressLine1`, `CustomeraddressLine2`, `Customercity`, `Customerpostcode`, `Customerreference`, `surveyoremail`, `surveyorname`, `statusofwork`, `uploaddetails`, `feedbackwork`, `idstatus`, `surveyorphone`, `password`, `about_surveyor`) VALUES
(20, 'Confirmed', '2023-11-03T19:34', 'Gas Boiler', '1', 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'klscse6@gmail.com', 'kavi', '', '', '', 'Active', '9987654321', '1234', 'he south uk'),
(21, 'Confirmed', '2023-11-04T19:39', 'Gas bolier', '1', 'Own', 'Job seekers allowance', 'Park Home', '1 Bedr', 'Soild Brick Wal', 'John', 'Doe', 'kavidcome@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'klscse6@gmail.com', 'kavi', '', '', '', 'Active', '9987654321', '1234', 'he south uk'),
(22, 'Confirmed', '2023-11-05T19:39', 'Gas bolier', '1', 'Own', 'Job seekers allowance', 'Park Home', '1 Bedr', 'Soild Brick Wal', 'John', 'Doe', 'kavidcome@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'klscse6@gmail.com', 'kavi', '', '', '', 'Active', '9987654321', '1234', 'he south uk'),
(23, '', '2023-11-04T19:51', 'Gas Boiler', '1', 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'Surveyors List', 'Kavi KS', '', '', '', '', '66666666', '11111111', 'g'),
(24, 'Confirmed', '2023-11-03T21:53', 'Gas Boiler', '1', 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'kavidcome@gmail.com', 'Kavi KS', '', '', '', '', '66666666', '11111111', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about_id` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `idstatus` varchar(25) NOT NULL,
  `s.no` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`name`, `phone`, `email`, `password`, `about_id`, `role`, `idstatus`, `s.no`) VALUES
('kavi', '9987654321', 'klscse6@gmail.com', '1234', 'he south uk', 'surveyor', 'Active', 1),
('Kavi KS', '66666666', 'kavidcome@gmail.com', '12345', 'hi', 'surveyor', 'Active', 3),
('Joun', '987654321', 'gasdemo@gmail.com', '1234', 'he north uk', 'Gas_engineers', 'Active', 9),
('installationdemo', '987654321', 'installationdemo@gmail.co', '1234', 'he north uk', 'Installation_team', 'Active', 10),
('Joun', '987654321', 'Insulationteam@gmail.com', '1234', 'he south uk', 'Insulation_team', 'Active', 12),
('Joun', '987654321', 'subadmin@gmail.com', '1234', 'he south uk', 'Sub_Admin', 'Active', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `f.no` int(11) NOT NULL,
  `heatingSource` varchar(25) NOT NULL,
  `isHeatingSourceOld` tinyint(1) NOT NULL,
  `propertyOwnership` varchar(10) NOT NULL,
  `benefit` varchar(25) NOT NULL,
  `property` varchar(15) NOT NULL,
  `bedroom` varchar(6) NOT NULL,
  `wall` varchar(15) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(23) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `addressLine1` varchar(30) NOT NULL,
  `addressLine2` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postcode` varchar(15) NOT NULL,
  `reference` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `idstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`f.no`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `firstName`, `lastName`, `email`, `phone`, `addressLine1`, `addressLine2`, `city`, `postcode`, `reference`, `password`, `idstatus`) VALUES
(1, 'Gas bolier', 1, 'Own', 'Job seekers allowance', 'Park Home', '1 Bedr', 'Soild Brick Wal', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234', 'Active'),
(5, '', 0, '', '', '', '', '', '', '', 'joh1n.doe@gmail.com', '', '', '', '', '', '', '1234', 'Active'),
(6, 'Gas bolier', 1, 'Own', 'Job seekers allowance', 'Park Home', '1 Bedr', 'Soild Brick Wal', 'John', 'Doe', 'kavidcome@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234', 'Active'),
(7, 'Gas Boiler', 1, 'Own', '', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(9, 'Back boiler', 1, 'Rent', 'Job seekers allowance', 'Detached House', '1 Bedr', 'Soild Brick Wal', 'Biswajit ', 'Chakraborty ', 'bc247rrr@hotmail.com', '8697661987', 'Road 1', 'Road 2', 'Kolkata ', '700077', 'Facebook or Ins', '', 'Active'),
(10, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(11, '', 0, '', '', '', '', '', '', '', 'joh1n.doe2@gmail.com', '', '', '', '', '', '', '1234', 'Active'),
(12, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(15, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(16, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(17, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(18, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(19, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(20, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(21, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(22, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(23, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active'),
(24, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `atp`
--
ALTER TABLE `atp`
  ADD UNIQUE KEY `f.no` (`f.no`);

--
-- Indexes for table `gasworks`
--
ALTER TABLE `gasworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installworks`
--
ALTER TABLE `installworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insulationworks`
--
ALTER TABLE `insulationworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`f.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atp`
--
ALTER TABLE `atp`
  MODIFY `f.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1990;

--
-- AUTO_INCREMENT for table `gasworks`
--
ALTER TABLE `gasworks`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `installworks`
--
ALTER TABLE `installworks`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insulationworks`
--
ALTER TABLE `insulationworks`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `s.no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `f.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
