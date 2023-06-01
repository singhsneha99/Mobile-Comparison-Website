-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 03:51 PM
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
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `mobile_name`, `mobile_img`, `realies_date`, `diamension`, `weight`, `battery_capacity`, `color`, `form_factory`, `removable_battery`, `screen_size`, `touch_screen`, `resolution`, `aspect_ratio`, `processor`, `ram`, `internal_storage`, `exapandable_storage`, `exapandable_storage_type`, `exapandable_storage_upto`, `processor_make`, `rear_camera`, `rear_autofocus`, `rear_flash`, `front_camera`, `front_autofocus`, `front_flash`, `operating_system`, `os_updatable`, `wifi`, `gps`, `blootooth`, `headfone`, `infrared`, `fm`, `no_of_sim`, `fingesprint_sensor`, `sim1_type`, `sim1_gsmcdma`, `sim1_3g`, `sim1_4g`, `sim2_type`, `sim2_gsmcdma`, `sim2_3g`, `smi2_4g`) VALUES
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
