-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 08:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agricart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `contact_no`) VALUES
(29, 'admin@admin.com', '$2y$10$U/bvSZB1P9zBYgrouy1mWei3FlpBqaW8EoZvz/uLpsA431AW4DaeW', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_details`
--

CREATE TABLE `buyer_details` (
  `Buyer_id` int(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `full_name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `address` varchar(200) NOT NULL,
  `pin_code` int(7) NOT NULL,
  `state` varchar(255) NOT NULL,
  `otp` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer_details`
--

INSERT INTO `buyer_details` (`Buyer_id`, `photo`, `full_name`, `email`, `contact_no`, `password`, `created_on`, `address`, `pin_code`, `state`, `otp`) VALUES
(17, 'abc.png', 'shlok', 's@gmail.com', 2147483647, '$2y$10$jLsbZ578X.89aVh2pi76SO7ci5aZzxejTaoB6ir9xaz/IqKOjb6BG', '0000-00-00 00:00:00', '50,Sachin Park Society Jodhpur Gam Road Satellite Ahmedabad', 380015, 'Gujarat', 0),
(19, '', 'shlok patel', 'w@gmail.com', 111, '$2y$10$djbRQ1cwqa1IqeRFY7EcA.S1IdBG2So1SOU3kz.UiG4DT2dMqMtc6', '2024-02-17 18:07:55', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `cart_id` int(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `buyer_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `contact_id` int(255) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`contact_id`, `buyer_name`, `email`, `message`, `status`, `created_on`) VALUES
(1, 'shlok', 'shlok@gmail.com', 'In HTML, the <p> tag defines a paragraph. A paragraph is a distinct section of text with spacing before and after. \r\nThe closing <p> tag is optional and is implied by the opening tag of the next HTML element. Browsers automatically add a single blank line', 1, '2024-02-16 09:10:14'),
(2, '1', '', 'jhkjsdskdhjasdkjsahdjbsakjdkjasdasjdsdjashdiasydshazxs', 1, '2024-02-16 09:10:14'),
(9, 'sssss', 's', 'sss', 1, '2024-02-16 09:10:14'),
(10, 'a', 'a', 'a', 1, '2024-02-16 09:10:14'),
(11, 'a', 'aa', 'aa', 1, '2024-02-16 09:10:14'),
(12, 's', 's', 's', 1, '2024-02-16 09:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_details`
--

CREATE TABLE `coupon_details` (
  `coupon_id` int(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `discount_percentage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon_details`
--

INSERT INTO `coupon_details` (`coupon_id`, `coupon_code`, `discount_percentage`) VALUES
(1, 'shlok', 10),
(2, 'aaa', 20);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(8, 'shlokpatel.502@gmail.com'),
(9, 'sasas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(255) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `buyer_id` int(50) NOT NULL,
  `seller_id` int(255) NOT NULL,
  `payment` int(50) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` int(10) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `tracking_no`, `order_no`, `product_id`, `buyer_id`, `seller_id`, `payment`, `price`, `quantity`, `status`, `order_date`) VALUES
(24, '123456789', '5895232174', '13', 17, 11, 0, 11, 1, 0, '2024-02-13 13:24:35'),
(25, '12345', '5895232174', '13', 17, 11, 0, 10, 2, 1, '2024-02-13 13:24:35'),
(30, '12121212', '3395345941', '13', 19, 11, 0, 15, 1, 0, '2024-02-14 08:09:18'),
(40, '121212121', '1665504551', '13', 17, 11, 0, 1231111, 1, 1, '2024-02-21 16:31:21'),
(44, '', '3466502038', '13', 17, 11, 0, 1212, 1, 0, '2024-02-25 15:29:21'),
(45, '', '7712472794', '13', 17, 11, 0, 10, 1, 0, '2024-02-25 16:51:33'),
(46, '', '7712472794', '18', 17, 0, 0, 1212, 1, 0, '2024-02-25 16:51:33'),
(47, '', '6719335434', '18', 17, 0, 0, 1212, 1, 0, '2024-02-25 16:52:29'),
(48, '', '9409809082', '18', 17, 0, 0, 1212, 4, 0, '2024-02-25 17:02:24'),
(49, '', '9409809082', '13', 17, 11, 0, 10, 2, 0, '2024-02-25 17:02:24'),
(50, '', '3247979716', '18', 17, 0, 0, 1212, 3, 0, '2024-02-26 08:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(10) NOT NULL,
  `seller_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(159) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(255) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `seller_id`, `name`, `description`, `price`, `quantity`, `photo`, `photo2`, `photo3`) VALUES
(13, 11, 'shlok', 'ss', 10, 0, '65cc8ee18abf9_adminfarmerlogo.png', 'adminrevenue.jpeg', '404-tick.png'),
(18, 0, 'aqsdv', 'sasa', 1212, 1, '65cc8ee18abf9_adminfarmerlogo.png', '404-tick.png', 'abc2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

CREATE TABLE `seller_details` (
  `seller_id` int(20) NOT NULL,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `government_id` varchar(100) NOT NULL,
  `gst_no` int(100) NOT NULL,
  `status` int(3) NOT NULL,
  `created_on` datetime NOT NULL,
  `otp` int(7) NOT NULL,
  `verify` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`seller_id`, `first_name`, `last_name`, `photo`, `email`, `password`, `contact_no`, `government_id`, `gst_no`, `status`, `created_on`, `otp`, `verify`) VALUES
(11, 'shlok', 'patel', 'abc.png', 'a@gmail.com', '$2y$10$zQ5wzL3wEB3cmwAMUY32WO1tQnPg9jbdmnwbySGYA7nC772m2cQvm', 1, 'adminrevenue.jpeg', 0, 0, '0000-00-00 00:00:00', 0, 1),
(15, 'aaaaa', 'patel', 'adminrevenue.jpeg', 'q@gmail.com', '$2y$10$nRvF3vpF7tV8x9BSZsH5q.QXiIgZ2Mgsn1ob1EgEKJd.OvVjJf7R6', 111, 'adminrevenue.jpeg', 1212, 1, '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_details`
--

CREATE TABLE `shop_details` (
  `shop_id` int(255) NOT NULL,
  `seller_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_details`
--

INSERT INTO `shop_details` (`shop_id`, `seller_id`, `name`, `address`, `city`, `email`, `contact_no`, `time`, `contact_person`, `location`, `photo`) VALUES
(3, 11, 'shlok', 'rajkot', 'surat', 'surat', 222, 'sass', 'asas', 'https://maps.app.goo.gl/iHuHGrGhbkJiykgE7', 'abc.png'),
(4, 0, '', 'ahmedabad', '', '', 0, '', '', 'https://maps.app.goo.gl/iHuHGrGhbkJiykgE7', 'adminrevenue.jpeg'),
(5, 0, '', 'aaa', '', '', 0, '', '', 'https://maps.app.goo.gl/iHuHGrGhbkJiykgE7', 'adminrevenue.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(10) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `feedback` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buyer_details`
--
ALTER TABLE `buyer_details`
  ADD PRIMARY KEY (`Buyer_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupon_details`
--
ALTER TABLE `coupon_details`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller_details`
--
ALTER TABLE `seller_details`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `shop_details`
--
ALTER TABLE `shop_details`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `buyer_details`
--
ALTER TABLE `buyer_details`
  MODIFY `Buyer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupon_details`
--
ALTER TABLE `coupon_details`
  MODIFY `coupon_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `seller_details`
--
ALTER TABLE `seller_details`
  MODIFY `seller_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shop_details`
--
ALTER TABLE `shop_details`
  MODIFY `shop_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
