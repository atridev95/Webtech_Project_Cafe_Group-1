-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 04:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `id`, `email`, `password`, `gender`, `dob`) VALUES
('Sumaiya Afrin', '17-34872-2', 'sumaiya@gmail.com', '', 'Female', '2021-04-27'),
('Atri Dev', '17-34877-2', 'atri@gmail.com', 'Atr4$', 'Female', '2021-04-21'),
('Sadia Afrin', '17-34904-2', 'afrins1598@gmail.com', 'Sad3$', 'Female', '2021-04-15'),
('Brotati Halder', '17-34902-3', 'kotha@gmail.com', 'Kot4$', 'Female', '2021-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(9, 'Sasha Mendez', 'goxemyde', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(10, 'Vijay Thapa', 'vijaythapa', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(12, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(13, '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Ex Naga', 'c.jpg', 'No', 'Yes'),
(5, 'Burger', 'Food_Category_344.jpg', 'Yes', 'Yes'),
(6, 'Crispy Fries & Chicken naga', 'burger.jpg', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(2, 'Spicy Chicken', 'We\'re separating out this subcategory of veggie burgers because black bean burgers are just that worthy of nutritional praise.', '350.00', '1 (3).jpg', 12, 'yes', 'yes'),
(3, 'Classic Veggy Patty', 'We\'re separating out this subcategory of veggie burgers because black bean burgers are just that worthy of nutritional praise', '390.00', '1 (5).jpg', 13, 'yes', 'yes'),
(4, 'Best Burger', 'Burger with Ham, Pineapple and lots of Cheese.', '4.00', 'Food-Name-6340.jpg', 5, 'Yes', 'Yes'),
(5, 'Fatty Patty Beefy', 'We\'re separating out this subcategory of veggie burgers because black bean burgers are just that worthy of nutritional praise', '390.00', 'c.jpg', 14, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(4, 'Dumplings Specials', '5.00', 1, '5.00', '2021-04-12 08:55:59', 'Ordered', 'sumaiya', '01718523188', 'afrinmrinmoye@gmail.com', 'dhaka,bangladesh'),
(5, 'Dumplings Specials', '5.00', 1, '5.00', '2021-04-12 08:59:57', 'Ordered', 'sumaiya', '01718523188', 'afrinmrinmoye@gmail.com', 'dhaka,bangladesh'),
(6, 'Dumplings Specials', '5.00', 1, '5.00', '2021-04-12 09:23:15', 'Ordered', 'sumaiya', '01718523188', 'amonshijislam@yahoo.com', 'dhaka,bangladesh'),
(7, 'Classic Veggy Patty', '390.00', 1, '390.00', '2021-04-17 12:05:51', 'Ordered', 'sadia afrin', '01278992134', 'afrins1598@gmail.com', 'dhaka123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
