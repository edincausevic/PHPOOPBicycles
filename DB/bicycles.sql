-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2018 at 08:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bicycles`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bicycles`
--

CREATE TABLE `bicycles` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `weight_kg` decimal(9,5) NOT NULL,
  `condition_id` tinyint(3) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycles`
--

INSERT INTO `bicycles` (`id`, `brand`, `model`, `year`, `category`, `gender`, `color`, `price`, `weight_kg`, `condition_id`, `description`) VALUES
(1, 'Trek', 'Emonda', 2017, 'Hybrid', 'Unisex', 'red', '1495.00', '1.50000', 5, ''),
(2, 'Cannondale', 'Synapse', 2016, 'Road', 'Unisex', 'matte black', '1999.00', '1.00000', 5, ''),
(3, 'Schwinn', 'Cutter', 2016, 'City', 'Unisex', 'white', '250.00', '18.00000', 4, ''),
(7, 'Mongoose', 'Switchback Sport', 2015, 'Mountain', 'Mens', 'blue', '399.00', '19.00000', 2, ''),
(17, 'BMX', 'F67', 1998, 'Hybrid', 'Womens', 'Green', '100.00', '10.00000', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `open` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `footer_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `phone`, `open`, `about`, `footer_text`) VALUES
(1, 'Bearings', '3315 Highland Road', '225-344-5624', 'MWF 10am-6pm TuThSa 10am-5pm', 'Chain Gang was started in 2005 by a group of bicycle loving friends. We wanted to create a neighborhood bike shop that could also deliver top-quality bicycles to your doorstep. Now with six locations around the city, we are able to reach even more neighborhoods. <br/><br/>Our mechanics inspect every bicycle from top to bottom before it leaves our shop. If you have questions, our expert staff has the knowledge and experience to advise you and to meet all of your cycling needs.', 'This is a fictitious company created by LinkedIn Corporation, or its affiliates, solely for the creation and development of educational training materials. Any resemblance to real products or services is purely coincidental. Information provided about the products or services is also fictitious and should not be construed as representative of actual products or services on the market in a similar product or service category.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_username` (`username`);

--
-- Indexes for table `bicycles`
--
ALTER TABLE `bicycles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bicycles`
--
ALTER TABLE `bicycles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
