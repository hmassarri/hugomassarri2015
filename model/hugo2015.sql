-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 06, 2015 at 07:01 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hugo2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(100) DEFAULT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  `img_cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_name`, `img_url`, `img_cat`) VALUES
(1, 'que_olor.png', '', 'web'),
(2, 'electrohouse.png', NULL, 'web'),
(3, 'catforce.png', NULL, 'web'),
(4, 'drum_bass.png', NULL, 'web'),
(5, 'spacescapes.png', NULL, 'web'),
(6, 'banner3.png', NULL, 'web'),
(7, 'banner4.png', NULL, 'web'),
(8, 'banner6.png', NULL, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `menu_url` varchar(150) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`, `category`) VALUES
(1, 'Home', 'index.php', 'home'),
(2, 'Digital Art', 'media.php', 'media'),
(3, 'Rutgers SAS Convocation', 'convocation.php', 'web'),
(4, 'IAMDN Rutgers', 'iamdn.php', 'web'),
(5, 'Rutgers Chemistry Building', 'chem.php', 'web'),
(6, 'Institute for Research on Women', 'irw.php', 'web'),
(7, 'Chad Saharic', 'chadsaharic.php', 'web'),
(8, 'WRAM 2013', 'wram.php', 'web'),
(9, 'JUMA Creative', 'juma.php', 'web'),
(10, 'Show-May Heimbuch', 'showmay.php', 'web'),
(11, 'Victor Valentine', 'valentine.php', 'web'),
(12, 'the UNIDENTIFIED.', 'unidentified.php', 'web'),
(13, 'Decadence Hair Design', 'decadence.php', 'web');
