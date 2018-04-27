-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 04:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recomme`
--

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `desc_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `count` int(5) NOT NULL,
  `Rating` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`desc_id`, `description`, `count`, `Rating`) VALUES
(1, ' asdasdasd', 0, 1),
(2, ' asdasdasdzxczxczxc', 0, 1),
(3, ' asdasdasdzxczxczxc', 0, 1),
(4, ' dfsdf', 0, 1),
(5, ' asdasd', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `game_bank`
--

CREATE TABLE `game_bank` (
  `G_id` int(11) NOT NULL DEFAULT '0',
  `G_name` text NOT NULL,
  `G_genre` text NOT NULL,
  `desc_ids` text NOT NULL,
  `tags` text NOT NULL,
  `game_info` text NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_bank`
--

INSERT INTO `game_bank` (`G_id`, `G_name`, `G_genre`, `desc_ids`, `tags`, `game_info`, `Rating`) VALUES
(1, 'Thw Witcher III:Wild Hunt', 'RPG', '', 'Action,RPG,Story,Adventure', 'A casuls game for casuls', 80),
(2, 'Dark souls III:The Fire Fades Edition', 'RPG', '', 'Action,RPG,Open world', '', 73);

-- --------------------------------------------------------

--
-- Table structure for table `user_bank`
--

CREATE TABLE `user_bank` (
  `U_id` int(11) NOT NULL,
  `desc_ids` text NOT NULL,
  `Owned` int(11) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `U_id` int(11) NOT NULL,
  `U_name` text NOT NULL,
  `U_pass` text NOT NULL,
  `U_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`U_id`, `U_name`, `U_pass`, `U_email`) VALUES
(1, 'tyul', '123456', 'tyul@gmail.com'),
(4, 'eshaun', '0cf3e5e45add388221bb1b5f4830b8cd', 'eshaun@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`desc_id`);

--
-- Indexes for table `game_bank`
--
ALTER TABLE `game_bank`
  ADD PRIMARY KEY (`G_id`);

--
-- Indexes for table `user_bank`
--
ALTER TABLE `user_bank`
  ADD UNIQUE KEY `Owned_2` (`Owned`),
  ADD KEY `U_id` (`U_id`),
  ADD KEY `Owned` (`Owned`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
