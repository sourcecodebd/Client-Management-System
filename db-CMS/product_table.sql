-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 01:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `category` varchar(25) NOT NULL,
  `unit_price` float NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `product_name`, `category`, `unit_price`, `status`, `created_at`, `last_updated`) VALUES
(1, 'X-Ray machine', 'Medical', 10000, 'Upcoming', '2021-03-05 02:40:09', '2021-03-04 16:56:11'),
(2, 'Shoes', 'Grocery', 1000, 'Existing', '2021-03-05 02:40:09', '2021-03-05 00:09:58'),
(3, 'Bag', 'Grocery', 300, 'Existing', '2021-03-05 02:40:09', '2021-03-05 00:10:29'),
(4, 'Perfume', 'Grocery', 600, 'Existing', '2021-03-05 02:40:09', '2021-03-04 19:33:40'),
(11, 'Earphone', 'Stationary', 400, 'Upcoming', '2021-03-04 20:41:30', '2021-03-04 20:41:30'),
(12, 'Pencil', 'Stationary', 20, 'Existing', '2021-03-04 20:42:26', '2021-03-04 20:42:26'),
(13, 'Furniture', 'Grocery', 1500, 'Upcoming', '2021-03-04 20:51:14', '2021-03-04 20:51:14'),
(14, 'Light', 'Stationary', 100, 'Existing', '2021-03-04 20:51:49', '2021-03-04 20:51:49'),
(16, 'Earphone', 'Grocery', 10000, 'Upcoming', '2021-03-04 20:54:55', '2021-03-04 20:54:55'),
(17, 'Light', 'Grocery', 1500, 'Upcoming', '2021-03-04 20:56:23', '2021-03-04 20:56:23'),
(18, 'Jersey', 'Grocery', 400, 'Existing', '2021-03-04 20:57:11', '2021-03-04 20:57:11'),
(19, 'pencil', 'Grocery', 10, 'Existing', '2021-03-05 03:04:04', '2021-03-04 21:04:04'),
(25, 'Earphone', 'Stationary', 400, 'Upcoming', '2021-03-04 21:04:44', '2021-03-04 21:04:44'),
(27, 'X-Ray machine', 'Medical', 10000, 'Upcoming', '2021-03-05 20:40:18', '2021-03-05 14:40:18'),
(28, 'Pencil', 'Stationary', 15, 'Upcoming', '2021-03-05 03:16:54', '2021-03-04 21:16:54'),
(29, 'Earphone', 'Grocery', 10000, 'Existing', '2021-03-05 20:45:59', '2021-03-05 14:45:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
