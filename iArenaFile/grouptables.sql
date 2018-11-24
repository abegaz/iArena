-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 07:57 AM
-- Server version: 10.3.10-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iarenadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `grouptables`
--

CREATE TABLE `grouptables` (
  `teamname` varchar(15) DEFAULT NULL,
  `wins` int(11) DEFAULT NULL,
  `loses` int(11) DEFAULT NULL,
  `draws` int(11) DEFAULT NULL,
  `totalpoints` int(11) DEFAULT NULL,
  `color1` varchar(10) DEFAULT NULL,
  `color2` varchar(10) DEFAULT NULL,
  `color3` varchar(10) DEFAULT NULL,
  `creationcheck` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
