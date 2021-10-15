-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2021 at 03:21 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donors_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `messages`) VALUES
(1, 'John Harold Ilagan', 'harold@example.com', ''),
(2, 'harold', 'harold@example.com', ''),
(3, 'Rev', 'rev@sample.com', ''),
(4, 'harold', 'harold@example.com', ''),
(5, 'Rev', 'rev@sample.com', ''),
(6, 'John', 'jhan@sample.com', ''),
(7, 'fdf', 'asdfsad', ''),
(8, 'harold', 'harold@example.com', ''),
(9, 'harold', 'dsf', ''),
(10, 'adf', 'asdf', ''),
(11, '3', '2', 'sadfsadfas'),
(12, 'John Harold Ilagan', 'john@gmail.com', 'Need blood type O+'),
(13, 'Jerryme Collado', 'jerryme@gmail.com', 'I need blood type AB+'),
(14, 'Eugene Alvarez', 'alvarez@gmail.com', 'I need blood type B+'),
(15, 'Love Montes', 'monty@gmail.com', 'Need blood type O+'),
(16, 'Mary Rose Gadia', 'mrgadia@gmail.com', 'Need blood type A+'),
(17, 'Gershwin Gavanez', 'ggavanez@gmail.com', 'Need blood type AB+');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bloodType` varchar(4) NOT NULL,
  `age` int(2) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `firstName`, `lastName`, `address`, `bloodType`, `age`, `number`, `email`) VALUES
(31, 'Harold', 'Ilagan', 'Purok 4 Brgy. Tranca, Bay, Laguna', 'A+', 26, 9093653650, 'haroldilagan_911@yahoo.com'),
(33, 'Jeriz', 'Aguilar', 'San Isidro, Bay, Laguna', 'O+', 24, 93742384134, 'jeriz@example.com'),
(34, 'Eugene', 'Alvarez', 'Tagumpay', 'AB+', 22, 9095678670, 'eugene@example.com'),
(35, 'John', 'Collado', 'San Isidro, Bay, Laguna', 'O+', 22, 9098754231, 'john@example.com'),
(36, 'Mack Daryl', 'Aguilar', 'Canlubang, Calamba City', 'A+', 22, 9095678670, 'daryl@example.com'),
(37, 'Bernie', 'Barcillano', 'Tranca Bay Laguna', 'A+', 22, 596252343, 'bernie@sample.com'),
(42, 'Dona', 'Castillo', 'San Rafael Bulacan', 'B+', 22, 231342534654356, 'dona@gmail.com'),
(39, 'Gilbert', 'Monte', 'Puypuy', 'O+', 23, 4245356467654, 'gil@sample.com'),
(50, 'Ariel', 'Natividad', 'Anos, Los Banos, Laguna', 'O-', 25, 342534657687, 'natividad@gmail.com'),
(43, 'Aaron', 'Mendez', 'Santo Tomas, Batangas', 'A+', 22, 897654321, 'aarom@domain.com'),
(44, 'Fatima', 'Penson', 'San Pablo City, San Pablo, Laguna', 'A-', 27, 21436435465987, 'fatima@sample.com'),
(52, 'Ricci', 'Reiven', 'Victoria Laguna', 'A+', 23, 9876543234567, 'reiven@gmail.com'),
(45, 'Jayson', 'Bargola', 'San Antonio, Bay, Laguna', 'AB+', 26, 123124352, 'bargola@gmail.com'),
(46, 'Fatima', 'Penson', 'San Pablo, Laguna', 'A+', 26, 79687543231, 'fati@gmail.com'),
(47, 'Ezra', 'Vegara', 'Batangas City', 'A+', 31, 343253465, 'ezra@gmail.com'),
(48, 'Cloyd', 'Baldonado', 'Calamba Laguna', 'AB+', 21, 213453675, 'cloyd@gmail.com'),
(49, 'Jennivive', 'Baldoza', 'Catanduanes, Albay', 'O+', 27, 1324546768, 'baldoza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(14, 'harry', 'harold@example.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Admin', 'Admin@sample.com', '5f4dcc3b5aa765d61d8327deb882cf99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
