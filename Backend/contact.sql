-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 11:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` bigint(255) NOT NULL,
  `Msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Msg`) VALUES
('Sanket Sharad Suryawanshi', 'suryawanshisanket69@gmail.com', 7666294825, ''),
('Sanket Sharad Suryawanshi', 'suryawanshisanket69@gmail.com', 7666294825, 'Thanks'),
('Kishor Devkar', 'kishormane@gmail.com', 7666294825, 'I have some query'),
('Kishor Devkar', 'kishormane@gmail.com', 7666294825, 'I have some query'),
('Kishor Devkar', 'kishormane@gmail.com', 7666294825, 'I have some query'),
('Kishor Devkar', 'kishormane@gmail.com', 7666294825, 'I have some query'),
('Kishor Devkar', 'kishormane@gmail.com', 7666294825, 'I have some query');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
