-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2019 at 03:11 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gyr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(150) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `districts` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `districts`) VALUES
(1, 'Gampaha'),
(2, 'Matara'),
(5, 'Kaluthara'),
(6, 'Kurunegala'),
(7, 'Galle'),
(8, 'Kegalle'),
(9, 'Nuwara Eliya'),
(10, 'Polonnaruwa'),
(11, 'Wattala'),
(12, 'Kilinochchi'),
(13, 'Badulla'),
(14, 'Batticaloa');

-- --------------------------------------------------------

--
-- Table structure for table `districts2`
--

CREATE TABLE IF NOT EXISTS `districts2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disticts` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `districts2`
--

INSERT INTO `districts2` (`id`, `disticts`) VALUES
(1, 'Colombo'),
(2, 'Kandy'),
(3, 'Hambantota'),
(4, 'Anuradhapura'),
(5, 'Puttalam'),
(6, 'Jaffna'),
(7, 'Embilipitiya'),
(8, 'Mullativu'),
(9, 'Ratnapura'),
(10, 'Ampara'),
(11, 'Mannar'),
(12, 'Trincomalee');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE IF NOT EXISTS `house` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_title` varchar(500) NOT NULL,
  `house_size` varchar(250) NOT NULL,
  `house_perches` varchar(250) NOT NULL,
  `house_desc` varchar(800) NOT NULL,
  `house_price` double(100,2) NOT NULL,
  `house_address` varchar(500) NOT NULL,
  `house_location` varchar(500) NOT NULL,
  `house_city` varchar(500) NOT NULL,
  `house_contact` int(11) NOT NULL,
  `house_state` varchar(100) NOT NULL,
  `electricity` varchar(250) NOT NULL,
  `tap_water` varchar(250) NOT NULL,
  `wide_road` varchar(250) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_path` varchar(800) NOT NULL,
  `image_type` varchar(250) NOT NULL,
  `image_name1` varchar(250) NOT NULL,
  `image_path1` varchar(800) NOT NULL,
  `image_type1` varchar(250) NOT NULL,
  `image_name2` varchar(250) NOT NULL,
  `image_path2` varchar(800) NOT NULL,
  `image_type2` varchar(250) NOT NULL,
  `image_name3` varchar(250) NOT NULL,
  `image_path3` varchar(800) NOT NULL,
  `image_type3` varchar(250) NOT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `house_title`, `house_size`, `house_perches`, `house_desc`, `house_price`, `house_address`, `house_location`, `house_city`, `house_contact`, `house_state`, `electricity`, `tap_water`, `wide_road`, `image_name`, `image_path`, `image_type`, `image_name1`, `image_path1`, `image_type1`, `image_name2`, `image_path2`, `image_type2`, `image_name3`, `image_path3`, `image_type3`) VALUES
