-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 07:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `checkout_session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `item_number`, `item_name`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `checkout_session_id`, `payment_status`, `created`, `modified`) VALUES
(1, 'test', 'test@gmail.com', '1', 'HP Pavilion Laptop', 2.00, 'USD', 2.00, 'usd', 'pi_3JvaOFIuhitIP6cR0FEnom0H', 'cs_test_a1TndHS3IhW2KTTT06PTXLrsz0eU9qC1XvrFn5pCLATtSN30VNRyOlozsd', 'succeeded', '2021-11-14 10:03:12', '2021-11-14 10:03:12'),
(2, 'test', 'test@gmail.com', '1', 'HP Pavilion Laptop', 2.00, 'USD', 2.00, 'usd', 'pi_3JvahlIuhitIP6cR0Ti7w6lW', 'cs_test_a1o7uV7nVT1RCz9TNxoaMyk3wFrhPuSb6cdUusaau1zZzoPSt9aZ4JahhD', 'succeeded', '2021-11-14 10:23:14', '2021-11-14 10:23:14'),
(3, 'eere', 'jfkdf@gmail.com', '', '', 0.00, '', 979895.00, 'usd', 'pi_3LRFJDKFm2vs15LF0IOuIzPk', 'cs_test_a1pGRCh6AgaF1w85nCl8rZT42DaojLyCjdX0xc5QiUrpTvzZeSFSMr9ElP', 'succeeded', '2022-07-30 19:03:19', '2022-07-30 19:03:19'),
(4, 'eere', 'jfkdf@gmail.com', '', '', 0.00, '', 674866.00, 'usd', 'pi_3LUokWKFm2vs15LF0LbHHPUJ', 'cs_test_a10WIPeomIkkNHzqQQ4D0YSEn1ZMejNugbFugfLiE9NfGeFW35S1QZsXLf', 'succeeded', '2022-08-09 15:29:37', '2022-08-09 15:29:37'),
(5, 'eere', 'jfkdf@gmail.com', '', '', 0.00, '', 105998.00, 'usd', 'pi_3LVFfHKFm2vs15LF1FFc7Sx8', 'cs_test_a1gfxX0hPl7zfBvmp4uojHKEG1yrLFA6QJi4rLGk6mtZfKDRIgTs9cfuVR', 'succeeded', '2022-08-10 20:14:43', '2022-08-10 20:14:43'),
(6, 'eere', 'jfkdf@gmail.com', '', '', 0.00, '', 260997.00, 'usd', 'pi_3LVLMZKFm2vs15LF1tuKHqaA', 'cs_test_a1gCSH41stnyredTDIvWOwWrUaeAm3P9vTsaOyG8fgaaj1nhVo0lpPzqkV', 'succeeded', '2022-08-11 02:19:09', '2022-08-11 02:19:09'),
(7, 'eere', 'jfkdf@gmail.com', '', '', 0.00, '', 415996.00, 'usd', 'pi_3LVLoNKFm2vs15LF0jL7vsu2', 'cs_test_a1Jc3v3GWdHZJ8azbtjo16Hlv4sqhNzSCtGkHuzzhf5evCc3HlsLfFxfmm', 'succeeded', '2022-08-11 02:47:53', '2022-08-11 02:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_img` varchar(600) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_cat` varchar(200) NOT NULL,
  `p_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_img`, `p_price`, `p_cat`, `p_description`) VALUES
(9, 'Vivo Y20 2021', '6.jpg', 13990, 'Phones', 'Vivo Y20 comes with 6.51 inches HD+ IPS LCD screen. It has a Full-View waterdrop notch design. The back camera is of triple 13+2+2 MP with PDAF, depth sensor, dedicated macro camera, LED flash etc. and Full HD video recording. The front camera is of 8 MP. Vivo Y20 comes with 5000 mAh battery with 10W fast charging. It has 4 GB RAM, up to 2.35 GHz octa-core CPU and PowerVR GE8320 GPU. It is powered by a Mediatek Helio P35 (12nm) chipset. The device comes with 64 GB internal storage and dedicated MicroSD slot. There is a side-mounted fingerprint sensor in this phone.'),
(10, 'iPad Air ', 'iPad Air (5th Generation) WiFi + Cellular side angle.png', 83990, 'Tab', '5th Generation, WiFi + Cellular side angle'),
(11, 'Galaxy S22 Ultra', 'ss1.png', 154999, 'Phones', 'S Pen lovers are sure to fall for the Galaxy S22 Ultra because, it is the first Samsung phone to not only incorporate S Pen support, but also include a physical slot on the phone for the stylus.'),
(12, 'Xiaomi 12 Pro', 'mi1.png', 99999, 'Phones', 'Master the Groundbreaking PerformanceEmbracing Snapdragon® 8 Gen 1, the flagship 4nm processor is designed to master all the phenomenal innovations with more dynamic power and a cooler attitude.'),
(13, 'iPhone 13 Pro ', 'apple1.png', 176999, 'Phones', 'Our Pro camera system gets its biggest upgrade ever.  With next-level hardware that captures so much more detail. '),
(14, 'MacBook Pro 16inch (2021) ', 'mac1.png', 259990, 'Laptop', 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life'),
(15, 'Apple Watch Hermès Series', 'watch1.png', 50000, 'Watch', 'Apple Watch Hermès Series 4 Single Tour'),
(16, 'Amazfit T-Rex 2', 'watch2.png', 18290, 'Watch', 'Super-tough from the Inside Out Experience the thrill of the hunt with the absolute titan of toughness that is the Amazfit T-Rex 2.'),
(17, 'JBL Tune 660NC ', 'headset1.png', 7990, 'Headphone', 'Wireless, on-ear, active noise-canceling headphones.'),
(21, 'Asus ZenBook Duo UX481FA ', 'asus1.png', 162800, 'Laptop', 'Asus ZenBook Duo take your creativity and productivity to the next level with the groundbreaking. This ZenBook Duo features with a full-width ASUS ScreenPad Plus that works seamlessly with the main display.'),
(22, 'Xiaomi 10000mAh With Wireless Charging', 'pb 1.png', 2490, 'Accessories', '10W wireless fast charging, and two single-port output 18W high-speed wired interface. Wireless charging mobile phone devices that support Qi protocol can be charged simultaneously with wired charging electronic devices such as cameras, game consoles, and Macbooks.'),
(23, 'Edifier Bluetooth ', 'headset 2.png', 4679, 'Headphone', '95 hours of battery life | Bluetooth 4.1 & NFC | Lightweight comfort'),
(25, 'Airpods Pro ', 'top selling 3.png', 23990, 'Headphone', 'AirPods Pro features Active Noise Cancellation for immersive sound. Transparency mode for hearing the world around you. They’re sweat and water resistant1 and have a customizable fit for all-day comfort.'),
(26, 'Galaxy S22 Ultra', 'ss1.png', 154999, 'Selling', 'S Pen lovers are sure to fall for the Galaxy S22 Ultra because, it is the first Samsung phone to not only incorporate S Pen support, but also include a physical slot on the phone for the stylus.'),
(27, 'MacBook Pro 16inch (2021) ', 'mac1.png', 259990, 'Selling', 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life'),
(28, 'Airpods Pro ', 'top selling 3.png', 23990, 'Selling', 'AirPods Pro features Active Noise Cancellation for immersive sound. Transparency mode for hearing the world around you. They’re sweat and water resistant1 and have a customizable fit for all-day comfort.'),
(31, 'Xiaomi 12 Pro', 'mi1.png', 99999, 'Selling', 'Master the Groundbreaking PerformanceEmbracing Snapdragon® 8 Gen 1, the flagship 4nm processor is designed to master all the phenomenal innovations with more dynamic power and a cooler attitude.'),
(32, 'Galaxy M53', 'samsung M53.jpeg', 52999, 'Phones', 'Display : 6.7 inches,Super AMOLED Plus,120Hz, 108MP High Resolution Camera. Lets you capture crystal clear details. 6nm Processor: Up for giving unmatched performance with 6nm octa-core processor. Performance on Demand: RAM Plus intelligently expands the memory by analyzing your multi-tasking needs.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `currency` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `currency`, `status`) VALUES
(1, 'HP Pavilion Laptop', '', 2.00, 'USD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `cp_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `cp_price` int(10) NOT NULL,
  `cu_id` varchar(100) NOT NULL,
  `cp_product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp_cart`
--

INSERT INTO `temp_cart` (`cp_id`, `qty`, `cp_price`, `cu_id`, `cp_product_id`) VALUES
(20, 2, 52999, '::1', 32),
(22, 1, 154999, '::1', 26),
(23, 1, 154999, '::1', 26),
(24, 1, 13990, '::1', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_cart`
--
ALTER TABLE `temp_cart`
  ADD PRIMARY KEY (`cp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp_cart`
--
ALTER TABLE `temp_cart`
  MODIFY `cp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
