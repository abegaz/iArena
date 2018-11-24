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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `teamid` int(2) NOT NULL,
  `teamname` varchar(32) NOT NULL,
  `coach` varchar(32) NOT NULL,
  `color1` varchar(10) NOT NULL,
  `color2` varchar(10) NOT NULL,
  `wins` int(10) NOT NULL,
  `losses` int(10) NOT NULL,
  `draws` int(10) NOT NULL,
  `color3` varchar(10) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `TotalPoints` int(11) DEFAULT 0,
  `creationcheck` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teamid`, `teamname`, `coach`, `color1`, `color2`, `wins`, `losses`, `draws`, `color3`, `location`, `TotalPoints`, `creationcheck`) VALUES
(1, 'Algeria', 'Vahid Halihodzic', 'Green', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(2, 'Argentina', 'Alejandro Sebella', 'Blue', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(3, 'Australia', 'null', 'Blue', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(4, 'Belgium', 'null', 'Red', 'Black', 0, 0, 0, NULL, NULL, 0, 0),
(5, 'Bosnia', 'null', 'Blue', 'Yellow', 0, 0, 0, NULL, NULL, 0, 0),
(6, 'Brazil', 'null', 'Green', 'Yellow', 0, 0, 0, NULL, NULL, 0, 0),
(7, 'Cameroon', 'null', 'Red', 'Yellow', 0, 0, 0, NULL, NULL, 0, 0),
(8, 'Chile', 'null', 'Red', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(9, 'Columbia', 'null', 'Yellow', 'Blue', 0, 0, 0, NULL, NULL, 0, 0),
(10, 'Costa Rica', 'null', 'White', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(11, 'Croatia', 'null', 'Red', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(12, 'Ecuador', 'null', 'Yellow', 'Blue', 0, 0, 0, NULL, NULL, 0, 0),
(13, 'England', 'null', 'Red', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(14, 'France', 'null', 'Blue', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(15, 'Germany', 'null', 'Black', 'Yellow', 0, 0, 0, NULL, NULL, 0, 0),
(16, 'Greece', 'null', 'Blue', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(17, 'Honduras', 'null', 'Blue', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(18, 'Iran', 'null', 'Red', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(19, 'Italy', 'null', 'Green', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(20, 'Ivory Coast', 'null', 'Orange', 'Green', 0, 0, 0, NULL, NULL, 0, 0),
(21, 'Ghana', 'null', 'Red', 'Yellow', 0, 0, 0, NULL, NULL, 0, 0),
(22, 'Japan', 'null', 'White', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(23, 'Mexico', 'null', 'Green', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(24, 'Netherlands', 'null', 'Red', 'Blue', 0, 0, 0, NULL, NULL, 0, 0),
(25, 'Nigeria', 'null', 'Black', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(26, 'Portugal', 'null', 'Red', 'Orange', 0, 0, 0, NULL, NULL, 0, 0),
(27, 'Russia', 'null', 'Blue', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(28, 'South Korea', 'null', 'Yellow', 'Black', 0, 0, 0, NULL, NULL, 0, 0),
(29, 'Spain', 'null', 'Yellow', 'Green', 0, 0, 0, NULL, NULL, 0, 0),
(30, 'Switzerland', 'null', 'Yellow', 'Red', 0, 0, 0, NULL, NULL, 0, 0),
(31, 'United States', 'null', 'Red', 'White', 0, 0, 0, NULL, NULL, 0, 0),
(32, 'Uraguay', 'null', 'Orange', 'Green', 0, 0, 0, NULL, NULL, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