(2, 'amazon house', '30', 'perches', 'very big house and more facilities', 50000000.00, 'hizbulla road , Galle', 'Galle', 'galle', 778969856, 'Available', 'Available', 'Available', '100 m', '1.jpg', 'images/customer/pics/1.jpg', 'image/jpeg', '2.jpg', 'images/customer/pics1/2.jpg', 'image/jpeg', '3.jpg', 'images/customer/pics2/3.jpg', 'image/jpeg', '1.jpg', 'images/customer/pics3/1.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE IF NOT EXISTS `land` (
  `land_id` int(11) NOT NULL AUTO_INCREMENT,
  `land_title` varchar(250) NOT NULL,
  `land_size` varchar(250) NOT NULL,
  `land_perches` varchar(250) NOT NULL,
  `land_desc` varchar(500) NOT NULL,
  `land_price` double(100,2) NOT NULL,
  `land_address` varchar(500) NOT NULL,
  `land_location` varchar(250) NOT NULL,
  `land_city` varchar(250) NOT NULL,
  `land_contact` int(11) NOT NULL,
  `image_1` varchar(500) NOT NULL,
  `image_2` varchar(500) NOT NULL,
  `image_3` varchar(500) NOT NULL,
  `image_4` varchar(500) NOT NULL,
  `land_state` varchar(250) NOT NULL,
  `electricity` varchar(500) NOT NULL,
  `tap_water` varchar(500) NOT NULL,
  `wide_road` varchar(500) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `image_path` varchar(800) NOT NULL,
  `image_type` varchar(500) NOT NULL,
  `image_name1` varchar(500) NOT NULL,
  `image_path1` varchar(800) NOT NULL,
  `image_type1` varchar(500) NOT NULL,
  `image_name2` varchar(500) NOT NULL,
  `image_path2` varchar(800) NOT NULL,
  `image_type2` varchar(500) NOT NULL,
  `image_name3` varchar(500) NOT NULL,
  `image_path3` varchar(800) NOT NULL,
  `image_type3` varchar(500) NOT NULL,
  PRIMARY KEY (`land_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_id`, `land_title`, `land_size`, `land_perches`, `land_desc`, `land_price`, `land_address`, `land_location`, `land_city`, `land_contact`, `image_1`, `image_2`, `image_3`, `image_4`, `land_state`, `electricity`, `tap_water`, `wide_road`, `image_name`, `image_path`, `image_type`, `image_name1`, `image_path1`, `image_type1`, `image_name2`, `image_path2`, `image_type2`, `image_name3`, `image_path3`, `image_type3`) VALUES
(4, 'nature area', '30', 'perches', 'nice place', 2000000.00, 'main street', 'Hambantota', 'hambantota', 778996542, '', '', '', '', 'Available', 'Available', 'Available', '100 m', '12.png', 'images/customer/land/pics/12.png', 'image/png', '', 'images/customer/land/pics1/', '', '', 'images/customer/land/pics2/', '', '12.png', 'images/customer/land/pics3/12.png', 'image/png'),
(7, 'grfhrf', '45', 'perches', 'gfhfg', 457885.00, 'gjtgjng', 'Colombo', 'jnjgjkyhk', 778969856, '', '', '', '', 'Available', 'Available', 'Available', '100 m', '12.png', 'images/customer/land/pics/12.png', 'image/png', '15.png', 'images/customer/land/pics1/15.png', 'image/png', '15.png', 'images/customer/land/pics2/15.png', 'image/png', '', 'images/customer/land/pics3/', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `Contact`, `email`, `message`) VALUES
(1, 'Anujan', 775919413, 'anujancis@gmail.com', 'super work'),
(2, 'Anujan Sri', 71412358, 'sri@gmail.com', 'good style ');

-- --------------------------------------------------------

--
-- Table structure for table `publish_house`
--

CREATE TABLE IF NOT EXISTS `publish_house` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_title` varchar(250) NOT NULL,
  `house_size` varchar(250) NOT NULL,
  `house_perches` varchar(250) NOT NULL,
  `house_desc` varchar(800) NOT NULL,
  `house_price` double(100,2) NOT NULL,
  `house_address` varchar(500) NOT NULL,
  `house_location` varchar(500) NOT NULL,
  `house_city` varchar(500) NOT NULL,
  `house_contact` int(11) NOT NULL,
  `house_state` varchar(500) NOT NULL,
  `electricity` varchar(500) NOT NULL,
  `tap_water` varchar(500) NOT NULL,
  `wide_road` varchar(500) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `image_path` varchar(800) NOT NULL,
  `image_type` varchar(500) NOT NULL,
  `image_name1` varchar(500) NOT NULL,
  `image_path1` varchar(800) NOT NULL,
  `image_type1` varchar(500) NOT NULL,
  `image_name2` varchar(500) NOT NULL,
  `image_path2` varchar(800) NOT NULL,
  `image_type2` varchar(500) NOT NULL,
  `image_name3` varchar(500) NOT NULL,
  `image_path3` varchar(800) NOT NULL,
  `image_type3` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `publish_house`
--

INSERT INTO `publish_house` (`house_id`, `house_title`, `house_size`, `house_perches`, `house_desc`, `house_price`, `house_address`, `house_location`, `house_city`, `house_contact`, `house_state`, `electricity`, `tap_water`, `wide_road`, `image_name`, `image_path`, `image_type`, `image_name1`, `image_path1`, `image_type1`, `image_name2`, `image_path2`, `image_type2`, `image_name3`, `image_path3`, `image_type3`, `date`) VALUES
(1, 'House for Sale', '32', 'perches', 'Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice ', 25687522.00, 'Boundary road Batticaloa', 'Gampaha', 'Batticaloa', 775919413, 'Available', 'Available', 'Not Available', '100 m', 'h2.jpg', 'admin/images/customer/pics/h2.jpg', 'image/jpeg', 'h4.jpg', 'admin/images/customer/pics1/h4.jpg', 'image/jpeg', '', 'admin/images/customer/pics2/', '', 'SaintCanut01.jpg', 'admin/images/customer/pics3/SaintCanut01.jpg', 'image/jpeg', '2018-08-08 21:36:48'),
(2, 'matala', '20', 'perches', 'bhdbvhd', 20000000.00, 'matala', 'Kandy', 'kandy', 779856965, 'Available', 'Available', 'Available', '200 m', 'web 1.jpg', 'admin/images/customer/pics/web 1.jpg', 'image/jpeg', 'Buy-A-Home.png', 'admin/images/customer/pics1/Buy-A-Home.png', 'image/png', 'h4.jpg', 'admin/images/customer/pics2/h4.jpg', 'image/jpeg', 'l1.jpg', 'admin/images/customer/pics3/l1.jpg', 'image/jpeg', '2018-12-31 17:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `publish_land`
--

CREATE TABLE IF NOT EXISTS `publish_land` (
  `land_id` int(11) NOT NULL AUTO_INCREMENT,
  `land_title` varchar(250) NOT NULL,
  `land_size` varchar(250) NOT NULL,
  `land_perches` varchar(250) NOT NULL,
  `land_desc` varchar(800) NOT NULL,
  `land_price` double(100,2) NOT NULL,
  `land_address` varchar(500) NOT NULL,
  `land_location` varchar(250) NOT NULL,
  `land_city` varchar(250) NOT NULL,
  `land_contact` int(11) NOT NULL,
  `land_state` varchar(250) NOT NULL,
  `electricity` varchar(500) NOT NULL,
  `tap_water` varchar(500) NOT NULL,
  `wide_road` varchar(500) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `image_path` varchar(800) NOT NULL,
  `image_type` varchar(500) NOT NULL,
  `image_name1` varchar(500) NOT NULL,
  `image_path1` varchar(800) NOT NULL,
  `image_type1` varchar(500) NOT NULL,
  `image_name2` varchar(500) NOT NULL,
  `image_path2` varchar(800) NOT NULL,
  `image_type2` varchar(500) NOT NULL,
  `image_name3` varchar(500) NOT NULL,
  `image_path3` varchar(800) NOT NULL,
  `image_type3` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`land_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `publish_land`
--

INSERT INTO `publish_land` (`land_id`, `land_title`, `land_size`, `land_perches`, `land_desc`, `land_price`, `land_address`, `land_location`, `land_city`, `land_contact`, `land_state`, `electricity`, `tap_water`, `wide_road`, `image_name`, `image_path`, `image_type`, `image_name1`, `image_path1`, `image_type1`, `image_name2`, `image_path2`, `image_type2`, `image_name3`, `image_path3`, `image_type3`, `date`) VALUES
(2, 'Land for Sale', '23', 'perches', 'Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice Hi this is very nice ', 15605452.00, 'Boundary road Batticaloa', 'Batticaloa', 'Batticaloa', 775919413, 'Available', 'Available', 'Available', '200 m', 'image_3.jpg', 'admin/images/customer/land/pics/image_3.jpg', 'image/jpeg', 'l3.png', 'admin/images/customer/land/pics1/l3.png', 'image/png', 'l1.jpg', 'admin/images/customer/land/pics2/l1.jpg', 'image/jpeg', 'EgmondAanZeeDunes02.jpg', 'admin/images/customer/land/pics3/EgmondAanZeeDunes02.jpg', 'image/jpeg', '2018-08-08 21:35:25'),
(3, '', '', 'perches', '', 0.00, '', 'Colombo', '', 0, 'Available', 'Available', 'Available', '100 m', 'web 1.jpg', 'admin/images/customer/land/pics/web 1.jpg', 'image/jpeg', '', 'admin/images/customer/land/pics1/', '', '', 'admin/images/customer/land/pics2/', '', '', 'admin/images/customer/land/pics3/', '', '2018-12-18 18:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--

