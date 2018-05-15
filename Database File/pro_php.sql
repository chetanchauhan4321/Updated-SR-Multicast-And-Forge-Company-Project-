-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 08:51 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact_number` text NOT NULL,
  `date` date NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `email`, `contact_number`, `date`, `query`) VALUES
(16, 'Chetan Chauhan', 'localhost@gmail.com', '2147483647', '2017-07-15', 'aaaaaaaaaaaaaaaaaaaaaaa'),
(20, 'Ankit ', 'localhost@gmail.com', 'djvcjnj', '2017-07-15', '123456789'),
(24, '', 'chet@gmail.com', '112345678', '2017-07-15', ''),
(25, '', ' 3', ';3lm3', '2017-07-15', ''),
(26, '', 'pradeepchauhan1234@gmail.com', '123456543', '2017-07-16', ''),
(27, '', 'qwdnq', '3iej32', '2017-07-16', ''),
(28, '', 'fjpo23k', 'l3fmpo23k', '2017-07-16', ''),
(29, 'lqde2132pork32', '2p3or23', '3pokr', '2017-07-16', ''),
(30, '234krm', ';rk2', ';rmr', '2017-07-16', ''),
(31, '3ej3', ';3rm2', '3;rl23', '2017-07-16', ''),
(32, 'CCCCCCCCCCC', 'cccccccccccc', '111111111111', '2017-07-16', ''),
(33, 'Chetan Singh Chauhan', 'chetan@gmai.com', '1234134322', '2017-07-16', ''),
(34, 'Chetan Chauhan', 'chet@gmail.com', '+919015943170', '2017-07-16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
