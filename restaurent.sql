-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 03:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `phone no` int(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone no`, `address`) VALUES
(1, 'aaa', 's@gmail.com', 111, 1627167955, 'kuril');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order`
--

CREATE TABLE `confirm_order` (
  `id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_quantity` int(20) NOT NULL,
  `p_price` int(20) NOT NULL,
  `p_t_price` int(100) NOT NULL,
  `o_date` varchar(20) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm_order`
--

INSERT INTO `confirm_order` (`id`, `c_id`, `c_name`, `c_email`, `p_name`, `p_quantity`, `p_price`, `p_t_price`, `o_date`, `c_date`) VALUES
(2, 1, 'aaa', 'sayan@gmail.com', 'asf', 125, 6565, 0, '2020-05-14 11:00:28', '2020-05-15 10:22:27'),
(3, 1, 'esan', 'esan@gmail.com', 'ginger', 10, 150, 0, '2020-05-15 11:28:19', '2020-05-15 10:25:55'),
(4, 3, 'cxxv', 'fdgdf', 'nfgvn', 54, 58, 0, '2020-05-15 10:13:24', '2020-05-15 10:29:32'),
(18, 20, 'sagor', 'sagor@gmail.com', 'onion', 5, 100, 500, '2020-05-16 21:30:01', '2020-05-19 01:12:39'),
(22, 1, 'esan', 'esan@gmail.com', 'onion', 10, 100, 1000, '2020-05-19 07:49:44', '2020-05-19 01:50:09'),
(23, 1, 'esan', 'esan@gmail.com', 'onion', 11, 100, 1100, '2020-05-19 07:49:39', '2020-05-19 01:50:26'),
(24, 14, 'Shanto Roy', 's@gmail.com', 'Cloves', 11, 1100, 0, '2020-05-15 14:50:29', '2020-05-19 01:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `phone no` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone no`, `gender`, `address`) VALUES
(1, 'esan', 'esan@gmail.com', 112, 15154452, 'male', 'rupasdi'),
(20, 'sagor', 'sagor@gmail.com', 999, 1850216744, 'Male', 'Rupasdi'),
(31, 'e', 'e@gmail.com', 55555555, 2147483647, 'Male', 'jklj');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_no` int(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `work_experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `password`, `date_of_birth`, `phone_no`, `address`, `gender`, `work_experience`) VALUES
(1, 'Sayan', 'sayan@gmail.com', '555', '2020-04-09', 1711122288, 'rupasdi', 'Male', 'No Experience'),
(19, 'Antor Saha', 'antor@gmail.com', '1111', '2020-05-17', 1745136506, 'Rupasdi', 'Male', 'No Experience');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_quantity` int(20) NOT NULL,
  `p_price` int(20) NOT NULL,
  `p_t_price` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `c_id`, `c_name`, `c_email`, `p_name`, `p_quantity`, `p_price`, `p_t_price`, `date`) VALUES
(15, 1, 'esan', 'esan@gmail.com', 'onion', 100, 1, 100, '2020-05-15 10:00:53'),
(16, 1, 'esan', 'esan@gmail.com', 'Cloves', 1, 100, 100, '2020-05-15 10:01:56'),
(17, 1, 'esan', 'esan@gmail.com', 'onion', 10, 100, 1000, '2020-05-15 11:56:08'),
(51, 31, 'e', 'e@gmail.com', 'onion', 50, 100, 5000, '2020-05-19 01:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `unit_qty` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit_price`, `unit_qty`, `description`, `image`) VALUES
(1, 'onion', 100, 10, 'deshi', '../storage/product_image/onion.jpg'),
(3, 'garlic', 10, 1, 'desc', '../storage/product_image/garlic.jpg'),
(4, 'ginger', 15, 10, 'desc', '../storage/product_image/ginger.jpg'),
(6, 'Cloves', 100, 10, 'deshi', '../storage/product_image/cloves.jpeg'),
(7, 'Nuggets', 180, 10, 'imported', '../storage/product_image/nuggets.jpg'),
(8, 'Chicken Nuggets', 190, 10, '     imported chicken    ', '../storage/product_image/1383770571120.jpeg'),
(11, 'Brocoli', 10, 10, 'Imported', '../storage/product_image/Broccoli.jpg'),
(27, 'Rice', 50, 100, '   miniket   ', '../storage/product_image/background.jpg'),
(29, 'Borhini', 50, 20, '   very sweet   ', '../storage/product_image/borhani.jpg'),
(30, 'Chicken', 120, 80, '   deshi   ', '../storage/product_image/chicken_fry.jpg'),
(41, 'Rice', 25, 50, 'miniket', '../storage/product_image/rice.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order`
--
ALTER TABLE `confirm_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confirm_order`
--
ALTER TABLE `confirm_order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
