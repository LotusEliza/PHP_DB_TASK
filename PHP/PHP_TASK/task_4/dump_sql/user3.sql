-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2019 at 04:42 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 5.6.40-5+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user3`
--

-- --------------------------------------------------------

--
-- Table structure for table `user3`
--

CREATE TABLE `user3` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user3`
--

INSERT INTO `user3` (`id`, `name`, `city`, `age`) VALUES
(1, 'Liza', 'Niko', 29),
(2, 'Val', 'Niko', 32),
(3, 'Anna', 'Niko', 18),
(5, 'Nick', 'NY', 21),
(6, 'Anna', 'Niko', 18),
(7, 'Madonna', 'NY', 50),
(8, 'Cardinal', 'Stavanger', 34),
(9, 'liza`', 'Niko', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user3`
--
ALTER TABLE `user3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user3`
--
ALTER TABLE `user3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
