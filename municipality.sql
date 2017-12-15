-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 01:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `municipality`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `barangay` varchar(25) NOT NULL,
  `recipient` varchar(25) NOT NULL,
  `cmessage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `barangay`, `recipient`, `cmessage`) VALUES
(16, 'Jun', 'ask@yahoo.com', '', 'Barangay Captain', 'aaa'),
(19, 'Julie Gonzales', 'jgon@gmail.com', 'Amaya 3', 'Mayor', 'Pakiayos po traffic lights sa Tejero'),
(20, 'Rebeca Sosa', 'reb@gmail.com', 'Amaya 5', 'Webmaster', 'Bat same style ang table?'),
(21, 'Juan Dela Cruz', 'juandc@yahoo.com', 'Amaya 2', 'Barangay Captain', 'Bumabaha na naman po sa kanto ng Sta. Cecilia I. Please fix it.'),
(22, 'Mac Lib', 'mclib_a@gmail.com', 'Amaya 3', 'Mayor', 'Please fix lighting in Food Fair');

-- --------------------------------------------------------

--
-- Table structure for table `municipality_users`
--

CREATE TABLE `municipality_users` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `barangay` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipality_users`
--

INSERT INTO `municipality_users` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `barangay`, `email`, `username`, `password`) VALUES
(1, 'Zen', 'C', 'F', '2014-10-28', 'Bagtas', 'zen@gmail.com', 'zen', '04a954d214d11f213b4e5d0142ba7ff2'),
(2, 'Fzaira', 'Cerrero', 'F', '1995-07-26', 'Mulawin', 'flcerrero@gmail.com', 'zai', 'c32b22a44ba970ff0047dadfbee62519'),
(3, 'Johnny', 'Cabuhat', 'M', '1970-01-05', 'Mulawin', 'jcabuhat@yahoo.com', 'jcab', 'asdfgh'),
(6, 'Oscar', 'Martinez', 'U', '1980-08-26', 'Sanja Mayor', 'omart@yahoo.com', 'omart', '912ec803b2ce49e4a541068d495ab570'),
(7, 'Gen', 'Hoshino', 'M', '1981-01-28', 'Tres Cruses', 'genhoshi@gmail.com', 'hgen', 'asdf'),
(8, 'Ben', 'Wyatt', 'M', '1988-06-26', 'Amaya 5', 'icetown@gmail.com', 'bwyatt', 'asdfgh'),
(9, 'Janella', 'Doug', 'U', '2014-11-26', 'Calibuyo', 'doge@yahoo.com', 'doggo', '4fdea58255c965531a0d2110bac8ddb1'),
(10, 'Jane', 'Doe', 'F', '2001-11-28', 'Amaya 4', 'jdod@gmail.com', 'j_doe', '912ec803b2ce49e4a541068d495ab570'),
(11, 'Juju', 'Doe', 'U', '1999-07-21', 'Halayhay', 'ajskasjk@gmail.com', 'juju', '912ec803b2ce49e4a541068d495ab570'),
(12, 'Liliili', 'As', 'F', '2009-11-27', 'Amaya 5', 'li@yahoo.com', 'lili', '912ec803b2ce49e4a541068d495ab570'),
(13, 'Junior', 'Junio', 'U', '2014-12-30', 'Bagtas', 'junior2@yahoo.com', 'junior', 'b03e3fd2b3d22ff6df2796c412b09311');

-- --------------------------------------------------------

--
-- Table structure for table `munusers`
--

CREATE TABLE `munusers` (
  `id` int(5) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `munusers`
--

INSERT INTO `munusers` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `barangay`, `email`, `username`, `pw`) VALUES
(1, 'k', 'kl', 'F', '2014-11-30', 'Amaya4', 'aasasas@gmail.com', 'k', 'c32b22a44ba970ff0047'),
(2, 'n', 'a', 'F', '2013-11-29', 'Calibuyo', 'ok@gmail.com', 'li', 'c32b22a44ba970ff0047'),
(3, 'Rebeca', 'Deer', 'F', '2011-10-28', 'Trescruses', 'rebdeer@gmail.com', 'reb', 'c32b22a44ba970ff0047'),
(4, 'Fzaira', 'Cerrero', 'F', '2009-10-30', 'Mulawin', 'flcerrero@gmail.com', 'zai', 'c32b22a44ba970ff0047'),
(5, 'Eris', 'Cerrero', 'U', '2012-11-29', 'Amaya3', 'flcerrero@gmail.com', 'eris', '00220a95344f4339d3ac');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipality_users`
--
ALTER TABLE `municipality_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `munusers`
--
ALTER TABLE `munusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`first_name`,`last_name`,`date_of_birth`,`gender`,`email`,`barangay`,`username`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `municipality_users`
--
ALTER TABLE `municipality_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `munusers`
--
ALTER TABLE `munusers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
