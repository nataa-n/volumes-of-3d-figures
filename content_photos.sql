-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 05:44 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.6.32-1+0~20171027135529.7+stretch~1.gbpd60169

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itelit_host2776`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_photos`
--

CREATE TABLE `content_photos` (
  `id` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_photos`
--

INSERT INTO `content_photos` (`id`, `photo`) VALUES
(1, 'http://host514.itelit.pro/3d/images/sphere.png'),
(2, 'http://host514.itelit.pro/3d/images/cube.png'),
(3, 'http://host514.itelit.pro/3d/images/cylinder.png'),
(4, 'http://host514.itelit.pro/3d/images/cone.png'),
(5, 'http://host514.itelit.pro/3d/images/capsule.png'),
(6, 'http://host514.itelit.pro/3d/images/torus.png'),
(7, 'http://host514.itelit.pro/3d/images/cone segment.png'),
(8, 'http://host514.itelit.pro/3d/images/icosahedron.png'),
(9, 'http://host514.itelit.pro/3d/images/hollow cylinder.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
