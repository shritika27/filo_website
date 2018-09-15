-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 12:05 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qwilo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `career_apply_form`
--

CREATE TABLE `career_apply_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_apply_form`
--

INSERT INTO `career_apply_form` (`id`, `name`, `email`, `contact`, `image`) VALUES
(1, 'shanu', 'singhshritika21@gmail.com', '8802820025', ''),
(2, 'bhartendu', 'webtrackkerbh@gmail.com', '8802820025', ''),
(3, 'bhartendu', 'webtrackkerbh@gmail.com', '8802820025', ''),
(4, 'bhartendu', 'webtrackkerbh@gmail.com', '8802820025', ''),
(5, 'bhartendu', 'webtrackkerbh@gmail.com', '8802820025', ''),
(6, 'bhartendu', 'webtrackkerbh@gmail.com', '8802820025', ''),
(7, 'nikhil', 'webtrackkerbh@gmail.com', '8802820025', ''),
(8, 'Nikhil', 'sharman@gmail.com', '7011393525', ''),
(9, 'bhartendu webtrackker', 'webtrackkerbh@gmail.com', '8802820025', '');

-- --------------------------------------------------------

--
-- Table structure for table `country_details`
--

CREATE TABLE `country_details` (
  `id` int(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `map_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_details`
--

INSERT INTO `country_details` (`id`, `country`, `state`, `map_url`) VALUES
(1, 'america', 'noida,delhi,gurgoan', 'www.facebook.com'),
(22, 'australia', 'Uttar pradesh ', 'adfadafda');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `id` int(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_qualification` varchar(255) NOT NULL,
  `job_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`id`, `job_title`, `job_qualification`, `job_icon`) VALUES
(1, 'Full-Stack Developer', 'AngularJs/ReactJs, NodeJs, ASp.Net/Java, SQL Server/MySQL, JQuery, CSS', 'fa fa-code iq-font-white'),
(2, 'iOS Enginner', '      AngularJs/ReactJs, NodeJs, ASp.Net/Java, SQL Server/MySQL, JQuery, CSS.      ', 'ion-ios-speedometer-outline iq-font-white'),
(6, 'java developer', 'mca final year', 'iq-font-black iq-tw-6 iq-mt-15'),
(9, 'Modern Design Layout', 'mtech', 'ion-ios-speedometer-outline iq-font-white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_apply_form`
--
ALTER TABLE `career_apply_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_details`
--
ALTER TABLE `country_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_apply_form`
--
ALTER TABLE `career_apply_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country_details`
--
ALTER TABLE `country_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
