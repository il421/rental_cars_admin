-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 01:16 PM
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
-- Database: `std621-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_title` varchar(20) NOT NULL,
  `car_body` varchar(20) NOT NULL,
  `car_engine` varchar(20) NOT NULL,
  `car_hp` varchar(20) NOT NULL,
  `car_fuel` varchar(6) NOT NULL,
  `car_consumption` varchar(20) NOT NULL,
  `car_trans` varchar(2) NOT NULL,
  `car_capacity` tinyint(2) UNSIGNED ZEROFILL NOT NULL DEFAULT '04',
  `car_price` int(6) NOT NULL,
  `car_baggage` int(2) UNSIGNED ZEROFILL NOT NULL DEFAULT '02',
  `car_ac` tinyint(1) NOT NULL DEFAULT '1',
  `car_ccontrol` tinyint(1) NOT NULL DEFAULT '0',
  `car_powerwindow` tinyint(1) NOT NULL DEFAULT '1',
  `car_radio` tinyint(1) NOT NULL DEFAULT '1',
  `car_usb` tinyint(1) NOT NULL DEFAULT '1',
  `car_bt` tinyint(1) NOT NULL DEFAULT '1',
  `car_aux` tinyint(1) NOT NULL DEFAULT '1',
  `car_abs` tinyint(1) NOT NULL DEFAULT '1',
  `car_ba` tinyint(1) NOT NULL DEFAULT '1',
  `car_airbags` tinyint(1) NOT NULL DEFAULT '1',
  `car_child` tinyint(1) NOT NULL DEFAULT '1',
  `car_promo` tinyint(1) NOT NULL DEFAULT '0',
  `car_img1` varchar(256) NOT NULL,
  `car_img2` varchar(256) NOT NULL,
  `car_img3` varchar(256) NOT NULL,
  `car_quantity` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_title`, `car_body`, `car_engine`, `car_hp`, `car_fuel`, `car_consumption`, `car_trans`, `car_capacity`, `car_price`, `car_baggage`, `car_ac`, `car_ccontrol`, `car_powerwindow`, `car_radio`, `car_usb`, `car_bt`, `car_aux`, `car_abs`, `car_ba`, `car_airbags`, `car_child`, `car_promo`, `car_img1`, `car_img2`, `car_img3`, `car_quantity`) VALUES
(1, 'Volkswagen Passat', 'Sedan', '2.0', '225hp', 'diesel', '10L/100km', 'MT', 04, 500, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'img/volkswagen1.jpg', 'img/volkswagen2.jpg', 'img/volkswagen3.jpg', 10),
(2, 'Ford Fiesta', 'Hatchback', '1.6', '225hp', 'petrol', '10L/100km', 'AT', 04, 200, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'img/fiesta1.jpg', 'img/fiesta2.jpg', 'img/fiesta3.jpg', 8),
(3, 'Ford Mustang', 'Sedan', '3.0', '225hp', 'petrol', '10L/100km', 'MT', 04, 400, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'img/mustang1.jpg', 'img/mustang2.jpg', 'img/mustang3.jpg', 7),
(4, 'BMW M3', 'Sedan', '3.2', '225hp', 'petrol', '10L/100km', 'AT', 04, 600, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'img/bmw1.jpg', 'img/bmw2.jpg', 'img/bmw3.jpg', 2),
(5, 'Maserati Convertible', 'Sedan', '3.2', '225hp', 'petrol', '10L/100km', 'AT', 04, 600, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'img/maserati1.jpg', 'img/maserati2.jpg', 'img/maserati3.jpg', 3),
(6, 'Toyota Camry', 'Sedan', '1.8', '225hp', 'petrol', '10L/100km', 'MT', 04, 200, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'img/camry1.jpg', 'img/camry2.jpg', 'img/camry3.jpg', 4),
(7, 'Toyota Avensis', 'Sedan', '2.0', '225hp', 'diesel', '10L/100km', 'AT', 04, 600, 02, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 'img/avensis1.jpg', 'img/avensis2.jpg', 'img/avensis3.jpg', 5),
(9, 'Fiat Panda', 'Hatchback', '2.4', '225hp', 'petrol', '10L/100km', 'AT', 04, 200, 02, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'img/fiat panda1.jpg', 'img/fiat panda2.jpg', 'img/fiat panda3.jpg', 3),
(10, 'Bugatti', 'Sedan', '5.0', '600hp', 'petrol', '20L/100km', 'AT', 02, 1000, 10, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 'img/bugatti1.jpg', 'img/bugatti2.jpeg', 'img/bugatti3.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `pickup` time NOT NULL,
  `end` date NOT NULL,
  `dropoff` time NOT NULL,
  `approve_status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `start`, `pickup`, `end`, `dropoff`, `approve_status`, `user_id`, `car_id`) VALUES
(4, '2018-03-07', '12:00:00', '2018-03-22', '12:00:00', 1, 6, 2),
(5, '2018-04-25', '12:00:00', '2018-04-27', '12:00:00', 1, 6, 3),
(6, '2018-03-29', '15:00:00', '2018-04-04', '10:00:00', 1, 6, 3),
(7, '2018-03-05', '15:00:00', '2018-04-01', '10:00:00', 1, 6, 2),
(8, '2018-03-13', '07:00:00', '2018-04-04', '17:00:00', 1, 6, 2),
(9, '2018-03-19', '07:00:00', '2018-03-23', '17:00:00', 1, 6, 2),
(11, '2018-04-11', '12:00:00', '2018-04-13', '12:00:00', 1, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_first` varchar(50) NOT NULL,
  `user_last` varchar(50) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_role` varchar(5) NOT NULL DEFAULT 'basic',
  `user_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pwd`, `user_first`, `user_last`, `user_phone`, `user_role`, `user_active`) VALUES
(6, 'chesnochenko.a@gmail.com', '$2y$10$MG.Y0jpazOt7GjNC.mF2aOXDWHZDutzRHWMnapWT9oF7c4oi0yR1O', 'Alex', 'Chesnochenko', 224695842, 'admin', 1),
(7, 'sharky65@yandex.ru', '$2y$10$18xVKYv7ypLV5uGpG35uw.boNVjLYgpVbRG9v36PD.Y1.tsVyvTR2', 'John', 'Travolta', 224123332, 'basic', 0),
(11, 'ilya.suglobov@gmail.com', '$2y$10$mO3REKZb6.3ujcXFiYy88OOusrZBTYhT9Ac9L8rdWR/s.DRS6YB7K', 'Ilya', 'Suglobov', 21094322, 'admin', 1),
(12, 'bnycastro@gmail.com', '$2y$10$u.eeXR4n0FkYJpFMU4QG5u9k67rY7/00ojX2yu08Gc3nRoRTx4LzC', 'Vincent', 'Castro', 22449214, 'staff', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_userid` (`user_id`),
  ADD KEY `FK_carid` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
