-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 07:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssb280`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(1) DEFAULT NULL COMMENT '1 = Male, 2 - Female',
  `joindate` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `gender`, `joindate`, `status`) VALUES
(2, 'qwedgh', 'qwe@gmail.com', '01777777', '150', NULL, '2020-08-18', 1),
(5, 'MD TARIQUL ISLAM suvro', 'tariqul456789@gmail.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 1, '2020-08-18', 1),
(6, 'MD abul', 'tariqul456789@gmail.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 1, '2020-08-18', 0),
(7, 'MDdfsdfsdf', 'tariqul456789@gmail.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 0, '2020-08-18', 1),
(8, 'sdf', 'tariqul456789@gmail.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 1, '2020-08-18', 0),
(9, 'MD', 'dfoster@dougfosterandassociates.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 2, '2020-08-18', 1),
(10, 'abul', 'tariqul456789@gmail.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 2, '2020-08-18', 1),
(11, 'MD SHIRIN', 'tariqul456789@gmail.com', '01765820568', '150/A, ARJOTPARA,MOHAKHALI', 2, '2020-08-18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
