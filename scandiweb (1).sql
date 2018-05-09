-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 05:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scandiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `sku` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL DEFAULT '',
  `price` double NOT NULL,
  `image_path` varchar(255) DEFAULT '',
  `unit_value` varchar(255) DEFAULT NULL,
  `product_type` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `Name`, `price`, `image_path`, `unit_value`, `product_type`) VALUES
(1, 121312312, '4 GB CD', 1.5, 'images/CD.jpg', '40000', 1),
(2, 12312312, 'Table', 2.5, 'images/I.png', '2x4x3', 3),
(3, 123123, 'Apple', 30, 'images/CD.jpg', '5', 2),
(4, 98765432, 'ewe', 2345678, '', '234', NULL),
(5, 2147483647, 'rtert', 0, '', 'we', NULL),
(7, 12342123, 'cd', 22.5, '', '200', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_types`
--

CREATE TABLE `products_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `unit` varchar(255) NOT NULL DEFAULT '',
  `key_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_types`
--

INSERT INTO `products_types` (`id`, `name`, `unit`, `key_text`) VALUES
(1, 'CD/DVD', 'MB', 'Size'),
(2, 'Fruties', 'KG', 'Weight'),
(3, 'Furniture', 'CM', 'Dimensions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SKU` (`sku`);

--
-- Indexes for table `products_types`
--
ALTER TABLE `products_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products_types`
--
ALTER TABLE `products_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
