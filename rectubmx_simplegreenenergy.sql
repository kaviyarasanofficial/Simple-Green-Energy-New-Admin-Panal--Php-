-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 05:09 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `s.no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
