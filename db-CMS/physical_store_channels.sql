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
-- Table structure for table `physical_store_channels`
--

CREATE TABLE `physical_store_channels` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_id` varchar(10000) NOT NULL,
  `unit_price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `date_sold` date NOT NULL DEFAULT current_timestamp(),
  `payment_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physical_store_channels`
--

INSERT INTO `physical_store_channels` (`id`, `customer_name`, `customer_address`, `phone`, `product_name`, `product_id`, `unit_price`, `quantity`, `total_price`, `date_sold`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Akram Hossain', 'Mirpur', '01869510882', 'Earphone', '3', '400', '1000', '400', '2021-03-01', 'Bkash', 'Sold', '2021-03-03 15:52:50', '2021-03-03 15:52:50'),
(9, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '400', '1000', '400', '2021-03-04', 'Bkash', 'Sold', '2021-03-04 03:12:23', '2021-03-04 03:12:23'),
(39, 'Nafi Mahmud', 'Mirpur', '1869510882', 'Bag', '5', '1200', '120', '1200', '2021-03-04', 'Nogod', 'Sold', '2021-03-05 04:48:23', '2021-03-05 04:48:23'),
(52, 'Rafi Talukdar', 'Keraniganj', '01869510882', 'Earphone', '10', '10000', '150', '10000', '2021-03-06', 'Bkash', 'Sold', '2021-03-05 14:10:26', '2021-03-05 14:10:26'),
(53, 'Rabbi Hasan', 'Mirpur', '01869510882', 'Furniture', '11', '10000', '150', '10000', '2021-03-06', 'Nogod', 'Pending', '2021-03-05 14:13:59', '2021-03-05 14:13:59'),
(54, 'Sakib Hasan', 'Agargaon', '01869510882', 'Dry Cleaner', '12', '10000', '150', '10000', '2021-03-06', 'Nogod', 'Pending', '2021-03-05 14:53:32', '2021-03-05 14:53:32'),
(57, 'Akram Hossain', 'Mirpur', '01869510882', 'Earphone', '3', '400', '1000', '400', '2021-03-01', 'Bkash', 'Sold', '2021-03-05 15:00:28', '2021-03-05 15:00:28'),
(58, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '400', '1000', '400', '2021-03-04', 'Bkash', 'Sold', '2021-03-05 15:00:28', '2021-03-05 15:00:28'),
(59, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '1500', '1000', '1500', '2021-03-04', 'Bkash', 'Sold', '2021-03-05 15:00:28', '2021-03-05 15:00:28'),
(62, 'Rafi Mahmud', 'Khulna', '8801869510882', 'Pen', '2', '10', '500', '10', '2021-03-01', 'Bkash', 'Available', '2021-03-05 15:41:24', '2021-03-05 15:41:24'),
(63, 'Akram Hossain', 'Mirpur', '01869510882', 'Earphone', '3', '400', '1000', '400', '2021-03-01', 'Bkash', 'Sold', '2021-03-05 15:41:24', '2021-03-05 15:41:24'),
(64, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '400', '1000', '400', '2021-03-04', 'Bkash', 'Sold', '2021-03-05 15:41:24', '2021-03-05 15:41:24'),
(65, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '1500', '1000', '1500', '2021-03-04', 'Bkash', 'Sold', '2021-03-05 15:41:24', '2021-03-05 15:41:24'),
(66, 'Nafi Mahmud', 'Mirpur', '1869510882', 'Bag', '5', '1200', '120', '1200', '2021-03-04', 'Nogod', 'Sold', '2021-03-05 15:41:24', '2021-03-05 15:41:24'),
(67, 'Nafi Mahmud', 'Mirpur', '01869510882', 'Furniture', '10', '100000', '1000', '100000', '2021-02-18', 'Nogod', 'Sold', '2021-03-05 15:49:36', '2021-03-05 15:49:36'),
(68, 'Nafi Mahmud', 'Mirpur, Dhaka', '8801869510882', 'Bag', '1', '200', '50', '200', '2021-02-04', 'Nogod', 'Available', '2021-03-05 17:43:00', '2021-03-05 17:43:00'),
(69, 'Rafi Mahmud', 'Khulna', '8801869510882', 'Pen', '2', '10', '500', '10', '2021-03-01', 'Bkash', 'Available', '2021-03-05 17:43:00', '2021-03-05 17:43:00'),
(70, 'Akram Hossain', 'Mirpur', '01869510882', 'Earphone', '3', '400', '1000', '400', '2021-03-01', 'Bkash', 'Sold', '2021-03-05 17:43:00', '2021-03-05 17:43:00'),
(71, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '400', '1000', '400', '2021-03-04', 'Bkash', 'Sold', '2021-03-05 17:43:00', '2021-03-05 17:43:00'),
(72, 'Akram Hossain', 'Mirpur', '01869510882', 'Bag', '3', '1500', '1000', '1500', '2021-03-04', 'Bkash', 'Sold', '2021-03-05 17:43:00', '2021-03-05 17:43:00'),
(73, 'Nafi Mahmud', 'Mirpur', '1869510882', 'Bag', '5', '1200', '120', '1200', '2021-03-04', 'Nogod', 'Sold', '2021-03-05 17:43:00', '2021-03-05 17:43:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `physical_store_channels`
--
ALTER TABLE `physical_store_channels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `physical_store_channels`
--
ALTER TABLE `physical_store_channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
