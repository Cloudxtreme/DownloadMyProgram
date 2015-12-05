-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 02:16 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `website_name` text NOT NULL,
  `website_description` text NOT NULL,
  `home_page_text` longtext NOT NULL,
  `download_page_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`website_name`, `website_description`, `home_page_text`, `download_page_text`) VALUES
('DownloadMyProgram', 'DownloadMyProgram description.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam cumque expedita, non ratione quos reprehenderit adipisci ipsum asperiores, illo molestiae iusto consequuntur voluptatem delectus modi temporibus repellendus ut error laudantium!</p>\r\n<img src="http://placehold.it/250" alt="test" />', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam cumque expedita, non ratione quos reprehenderit adipisci ipsum asperiores, illo molestiae iusto consequuntur voluptatem delectus modi temporibus repellendus ut error laudantium!</p>\r\n<img src="http://placehold.it/250" alt="test" />');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
