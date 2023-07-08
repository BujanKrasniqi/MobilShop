-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 04:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `comment`) VALUES
(6, 'Bujan Krasniqi', 'bujani09@gmail.com', 'Pershendetje!\r\nSa kushton iphone X');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `category`) VALUES
(6, 'iPhone 11 PRO', 'https://arimob.com/wp-content/uploads/2020/02/iPhone-11-Pro-space-gray.jpg', 'phone'),
(7, 'Samsung S10+', 'https://arimob.com/wp-content/uploads/2020/02/Samsung-Galaxy-S10-Plus-Duos-512GB-Ceramic-Black-8801643722067-10092019-1-p.jpg', 'phone'),
(8, 'Xiaomi Redmi Note 10', 'https://arimob.com/wp-content/uploads/2020/03/xiaomi-mi-note-10-6-47-inch-6gb-128gb-smartphone-black-1574132220269._w500_.jpg', 'phone'),
(9, 'Huawei Mate 20PRO', 'https://arimob.com/wp-content/uploads/2020/02/huawei-mate-20-pro-6-39-inch-6gb-128gb-smartphone-emerald-green-1571971329653._w500_.jpg', 'phone'),
(10, 'Mbushes për iphone', 'http://aztech-ks.com/electronics/wp-content/uploads/2017/10/remax-king-kong-safe-charge-lightning-cable-1000mm-black-laterics-1509-17-F72450_11.jpg', 'aksesore'),
(11, 'Mbushes për android', 'http://aztech-ks.com/electronics/wp-content/uploads/2017/10/remax-lesu-data-cable-2-768x768.jpg', 'aksesore'),
(12, 'Ndegjuese Aula Shax', 'http://aztech-ks.com/electronics/wp-content/uploads/2017/07/ausines-aula-shax-gaming-headset1.png', 'aksesore'),
(13, 'Mbrojtes për iphone-7', 'http://aztech-ks.com/electronics/wp-content/uploads/2017/10/Sky-case-TM-0031.jpg', 'aksesore'),
(14, 'G Mobile', 'https://gjstatic.blob.core.windows.net/businessdirectoryphotos/1609218b9777dbc39349d2ad9416fb24d665f0.jpg', 'servis'),
(15, 'Mobil Shop Ari', 'https://arimob.com/wp-content/uploads/2020/01/Ari_mob_logo-26.png', 'servis'),
(16, 'Mobil Shop Mani', 'https://scontent.fprx2-1.fna.fbcdn.net/v/t1.0-1/15380304_1628814260469494_1486343865912330132_n.jpg?_nc_cat=100&_nc_sid=dbb9e7&_nc_ohc=PrFRJ8jroK8AX8gH_fO&_nc_ht=scontent.fprx2-1.fna&oh=263f93871b9a2e1f0af65552c63edfde&oe=5EEF3DF5', 'servis'),
(17, 'Saja Mobile', 'http://www.sajamobile.com/images/logo.png', 'servis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `username`, `password`) VALUES
(3, 'Filan', 'Fisteku', 'Filan', 'ab102cf003ea2ac536d855c1acd48317'),
(4, 'Bujan', 'Krasniqi', 'Bujan', '00a91ecf265c4982e0f2749db040e897');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
