-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 01:21 AM
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
-- Table structure for table `ecommerce_channels`
--

CREATE TABLE `ecommerce_channels` (
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
-- Dumping data for table `ecommerce_channels`
--

INSERT INTO `ecommerce_channels` (`id`, `customer_name`, `customer_address`, `phone`, `product_name`, `product_id`, `unit_price`, `quantity`, `total_price`, `date_sold`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jeff Bezos', 'Washington DC', '8801869510882', 'Laptop', '1', '$2000', '50', '$2000', '2021-02-04', 'Paypal', 'Available', '2021-03-03 18:38:54', '2021-03-03 18:38:54'),
(2, 'Warren Buffet', 'New York', '8801869510882', 'Toyota', '2', '$10000', '100', '$10000', '2021-03-01', 'Paypal', 'Available', '2021-03-03 18:39:33', '2021-03-03 18:39:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecommerce_channels`
--
ALTER TABLE `ecommerce_channels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecommerce_channels`
--
ALTER TABLE `ecommerce_channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
