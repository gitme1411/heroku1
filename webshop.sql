-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 12:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_img`, `category`) VALUES
(1, 'OPPO K3', '377', 'OPPO K3 smartphone runs on Android v9.0 (Pie) operating system. The phone is powered by Octa core (2.2 GHz, Dual core, Kryo 360 + 1.7 GHz, Hexa Core, Kryo 360) processor. It runs on the Qualcomm Snapdragon 710 Chipset. It has 6 GB RAM and 64 GB internal storage.', 'oppok3.png', 'ElectronicDevice'),
(2, 'Samsung Galaxy Tab A8', '160', 'Samsung Galaxy Tab A 8 The tablet comes with a 8.00-inch display with a resolution of 1024x768 pixels. Samsung Galaxy Tab A 8 is powered by a 1.2GHz quad-core processor. It comes with 1.5GB of RAM. The Samsung Galaxy Tab A 8 runs Android and is powered by a 4200mAh non-removable battery.', 'samsunggalaxytaba8.png', 'ElectronicDevice'),
(3, 'iPhone Xs Max 256GB', '1249', 'Apple iPhone XS Max 256GB smartphone runs on iOS v12.0 operating system. The phone is powered by Hexa Core (2.49 GHz, Dual core, Vortex + 1.52 GHz, Quad core, Tempest) processor. It runs on the Apple A12 Bionic Chipset. It has 4 GB RAM and 256 GB internal storage.', 'iphonexs.png', 'ElectronicDevice'),
(4, 'AirPods (Gen 2)', '199', 'Now with more talk time and a new Wireless Charging Case, AirPods deliver an unparalleled wireless headphone experience. Simply take them out and they’re ready to use with all your devices. Put them in your ears and they connect immediately, immersing you in rich, high-quality sound. Just like magic.', 'airpods2.png', 'ElectronicAccessory'),
(5, 'ATH m40x', '99', '(no desc)', 'athm40x.png', 'ElectronicAccessory'),
(6, 'Gaming Mouse CORSAIR', '49', '(no desc)', 'gamingmousecorsair.png', 'ElectronicAccessory'),
(7, 'T-Shirt', '10', 'A plain t-shirt.', 'tshirt.png', 'Clothing'),
(8, 'Hoodie', '20', 'A comfortable hoodie for male.', 'hoodie.png', 'Clothing'),
(9, 'Pants', '15', 'A comfortable pair of pants for male.', 'pants.png', 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'a', 'a@a', '0cc175b9c0f1b6a831c399e269772661', '2019-10-07 11:43:53'),
(2, 'e', 'e@gmail.com', 'e1671797c52e15f763380b45e841ec32', '2019-10-26 12:06:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
