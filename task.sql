-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `role` varchar(8) DEFAULT NULL,
  `skills` varchar(30) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `gender`, `role`, `skills`, `email`, `password`, `dob`) VALUES
(1, 'raj', 1234567890, 'male', 'admin', 'JAVASCRIPT', 'raj@gmail.com', '12345', '2021-05-30'),
(2, 'sk', 748364712, 'male', 'admin', 'HTML5,CSS3,PHP', 'sk@gmail.com', '5676', '2021-05-10'),
(3, 'sb', 4567890, 'female', 'user', 'HTML5,CSS3', 'sb@gmail.com', '4567', '2021-05-05'),
(4, 'Ds', 2147483641, 'male', 'user', 'HTML5,CSS3', 'Ds@gmail.com', '7868', '2015-03-01'),
(5, 'Rajesh', 987654322, 'male', 'admin', 'HTML5,JAVASCRIPT', 'rajesh@gmail.com', '123', '1994-03-10'),
(8, 'ks', 98904, 'female', 'admin', 'PHP,JAVASCRIPT', 'ks@gmail.com', '12345', '2013-06-11'),
(14, 'Sureshkumar', 67890, 'male', 'user', 'HTML5,CSS3,PHP', 'suresh@gmail.com', '678', '2015-03-11'),
(15, 'keerthy', 45677, 'female', 'admin', 'PHP', 'kee@gmail.com', '45677', '2021-06-29'),
(16, 'kumar', 23456, 'male', 'user', 'HTML5,CSS3,PHP', 'kumar@gmail.com', '2345', '2021-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
