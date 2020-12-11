-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2020 at 04:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `status`, `name`, `email`, `comment`) VALUES
(1, 1, 'Danin asdsf', 'danindragosavac@gmail.com', 'adsf'),
(2, 1, 'Danin asdsf', 'danindragosavac@gmail.com', 'adsfadsf'),
(3, 1, 'Danin asdsf', 'danindragosavac@gmail.com', 'adsfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `product_description`, `image`) VALUES
(1, 'Samsung s10', 'Samsung old phone s10.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in urna tincidunt nulla finibus porttitor. Nam eleifend dui neque, sed vehicula enim aliquam at. Proin luctus augue nec dolor consequat tristique. Nunc at pellentesque sapien, commodo vulputate mi. Vivamus mattis eu odio vitae pellentesque.\r\n\r\n', 'media/images/s10.jpg'),
(2, 'Samsung s20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit eros, lacinia eu ex ut, condimentum maximus lectus. In tincidunt ligula vitae auctor fringilla. Integer eget nulla eu velit maximus feugiat. Sed blandit nibh erat, vitae luctus orci auctor at. Etiam vehicula pharetra orci, ac feugiat elit pellentesque in. Ut eu sem a risus luctus mattis sit amet et libero. Nulla facilisi.', 'media/images/s20.jpg'),
(7, 'Xiaomi Mi 10 pro', 'Praesent pharetra ullamcorper sollicitudin. Morbi pretium urna ultrices venenatis imperdiet. Suspendisse luctus sem vitae purus venenatis, et interdum neque consectetur. Aenean quis risus dictum, volutpat nunc id, porttitor urna. Nam at nulla eget velit egestas molestie quis quis diam.', 'media/images/xiaomi10pro.jpg'),
(3, 'Samsung s8', 'Praesent at pellentesque ligula. Fusce id tempus arcu. Nulla dictum magna vel felis imperdiet lobortis. Morbi convallis vitae diam ut molestie. Quisque facilisis accumsan nisi, quis condimentum mauris iaculis vel. Phasellus in neque scelerisque, aliquam tortor id, consectetur nisi. Phasellus auctor ultrices metus.', 'media/images/s8.jpg'),
(4, 'Iphone 12', 'Phasellus ligula arcu, volutpat a ultrices nec, auctor vel urna. Donec blandit mauris vel risus viverra, imperdiet tincidunt mauris tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eleifend quam sed ante rutrum vestibulum. Sed quis risus in nisi malesuada rhoncus a et erat. Sed nec ligula nulla. ', 'media/images/iphone12.jpg'),
(5, 'Iphone 8', 'Nullam dignissim tortor magna, in ultrices libero molestie in. Nam consequat, lectus nec commodo consectetur, lorem urna aliquam enim, mollis vestibulum felis risus et mi. Donec interdum ultricies turpis sed convallis. Curabitur tincidunt viverra tortor ac mattis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'media/images/iphone8.jpg'),
(6, 'Iphone 6', 'Morbi sed nulla ut ante elementum eleifend ut at diam. Vivamus efficitur nisi nec libero sollicitudin bibendum. Maecenas convallis, enim quis fermentum lacinia, quam metus tincidunt mauris, eu imperdiet erat velit dapibus purus. Integer hendrerit, ipsum nec porta tincidunt, lorem eros blandit odio, ac varius felis dolor ac nibh. ', 'media/images/iphone6.jpg'),
(8, 'Xiaomi Note 9', 'Duis ac neque at eros finibus ornare. Suspendisse luctus est neque, non dapibus arcu faucibus ac. Nam commodo dui at nunc commodo, quis faucibus massa rhoncus. Maecenas ultrices, nibh ac pellentesque eleifend, dui justo euismod lorem, sit amet mollis libero ligula ac arcu. Sed lacinia, enim eget molestie vestibulum, nunc ante ornare odio, sit amet mattis nunc ipsum id leo.', 'media/images/xiaominote9.jpg'),
(9, 'Xiaomi Redmi 8', 'Fusce eu sollicitudin est. Fusce ac tempus diam, nec tempor leo. Vestibulum molestie erat a ligula posuere, id auctor libero lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'media/images/xiaomiredmi8.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
