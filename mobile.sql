-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 03:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `mobile_name` text NOT NULL,
  `mobile_img` text NOT NULL,
  `os` text NOT NULL,
  `cpu` text NOT NULL,
  `dimension` text NOT NULL,
  `sim` text NOT NULL,
  `2g` text NOT NULL,
  `3g` text NOT NULL,
  `4g` text NOT NULL,
  `card_slot` text NOT NULL,
  `ram` text NOT NULL,
  `internam_memory` text NOT NULL,
  `external_memory` text NOT NULL,
  `front_camera` text NOT NULL,
  `rear_camera` text NOT NULL,
  `resolution` text NOT NULL,
  `protection` text NOT NULL,
  `sensor` text NOT NULL,
  `battery_power` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `mobile_name`, `mobile_img`, `os`, `cpu`, `dimension`, `sim`, `2g`, `3g`, `4g`, `card_slot`, `ram`, `internam_memory`, `external_memory`, `front_camera`, `rear_camera`, `resolution`, `protection`, `sensor`, `battery_power`, `color`) VALUES
(1, 'JIO SMART FONE', 'Uploads/6c7e86dc9b470518cdcd3e552743fdee.png', 'Android Jelly Bean', '4.6', '3.6', '2', 'yes', 'no', 'no', 'yes', '4 gb', '7 gb', '34 gb', '5 mp', '3mp', '33', 'yes', 'yes', '2800 mphz', 'gray , black'),
(2, 'Apple iPhone 6', 'Uploads/6c7e86dc9b470518cdcd3e552743fdee.png', 'MAC OS', '5.6', '4.5', '1', 'Yes', 'Yes', 'Yes', 'Yes', '2gb', '7 gb', '128GB', '5 mp', '20MP', '33', 'Yes', 'Yes', '2800 mphz', 'Gold , White'),
(3, 'Honor 7X', 'Uploads/13615ebb2e21c018e6484931545b8b91.jpg', 'Android', '4.8', '3.6', '2', 'Yes', 'Yes', 'Yes', 'No', '8gb', '7 gb', '34 gb', '5 mp', '20MP', '55', 'Yes', 'Yes', '3000 mphz', 'Gold , White'),
(4, ' Redmi 6 Pro', 'Uploads/52f77d9024a683693cef2a407e2fa2bb.jpg', 'Android Jelly Bean', '4.8', '3.6', '2', 'Yes', 'Yes', 'Yes', 'Yes', '4 gb', '32GB', '128GB', '3MP', '16 MP', '33', 'Yes', 'Yes', '3500 mphz', 'Gold , White');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `mobile_name` varchar(255) NOT NULL,
  `mobile_img` varchar(255) NOT NULL,
  `realies_date` text NOT NULL,
  `diamension` text NOT NULL,
  `weight` varchar(255) NOT NULL,
  `battery_capacity` text NOT NULL,
  `color` text NOT NULL,
  `form_factory` text NOT NULL,
  `removable_battery` text NOT NULL,
  `screen_size` text NOT NULL,
  `touch_screen` text NOT NULL,
  `resolution` text NOT NULL,
  `aspect_ratio` text NOT NULL,
  `processor` text NOT NULL,
  `ram` text NOT NULL,
  `internal_storage` text NOT NULL,
  `exapandable_storage` text NOT NULL,
  `exapandable_storage_type` text NOT NULL,
  `exapandable_storage_upto` text NOT NULL,
  `processor_make` text NOT NULL,
  `rear_camera` text NOT NULL,
  `rear_autofocus` text NOT NULL,
  `rear_flash` text NOT NULL,
  `front_camera` text NOT NULL,
  `front_autofocus` text NOT NULL,
  `front_flash` text NOT NULL,
  `operating_system` text NOT NULL,
  `os_updatable` text NOT NULL,
  `wifi` text NOT NULL,
  `gps` text NOT NULL,
  `blootooth` text NOT NULL,
  `headfone` text NOT NULL,
  `infrared` text NOT NULL,
  `fm` text NOT NULL,
  `no_of_sim` text NOT NULL,
  `fingesprint_sensor` text NOT NULL,
  `sim1_type` text NOT NULL,
  `sim1_gsmcdma` text NOT NULL,
  `sim1_3g` text NOT NULL,
  `sim1_4g` text NOT NULL,
  `sim2_type` text NOT NULL,
  `sim2_gsmcdma` int(11) NOT NULL,
  `sim2_3g` int(11) NOT NULL,
  `smi2_4g` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `mobile_name`, `mobile_img`, `realies_date`, `diamension`, `weight`, `battery_capacity`, `color`, `form_factory`, `removable_battery`, `screen_size`, `touch_screen`, `resolution`, `aspect_ratio`, `processor`, `ram`, `internal_storage`, `exapandable_storage`, `exapandable_storage_type`, `exapandable_storage_upto`, `processor_make`, `rear_camera`, `rear_autofocus`, `rear_flash`, `front_camera`, `front_autofocus`, `front_flash`, `operating_system`, `os_updatable`, `wifi`, `gps`, `blootooth`, `headfone`, `infrared`, `fm`, `no_of_sim`, `fingesprint_sensor`, `sim1_type`, `sim1_gsmcdma`, `sim1_3g`, `sim1_4g`, `sim2_type`, `sim2_gsmcdma`, `sim2_3g`, `smi2_4g`) VALUES
(1, 'Asus', '', '', '', '', '', '', '', '', '', '', '', '', '', '2GB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cdd x', '', '', '', '', '', '', 0, 0, 0),
(2, 'Samsunng j 7', '', '', '', '', '', '', '', '', '', '', '', '', '', '2GB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cdd x', '', '', '', '', '', '', 0, 0, 0),
(3, 'Nokia', '', '', '', '', '', '', '', '', '', '', '', '', '', '2GB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cdd x', '', '', '', '', '', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
