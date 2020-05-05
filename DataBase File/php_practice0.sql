-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 09:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_practice0`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(27) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `mobile`, `address`, `avatar`) VALUES
(1011, 'SuperAdmin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'superadmin@admin.com', '01600000055', 'Dhaka', 'main.png'),
(1012, 'Nayeem', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ablaze@mail.com', '01900000024', 'Dhaka', 'nayeem.png'),
(1013, 'Abdullah', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'abdullah@mail.com', '01500000000', 'Newyork', 'abdullah.png'),
(1014, 'nayeemkhan', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'nayeem@gmail.com', '01788000000', 'Dhaka', 'avatar.png'),
(1018, 'admin', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'admin@mail.com', '01800006600', 'London', 'admin.png'),
(1019, 'nayeem007', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'nayeemkhan@mail.com', '01600000088', 'Moscow', 'nayeem007.jpg'),
(1021, 'nayeem0xr', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'nox@gmail.com', '01900000050', 'Torrento', 'nayeem0Photo.png'),
(1025, 'nayeem_khan', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nayeem_khan@mail.com', '01600000055', 'Dhaka', 'khan.png'),
(1026, 'Azim', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'azim@mail.com', '01900005500', 'Kyoto', 'hello.png'),
(1027, 'Rahim', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'rahim@mail.com', '01600880000', 'Denver', 'rahim.png'),
(1029, 'Ferdous', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'ferdous@mail.com', '01478523695', 'Shanghai', 'ferdous.jpeg'),
(1032, 'Liverpool\'s Boss', '454d519b0742fe29f1487d1586d0cfca6801e6d8', 'liverpool@mail.com', '01800220000', 'Seoul', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
