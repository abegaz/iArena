-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 04:03 AM
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
  `creationcheck` int(11) DEFAULT NULL,
  `gamesscheduled` int(11) DEFAULT NULL,
  `gamesplayed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grouptables`
--

INSERT INTO `grouptables` (`teamname`, `wins`, `loses`, `draws`, `totalpoints`, `color1`, `color2`, `color3`, `creationcheck`, `gamesscheduled`, `gamesplayed`) VALUES
('Honduras', 0, 0, 0, 0, 'Blue', 'White', '', 1, NULL, NULL),
('Ivory Coast', 0, 0, 0, 0, 'Orange', 'Green', '', 1, NULL, NULL),
('Chile', 0, 0, 0, 0, 'Red', 'White', '', 1, NULL, NULL),
('Japan', 0, 0, 0, 0, 'White', 'Red', '', 1, NULL, NULL),
('Nigeria', 0, 0, 0, 0, 'Black', 'Red', '', 1, NULL, NULL),
('Russia', 0, 0, 0, 0, 'Blue', 'Red', '', 1, NULL, NULL),
('Mexico', 0, 0, 0, 0, 'Green', 'Red', '', 1, NULL, NULL),
('Australia', 0, 0, 0, 0, 'Blue', 'Red', '', 1, NULL, NULL),
('Belgium', 0, 0, 0, 0, 'Red', 'Black', '', 1, NULL, NULL),
('United States', 0, 0, 0, 0, 'Red', 'White', '', 1, NULL, NULL),
('Ghana', 0, 0, 0, 0, 'Red', 'Yellow', '', 1, NULL, NULL),
('Netherlands', 0, 0, 0, 0, 'Red', 'Blue', '', 1, NULL, NULL),
('Germany', 0, 0, 0, 0, 'Black', 'Yellow', '', 1, NULL, NULL),
('Greece', 0, 0, 0, 0, 'Blue', 'White', '', 1, NULL, NULL),
('Croatia', 0, 0, 0, 0, 'Red', 'White', '', 1, NULL, NULL),
('Argentina', 0, 0, 0, 0, 'Blue', 'White', '', 1, NULL, NULL),
('Costa Rica', 0, 0, 0, 0, 'White', 'Red', '', 1, NULL, NULL),
('Iran', 0, 0, 0, 0, 'Red', 'White', '', 1, NULL, NULL),
('England', 0, 0, 0, 0, 'Red', 'White', '', 1, NULL, NULL),
('France', 0, 0, 0, 0, 'Blue', 'Red', '', 1, NULL, NULL),
('Uraguay', 0, 0, 0, 0, 'Orange', 'Green', '', 1, NULL, NULL),
('Algeria', 0, 0, 0, 0, 'Green', 'White', '', 1, NULL, NULL),
('Columbia', 0, 0, 0, 0, 'Yellow', 'Blue', '', 1, NULL, NULL),
('Portugal', 0, 0, 0, 0, 'Red', 'Orange', '', 1, NULL, NULL),
('Bosnia', 0, 0, 0, 0, 'Blue', 'Yellow', '', 1, NULL, NULL),
('Ecuador', 0, 0, 0, 0, 'Yellow', 'Blue', '', 1, NULL, NULL),
('Switzerland', 0, 0, 0, 0, 'Yellow', 'Red', '', 1, NULL, NULL),
('Brazil', 0, 0, 0, 0, 'Green', 'Yellow', '', 1, NULL, NULL),
('Spain', 0, 0, 0, 0, 'Yellow', 'Green', '', 1, NULL, NULL),
('South Korea', 0, 0, 0, 0, 'Yellow', 'Black', '', 1, NULL, NULL),
('Cameroon', 0, 0, 0, 0, 'Red', 'Yellow', '', 1, NULL, NULL),
('Italy', 0, 0, 0, 0, 'Green', 'White', '', 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
