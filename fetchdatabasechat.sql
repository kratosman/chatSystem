-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 10:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fetchdatabasechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `changes`
--

CREATE TABLE `changes` (
  `userid` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `get_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `userid` int(11) NOT NULL,
  `chat_msg` varchar(255) NOT NULL,
  `chat_time` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `get_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`userid`, `chat_msg`, `chat_time`, `get_id`) VALUES
(182, 'ahahha yow', '07:08:am', 14),
(183, 'ahahhaha yow', '07:09:am', 15),
(184, 'ahahhaha yow ', '07:10:am', 17),
(185, 'ano meron dito hahahaha ', '07:10:am', 16),
(186, 'diko alam pre hahahah ', '07:30:am', 14),
(187, 'hahahhaha', '15:52:pm', 14),
(188, 'ywo', '09:34:am', 14),
(189, 'ahahahahah', '09:34:am', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `status`, `images`) VALUES
(14, 'benjie', '$2y$10$YaZD6diTnfOgvKl6QldkBOz7p/hkNbHm/7ocT0BmQxXdpXk3F0GXO', 1, 'images (3).jpg'),
(15, 'jay', '$2y$10$LKMVPUQieHm2jQQ.f9VdkeLDDQwm3QTWrNPQc.lB3vbDGj9X/2.By', 0, 'IMG20220405221457_01.jpg'),
(16, 'france', '$2y$10$fyok3YyZe5QgbfE14huHTOQOPdFHCx8KyuKrEgYL0tMxiG0zViwkK', 0, '3726be8d-7c09-42cb-9a33-c64d29825b3c.png'),
(17, 'gonzaga', '$2y$10$5leKLBQ1h9MuKfFgFOEWSuFrFBF2NMqSUZ.M.gA5wuNJSUYNms682', 0, 'received_1628192077541111.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `changes`
--
ALTER TABLE `changes`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `changes`
--
ALTER TABLE `changes`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
