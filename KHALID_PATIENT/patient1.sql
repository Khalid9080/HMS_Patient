-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 10:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ptable`
--

CREATE TABLE `ptable` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `add` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ptable`
--

INSERT INTO `ptable` (`id`, `username`, `email`, `Password`, `dob`, `Gender`, `bg`, `add`) VALUES
(2, 'Ummah', 'sadi@gmail.com', '$2y$10$MRsqPdzBLGikcVQXPVZABuZVLPs2rYqdUCJnQw.MJPbrfxMp9aJFS', '2023-12-19', 'Male', 'O+', 'adas'),
(3, 'Ummah', 'sadi@gmail.com', '$2y$10$MRsqPdzBLGikcVQXPVZABuZVLPs2rYqdUCJnQw.MJPbrfxMp9aJFS', '2023-12-14', 'Male', 'B+', 'dhaka'),
(4, 'Sadi', 'sadimahmud9080@gmail.com', '$2y$10$7sUqG2tkA5yS9B5uEp/QMeZ.Plp2k1vl.3vBKNiSjwuKzLgTLToly', '2023-12-28', 'Male', 'O+', 'Dhaka'),
(5, '', '', '$2y$10$foTjHAZzjbWhwtqJoTtpduIxDerOLhcytzOSorcEGSpAukO29KdTy', '0000-00-00', '', '', ''),
(6, '', '', '$2y$10$lVOzJyme5SNAre7kqrCxN.xxUNEn.gcWfiCNB1O/PvCjRrIWT8nYu', '0000-00-00', '', '', ''),
(7, '', '', '$2y$10$DZ/2Znz6tE943KlYqm3/jue7DyUsmee2DJkF9Q50mU8PqTIe46Nb2', '0000-00-00', '', '', ''),
(8, '', '', '$2y$10$9ODP4J/LR/YsA3ShkGvcDeew8m6PtjvL86eyQCyVVBXSNaEigSg8O', '0000-00-00', '', '', ''),
(9, 'Md Osman Goni', 'og9080@gmail.com', '$2y$10$IqF1kUksJJsUKKFBhCrFOO/y36hhQ6BpkOkwbKB/7eIcVRKCAoCNG', '2023-12-22', '', 'B-', 'Gazipur');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(100) NOT NULL,
  `Reporting Time` varchar(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL,
  `Report History` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `Reporting Time`, `Doctor`, `Report History`) VALUES
(2, '2023-12-26', 'Khalid', 'bad'),
(3, '2023-12-26', 'Khalid', 'bad'),
(4, '2023-12-26', 'Khalid', 'bad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ptable`
--
ALTER TABLE `ptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ptable`
--
ALTER TABLE `ptable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
