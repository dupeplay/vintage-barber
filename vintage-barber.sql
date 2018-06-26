-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 03:37 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vintage-barber`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartoptions`
--

CREATE TABLE `cartoptions` (
  `cartoption_id` int(11) NOT NULL,
  `apptitle` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `currency_symbol` varchar(5) NOT NULL,
  `receipt_start` int(11) NOT NULL,
  `streetaddress` varchar(50) NOT NULL,
  `building` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `town` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `header_message` varchar(255) NOT NULL,
  `footer_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartoptions`
--

INSERT INTO `cartoptions` (`cartoption_id`, `apptitle`, `language`, `currency_symbol`, `receipt_start`, `streetaddress`, `building`, `unit`, `town`, `country`, `postalcode`, `header_message`, `footer_message`) VALUES
(1, 'Vintage Barber', 'English', '$', 1000, 'Kitchner Road', 'City Square Mall', '09-09', 'Ferrar Park', 'Singapore', '280589', 'Welcome to Vintage Barber Shop', 'Thank You  for choosing us.');

-- --------------------------------------------------------

--
-- Table structure for table `qmsoptions`
--

CREATE TABLE `qmsoptions` (
  `qmsoptions_id` int(11) NOT NULL,
  `settings_missed` int(10) NOT NULL,
  `settings_overtime` int(10) NOT NULL,
  `settings_appoint_timeout` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qmsoptions`
--

INSERT INTO `qmsoptions` (`qmsoptions_id`, `settings_missed`, `settings_overtime`, `settings_appoint_timeout`) VALUES
(1, 20, 20, 15);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `companyname` varchar(20) NOT NULL,
  `streetaddress` varchar(50) NOT NULL,
  `buildingaddress` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `companyemail` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `companyname`, `streetaddress`, `buildingaddress`, `unit`, `country`, `postalcode`, `companyemail`, `website`) VALUES
(1, 'Apstrix Solutions', '16 Kitchener Road', 'City Square Mall', '09-09', 'Singapore', '280589', 'admin@apstrix.com', 'https://www.apstrix.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `user_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `useremail`, `password`, `user_type`, `user_status`) VALUES
(1, 'admin', 'vimalkarthik@apstrix.com', '123456789', 'admin', 1),
(3, 'employee', 'vimalkarthik@hotmail.com', '123456789', 'employee', 1),
(4, 'dude', 'ammu@hotmail.com', '123456789', 'employee', 0),
(6, 'vinayakkumar', 'vinayakkumar123@hotmail.com', '123456789', 'employee', 0),
(7, 'vinayakkumar', 'vinayakkumar123@hotmail.com', '123456789', 'employee', 0),
(8, 'ammu', 'ammuvimal@hotmail.com', '123456789', 'employee', 0),
(9, 'aadiv', 'aadivkarthik@gmail.com', '123456789', 'employee', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartoptions`
--
ALTER TABLE `cartoptions`
  ADD PRIMARY KEY (`cartoption_id`,`receipt_start`);

--
-- Indexes for table `qmsoptions`
--
ALTER TABLE `qmsoptions`
  ADD PRIMARY KEY (`qmsoptions_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `index` (`user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
