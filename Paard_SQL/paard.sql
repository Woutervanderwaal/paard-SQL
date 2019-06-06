-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Jun 06, 2019 at 08:30 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paard`
--

-- --------------------------------------------------------

--
-- Table structure for table `huur`
--

CREATE TABLE IF NOT EXISTS `huur` (
  `huurID` int(11) NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `lengte` int(11) DEFAULT NULL,
  `verhuurd` tinyint(1) DEFAULT NULL,
  `pony` tinyint(1) DEFAULT NULL,
  `tijd` int(11) DEFAULT NULL,
  `ras` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `huur`
--

INSERT INTO `huur` (`huurID`, `naam`, `image`, `discription`, `lengte`, `verhuurd`, `pony`, `tijd`, `ras`) VALUES
(1, 'Henk', 'horse_3.jpg', 'Echt een heel mooi paart', 140, 0, 1, 10, 'mold'),
(2, 'Henk', 'horse_3.jpg', 'Echt een heel mooi paart', 140, 0, 1, 10, 'mold'),
(3, 'Bob', 'bob_horse.jpg', 'Bob is een beetje groot', 190, 0, 0, 13, 'kikker'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Harry potter', 'this.jpg', 'Een mooi part die een net geen pony is', 155, NULL, NULL, 10, 'groen'),
(8, 'Harry potter', 'this.jpg', 'Een mooi part die een net geen pony is', 155, 0, NULL, 10, 'ROOD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `huur`
--
ALTER TABLE `huur`
  ADD PRIMARY KEY (`huurID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `huur`
--
ALTER TABLE `huur`
  MODIFY `huurID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
