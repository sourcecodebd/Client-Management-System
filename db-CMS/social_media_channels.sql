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
-- Table structure for table `social_media_channels`
--

CREATE TABLE `social_media_channels` (
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
-- Dumping data for table `social_media_channels`
--

INSERT INTO `social_media_channels` (`id`, `customer_name`, `customer_address`, `phone`, `product_name`, `product_id`, `unit_price`, `quantity`, `total_price`, `date_sold`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Margot Robbie', 'California', '8801869510882', 'Perfume', '1', '$150', '800', '$150', '2021-02-04', 'Paypal', 'Available', '2021-03-03 18:40:55', '2021-03-03 18:40:55'),
(2, 'Taylor Hill', 'West Carolina', '8801869510882', 'Nighty', '2', '$350', '1000', '$350', '2021-03-01', 'Paypal', 'Available', '2021-03-03 18:54:02', '2021-03-03 18:54:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `social_media_channels`
--
ALTER TABLE `social_media_channels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `social_media_channels`
--
ALTER TABLE `social_media_channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
