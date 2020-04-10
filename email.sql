-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 08:37 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_reg`
--

CREATE TABLE `email_reg` (
  `id` int(4) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_reg`
--

INSERT INTO `email_reg` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, 'arman', 'vamsi.koka3@gmail.com', '12345', '956525'),
(6, 'arman', 'vamsi.koka3@gmail.com', '12345', '9565253364'),
(7, 'arman', 'vamsi.koka3@gmail.com', '12345', '9565253364'),
(8, 'arman', 'vamsi.koka3@gmail.com', '123456', '9565253364'),
(9, 'arman', 'vamsi.koka3@gmail.com', '12345', '95652'),
(10, 'arman', 'vamsi.koka3@gmail.com', '12345', '9565253364'),
(11, 'arman', 'vamsi.koka3@gmail.com', '12345', '956525'),
(12, 'arman', 'vamsi.koka3@gmail.com', '12345', '956525'),
(13, 'arman', 'vamsi.koka3@gmail.com', '12345', '9565'),
(14, 'arman', 'vamsi.koka3@gmail.com', '12345', '9565'),
(15, 'arman', 'vamsi.koka3@gmail.com', '12345', '9565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_reg`
--
ALTER TABLE `email_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_reg`
--
ALTER TABLE `email_reg`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
