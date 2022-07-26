-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 07:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expert`
--

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `Expert_Name` varchar(255) NOT NULL,
  `Personal Email` varchar(255) NOT NULL,
  `Work Email` varchar(50) NOT NULL,
  `Contect Number` varchar(50) NOT NULL,
  `Whatsapp Number` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Compant/Institute Name` varchar(225) NOT NULL,
  `Domain of Expertise` varchar(225) NOT NULL,
  `Technical Skills(Technology)` varchar(225) NOT NULL,
  `Technical Skills(Operating System)` varchar(225) NOT NULL,
  `Technical Skills(Tools)` varchar(200) NOT NULL,
  `Technical Skills(Hardware)` varchar(500) NOT NULL,
  `Non-Technical Skills` varchar(500) NOT NULL,
  `Mention other Non-Technical skills` varchar(600) NOT NULL,
  `Expert Association As` varchar(500) NOT NULL,
  `Mode` varchar(600) NOT NULL,
  `Days` varchar(50) NOT NULL,
  `Time Slot` varchar(50) NOT NULL,
  `Time Slot1` varchar(50) NOT NULL,
  `Expected Fees Per Hour` varchar(50) NOT NULL,
  `Upload Consent Latter` varchar(500) NOT NULL,
  `Upload Photo` varchar(300) NOT NULL,
  `Upload Profile Summary` varchar(300) NOT NULL,
  `Name/Account Holder Name(To Be Printed On Cheque)` varchar(500) NOT NULL,
  `Bank Name` varchar(600) NOT NULL,
  `Account Name` varchar(400) NOT NULL,
  `IFSC Code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
