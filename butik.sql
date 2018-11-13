-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 05:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE `mailbox` (
  `mail_id` int(11) NOT NULL,
  `mail_sender` varchar(255) DEFAULT NULL,
  `mail_header` varchar(255) DEFAULT NULL,
  `mail_desc` varchar(255) DEFAULT NULL,
  `mail_category` varchar(255) DEFAULT NULL,
  `mail_file` varchar(255) DEFAULT NULL,
  `creation_timestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(36) DEFAULT NULL,
  `instance_status` varchar(1) NOT NULL DEFAULT 'A',
  `is_locked` varchar(1) NOT NULL DEFAULT 'N',
  `locked_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `schedule_name` varchar(255) DEFAULT NULL,
  `creation_timestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(36) DEFAULT NULL,
  `instance_status` varchar(1) NOT NULL DEFAULT 'A',
  `is_locked` varchar(1) NOT NULL DEFAULT 'N',
  `locked_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todo_list`
--

CREATE TABLE `todo_list` (
  `todo_id` int(11) NOT NULL,
  `todo_desc` varchar(255) DEFAULT NULL,
  `todo_date` datetime DEFAULT NULL,
  `creation_timestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(36) DEFAULT NULL,
  `instance_status` varchar(1) NOT NULL DEFAULT 'A',
  `is_locked` varchar(1) NOT NULL DEFAULT 'N',
  `locked_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `phone` varchar(21) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `creation_timestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(36) DEFAULT NULL,
  `instance_status` varchar(1) NOT NULL DEFAULT 'A',
  `is_locked` varchar(1) NOT NULL DEFAULT 'N',
  `locked_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `pass`, `phone`, `address`, `creation_timestamp`, `updation_timestamp`, `created_by`, `instance_status`, `is_locked`, `locked_date`) VALUES
(1, 'kir', 'kir', 'customer', 'kir', '', NULL, '0000-00-00 00:00:00', '2018-11-11 09:09:44', NULL, 'A', 'N', NULL),
(2, 'bibi', 'admin', 'admin', 'admin', '01999221', NULL, '0000-00-00 00:00:00', '2018-11-11 09:09:44', NULL, 'A', 'N', NULL),
(3, 'khai', 'khai', 'beautician', 'khai', '', NULL, '0000-00-00 00:00:00', '2018-11-11 09:09:44', NULL, 'A', 'N', NULL),
(5, 'mia', 'mia', 'beautician', 'mia', '', NULL, '0000-00-00 00:00:00', '2018-11-11 09:09:44', NULL, 'A', 'N', NULL),
(6, 'khairul azam', 'qq', 'customer', 'qq', '', NULL, '0000-00-00 00:00:00', '2018-11-11 09:09:44', NULL, 'A', 'N', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `todo_list`
--
ALTER TABLE `todo_list`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
