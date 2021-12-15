-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 04:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrip_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_address` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_address`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Admin_Roland', 'rolandmarcobalagtas11@gmail.com', 'admin1234', 'profile.jpg', 'Paombong Bulacan', '<a href=\"#\"> Sciptures </a> <br/>\r\nOne of the best ways to write a successful college essay for your college application is by learning from real college essay examples that worked. I\'ve compiled a few of my favorite essay examples here that cover a variety of college essay topics.', '0905-074-9276', 'IT Student');

-- --------------------------------------------------------

--
-- Table structure for table `box_section`
--

CREATE TABLE `box_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `box_section`
--

INSERT INTO `box_section` (`box_id`, `box_title`, `box_desc`) VALUES
(1, 'We Love Our Costumers', 'Your order comes with a box and Scriptures guitar pic. Cards that indicate the meaning of the shirt print.'),
(2, 'Best Prices', 'We\'re bringing back some old designs with limited availability only. With Scriptures tag\r\n'),
(3, '100% Original Products', 'We are a Gospel-inspired brand that promotes The Beauty of God in a deep conceptual illustration with different unique style.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(3, 'Scriptures', 'scriptures1234@gmail.com', 'nice1234', 'Hagonoy', '09050749222', 'Hagonoy, Bulacan', 'icon.png', '::1'),
(4, 'TestingLang', 'testingroland@gmail.com', 'nice1234', 'Paombong Malolos', '09090909090', 'paombong malolos bulacan', 'Andres-San-Martin-profile-pic-200px.jpg', '::1'),
(6, 'Roland Marco Balagtas', 'rolandmarcobalagtas11@gmail.com', 'mypassword1234', 'Paombong', '09050749276', 'Paombong, Bulacan', 'fb img.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 6, 998, 1887273917, 2, 'Medium', '2021-06-28', 'Complete'),
(2, 6, 499, 1887273917, 1, 'Medium', '2021-06-28', 'Complete'),
(3, 3, 4990, 838185661, 10, 'Medium', '2021-06-29', 'Complete'),
(4, 3, 1497, 939114164, 3, 'Medium', '2021-06-29', 'Complete'),
(5, 3, 998, 945191824, 2, 'Large', '2021-06-29', 'Pending'),
(6, 6, 499, 576144108, 1, 'Medium', '2021-07-01', 'Pending'),
(7, 6, 998, 524802782, 2, 'Medium', '2021-07-02', 'Pending'),
(8, 7, 1996, 859795189, 4, 'Medium', '2021-07-02', 'Complete'),
(9, 3, 998, 904147332, 2, 'Medium', '2021-07-06', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(1, 1887273917, 998, 'Cash On Delivery', 123, '2021-06-27'),
(2, 1887273917, 499, 'Cash On Delivery', 222, '2021-06-28'),
(3, 838185661, 4990, 'Cash On Delivery', 999, '2021-06-29'),
(4, 939114164, 1497, 'Cash On Delivery', 221, '2021-06-29'),
(6, 904147332, 998, 'Cash On Delivery', 111, '2021-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(1, 6, 1887273917, '5', 2, 'Medium', 'Complete'),
(2, 6, 1887273917, '9', 1, 'Medium', 'Complete'),
(3, 3, 838185661, '13', 10, 'Medium', 'Complete'),
(4, 3, 939114164, '5', 3, 'Medium', 'Complete'),
(5, 3, 945191824, '6', 2, 'Large', 'Pending'),
(6, 6, 576144108, '14', 1, 'Medium', 'Pending'),
(7, 6, 524802782, '23', 2, 'Medium', 'Pending'),
(9, 3, 904147332, '9', 2, 'Medium', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(5, 1, '2021-06-27 09:27:08', 'Scriptures The Lord is My Shepherd I Lack Nothing', 'FB_IMG_1624371423832.jpg', 'FB_IMG_1624371425965 (1).jpg', 'FB_IMG_1624371425965.jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”).\r\n\r\nUnique shirts heavy cotton\r\n100% cotton\r\n180-190 gsm\r\n5.60oz'),
(6, 1, '2021-06-27 09:27:35', 'Scriptures Die From Bliss Version 2.0 Black', 'FB_IMG_1624371435175.jpg', 'FB_IMG_1624371439794 (1).jpg', 'FB_IMG_1624371439794.jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”).\r\n\r\nUnique shirts heavy cotton\r\n100% cotton\r\n180-190 gsm\r\n5.60oz'),
(7, 1, '2021-06-27 09:27:45', 'Scriptures Tshirt Not Today Satan Version 2.0', 'FB_IMG_1624371413472.jpg', 'FB_IMG_1624371415463 (1).jpg', 'FB_IMG_1624371415463.jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”).\r\n\r\nUnique shirts heavy cotton\r\n100% cotton\r\n180-190 gsm\r\n5.60oz'),
(9, 1, '2021-06-27 09:27:55', 'Scriptures I Speak To God In Public', 'FB_IMG_1624371417730.jpg', 'FB_IMG_1624371419688.jpg', 'FB_IMG_1624371419688 (1).jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”).\r\n\r\nUnique shirts heavy cotton\r\n100% cotton\r\n180-190 gsm\r\n5.60oz'),
(13, 1, '2021-06-29 15:41:00', 'Scriptures Tshirt Amazing Grace Black ', 'product12.jpg', 'product12.jpg', 'product12.jpg', 499, 'tshirt', '                              \r\n                              Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”).\r\n\r\nUnique shirts heavy cotton\r\n100% cotton\r\n180-190 gsm\r\n5.60oz                              \r\n                          '),
(14, 1, '2021-06-29 15:42:59', 'Scriptures Tshirt Die From Bliss Pink', 'prod_image1.jpg', 'prod_image2.jpg', 'prod_image3jpg.jpg', 499, 'tshirt', '                              \r\nGildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz                              \r\n                          '),
(16, 4, '2021-06-29 15:34:01', 'SCRPTRS The Beauty Of God (RWB)', 'prod1_image1.jpg', 'prod1_image1.jpg', 'prod1_image1.jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz'),
(17, 1, '2021-06-29 15:37:41', 'Scriptures Tshirt On Your Worst Day ILY Black', 'FB_IMG_1624371408381.jpg', 'FB_IMG_1624371411135.jpg', 'FB_IMG_1624371408381 (1).jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz'),
(18, 3, '2021-06-29 15:47:11', 'Coin Purse The Life Of Bless Black', 'FB_IMG_1624371474171.jpg', 'FB_IMG_1624371474171.jpg', 'FB_IMG_1624371474171.jpg', 150, 'Wallet', 'coin purse (plural coin purses) A small bag or pouch designed for carrying money, particularly coins. quotations ▼ (slang) Testicles.'),
(19, 2, '2021-06-29 15:49:05', 'Scriptures Fanny Pack Embroireded Logo', 'FB_IMG_1624371320343.jpg', 'FB_IMG_1624371371803 (1).jpg', 'FB_IMG_1624371320343.jpg', 999, 'bag', 'Color Black & Embroidered Logo with printed strap. *Limited pieces only'),
(20, 2, '2021-06-29 15:50:12', 'Scriptures Fanny Pack Embroireded Logo', 'FB_IMG_1624371369795 (1).jpg', 'FB_IMG_1624371369795.jpg', 'FB_IMG_1624371369795 (1).jpg', 999, 'bag', 'Colorful Logo & Embroidered Logo with printed strap. *Limited pieces only'),
(21, 4, '2021-06-29 15:58:48', 'Four Horsemen of the apocalypse ', 'FB_IMG_1624371302592.jpg', 'FB_IMG_1624371302592.jpg', 'FB_IMG_1624371302592.jpg', 499, 'tshirt', '                              \r\n                                                            \r\n                                                            \r\n                              Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz                              \r\n                                                        \r\n                                                        \r\n                          '),
(22, 4, '2021-06-29 15:58:26', 'Four Horsemen of the apocalypse ', 'FB_IMG_1624371304707.jpg', 'FB_IMG_1624371304707.jpg', 'FB_IMG_1624371304707.jpg', 499, 'tshirt', '                              \r\n                              Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz                              \r\n                          '),
(23, 4, '2021-06-29 16:00:35', 'Four Horsemen of the apocalypse ', 'FB_IMG_1624371306776.jpg', 'FB_IMG_1624371306776.jpg', 'FB_IMG_1624371306776.jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz'),
(24, 4, '2021-06-29 16:02:15', 'Four Horsemen of the apocalypse ', 'FB_IMG_1624371308777.jpg', 'FB_IMG_1624371308777.jpg', 'FB_IMG_1624371308777.jpg', 499, 'tshirt', 'Gildan items we carry are the G200 (6 oz. “Ultra Cotton”), G500 (5.3 oz “Heavy Cotton”), and the G800 (5.6 oz “Dryblend”). Unique shirts heavy cotton 100% cotton 180-190 gsm 5.60oz');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Tshirt', 'You’re not competing against every product online. You’re competing against similar products in your industry. A hammer vs. hammer, for example. And while there’s a lot that goes into the buying decision process, one of the biggest reasons why shoppers buy your product over others is how you choose to describe it. Describe the little features. Talk about the nuances. Nothing is too insignificant or trivial!'),
(2, 'Bags', 'You’re not competing against every product online. You’re competing against similar products in your industry. A hammer vs. hammer, for example. And while there’s a lot that goes into the buying decision process, one of the biggest reasons why shoppers buy your product over others is how you choose to describe it. Describe the little features. Talk about the nuances. Nothing is too insignificant or trivial!'),
(3, 'Wallets', 'You’re not competing against every product online. You’re competing against similar products in your industry. A hammer vs. hammer, for example. And while there’s a lot that goes into the buying decision process, one of the biggest reasons why shoppers buy your product over others is how you choose to describe it. Describe the little features. Talk about the nuances. Nothing is too insignificant or trivial!'),
(4, 'Top Sale', 'You’re not competing against every product online. You’re competing against similar products in your industry. A hammer vs. hammer, for example. And while there’s a lot that goes into the buying decision process, one of the biggest reasons why shoppers buy your product over others is how you choose to describe it. Describe the little features. Talk about the nuances. Nothing is too insignificant or trivial!');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `slide_url`) VALUES
(2, 'Slide Number 2', 'slider-2.jpg', 'http://localhost/Scriptures/index.php'),
(3, 'Slide Number 3', 'slider-3.jpg', 'http://localhost/Scriptures/shop.php'),
(4, 'Slide Number 4', 'slider-4.jpg', 'http://localhost/Scriptures/contact.php'),
(5, 'Slide 1', 'slider-1.jpg', 'http://localhost/Scriptures/customer_register.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `box_section`
--
ALTER TABLE `box_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `box_section`
--
ALTER TABLE `box_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
