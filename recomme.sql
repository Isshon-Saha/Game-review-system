-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 05:36 AM
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
-- Table structure for table `adam`
--

CREATE TABLE `adam` (
  `genre` text NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adam`
--

INSERT INTO `adam` (`genre`, `counter`) VALUES
('RPG', 1),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `asdasd`
--

CREATE TABLE `asdasd` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asdasd`
--

INSERT INTO `asdasd` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `aurko`
--

CREATE TABLE `aurko` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aurko`
--

INSERT INTO `aurko` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ddd`
--

CREATE TABLE `ddd` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ddd`
--

INSERT INTO `ddd` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

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
(5, ' asdasd', 0, 1),
(6, ' asdasd', 0, 1),
(7, ' asdasd', 0, 1),
(8, ' asdasdasd', 0, 1),
(9, ' sadasda', 0, 1),
(10, ' sdfsdfs', 0, 1),
(11, ' asdasdasd', 0, 1),
(12, ' asdasd', 0, 1),
(13, ' asdasd', 0, 1),
(14, ' asdasd', 0, 1),
(15, ' cvbcvb', 0, 1),
(16, ' asdasd', 0, 1),
(17, ' asdasdasd', 0, 1),
(18, ' sdfsdf', 0, 1),
(19, ' sdfsdf', 0, 1),
(20, ' sdfsdf', 0, 1),
(21, ' asdasdasd', 0, 1),
(22, ' asdasd', 0, 1),
(23, ' asdasd', 0, 1),
(24, ' asdasd', 0, 1),
(25, ' asdasd', 0, 1),
(26, ' asdasd', 0, 1),
(27, ' asdasd', 0, 1),
(28, ' asdasd', 0, 1),
(29, ' asdasd', 0, 1),
(30, ' asdasd', 0, 1),
(31, ' asdasd', 0, 1),
(32, ' asdasd', 0, 1),
(33, ' asdasd', 0, 1),
(34, ' asdasd', 0, 1),
(35, ' asdasd', 0, 1),
(36, ' sadasd', 0, 5),
(37, ' sadasd', 0, 5),
(38, ' sadasd', 0, 5),
(39, ' sadasd', 0, 5),
(40, ' sadasd', 0, 5),
(41, ' sadasd', 0, 5),
(42, ' sadasd', 0, 5),
(43, ' asdasd', 0, 4),
(44, ' asdasd', 0, 4),
(45, ' sdfsdf', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `erty`
--

CREATE TABLE `erty` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erty`
--

INSERT INTO `erty` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eshaun`
--

CREATE TABLE `eshaun` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eshaun`
--

INSERT INTO `eshaun` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 1),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eshaun3`
--

CREATE TABLE `eshaun3` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eshaun3`
--

INSERT INTO `eshaun3` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `game_bank`
--

CREATE TABLE `game_bank` (
  `G_id` int(11) NOT NULL,
  `G_name` text NOT NULL,
  `G_genre` text NOT NULL,
  `desc_ids` text NOT NULL,
  `tags` text NOT NULL,
  `game_info` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `Editors_choice` text NOT NULL,
  `total_rating` int(11) NOT NULL DEFAULT '0',
  `counter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_bank`
--

INSERT INTO `game_bank` (`G_id`, `G_name`, `G_genre`, `desc_ids`, `tags`, `game_info`, `Rating`, `Editors_choice`, `total_rating`, `counter`) VALUES
(2, 'Dark souls III:The Fire Fades Edition', 'RPG', ',34', 'Action,RPG,Open world', '', 4, '', 50, 14),
(5, 'The crew', 'Racing', '', 'Racing,Action', 'The Crew is a revolutionary action car and driving game on Xbox One, Playstation 4, and PC. You will never drive alone in this open world with licensed cars', 5, '', 5, 1),
(6, 'Assassin''s Creed Origins', 'RPG', '', 'RPG,Action', 'Assassin''s Creed Origins is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. It is the tenth major installment in the Assassin''s Creed series and the successor to 2015''s Assassin''s Creed Syndicate.', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sdfsdfsdf`
--

CREATE TABLE `sdfsdfsdf` (
  `genre` text,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdfsdfsdf`
--

INSERT INTO `sdfsdfsdf` (`genre`, `counter`) VALUES
('RPG', 0),
('Racing', 0),
('Strategy', 0),
('Action', 0),
('Puzzle', 0);

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
(4, 'eshaun', '0cf3e5e45add388221bb1b5f4830b8cd', 'ert@gmail.com'),
(5, 'hello', '0cf3e5e45add388221bb1b5f4830b8cd', 'hello@gmail.com'),
(6, 'adam', '0cf3e5e45add388221bb1b5f4830b8cd', 'adam@gmail.com'),
(7, 'Aurko', '42b672ac710fdcaacaf9297ad1f5ea50', 'aurko420@gmail.com'),
(8, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'asdasd@fgh'),
(9, 'ddd', 'fa916429b37ff465c565e6e649a98e91', 'dd@f'),
(10, 'erty', '0cf3e5e45add388221bb1b5f4830b8cd', 'dfg@ghy'),
(11, 'sdfsdfsdf', '0cf3e5e45add388221bb1b5f4830b8cd', 'dfdfdf@sd.com'),
(14, 'eshaun', '0cf3e5e45add388221bb1b5f4830b8cd', 'ert@gmail.com'),
(15, 'eshaun3', '0cf3e5e45add388221bb1b5f4830b8cd', 'isaha367@gmail.com'),
(16, 'sad', '0cf3e5e45add388221bb1b5f4830b8cd', 'isaha367@gmail.com');

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
  MODIFY `desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `game_bank`
--
ALTER TABLE `game_bank`
  MODIFY `G_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
