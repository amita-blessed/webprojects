-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 05:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense_tab`
--

CREATE TABLE `expense_tab` (
  `exp_id` int(11) NOT NULL,
  `expense_date` date NOT NULL,
  `label_name` varchar(1000) NOT NULL,
  `amount` double DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'due'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_tab`
--

INSERT INTO `expense_tab` (`exp_id`, `expense_date`, `label_name`, `amount`, `status`) VALUES
(1, '2021-10-01', 'milk', 2000, 'due'),
(2, '2021-10-04', 'milk', 5000, 'due'),
(3, '2021-10-08', 'fuel', 1000, 'due'),
(4, '2021-10-07', 'fuel', 1200, 'due'),
(6, '2021-10-14', 'medicine', 2345, 'paid'),
(7, '2021-10-16', 'medicine', 2311, 'paid'),
(9, '2021-10-09', 'Grocery', 1000, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `label_tab`
--

CREATE TABLE `label_tab` (
  `label_id` int(11) NOT NULL,
  `label_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `label_tab`
--

INSERT INTO `label_tab` (`label_id`, `label_name`) VALUES
(2, 'milk'),
(3, 'fuel'),
(4, 'bread'),
(5, 'electricity bill'),
(6, 'grocery'),
(7, 'butter'),
(9, 'medicine'),
(10, 'oil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense_tab`
--
ALTER TABLE `expense_tab`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `label_tab`
--
ALTER TABLE `label_tab`
  ADD PRIMARY KEY (`label_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense_tab`
--
ALTER TABLE `expense_tab`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `label_tab`
--
ALTER TABLE `label_tab`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
