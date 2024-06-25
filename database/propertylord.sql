-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2024 at 12:49 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propertylord`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) DEFAULT NULL,
  `pass` varchar(55) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `contact`) VALUES
(1, 'admin@gmail.com', 'Nepali1234', '9860344430'),
(2, 'suresh@gmail.com', 'nepali1234', '9860432234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`) VALUES
(1, 'land'),
(2, 'office space'),
(3, 'room'),
(4, 'house'),
(5, 'apartment');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `clientid` int(11) DEFAULT NULL,
  `message` varchar(10000) NOT NULL,
  `propertyid` int(11) DEFAULT NULL,
  `ownerid` int(11) DEFAULT NULL,
  `title` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `publishdate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=8043 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `description`, `location`, `userid`, `area`, `price`, `purpose`, `category`, `publishdate`) VALUES
(3775, 'Room for renting', 'This room is very nice and good for the person who is single . and have offerdable price.', 'sanepa', 4, 200, 5000, 'sell', 'room', '06/25/2024 08:32:44 am'),
(8042, 'This land is for sale', 'This land is very good for building house', 'gathhaghar', 4, 2000, 2000000, 'rent', 'land', '06/25/2024 08:34:11 am'),
(6319, 'apartment for rent', 'This is fully furnished 3BHK apartment .', 'bhaisepati', 2, 100, 150000, 'sell', 'apartment', '06/25/2024 09:12:59 am');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
CREATE TABLE IF NOT EXISTS `uploads` (
  `propertyid` int(11) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  KEY `propertyid` (`propertyid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`propertyid`, `imagepath`, `userid`) VALUES
(3775, 'uploads/room1.jpeg', 4),
(8042, 'uploads/land1.jpeg', 4),
(6319, 'uploads/apartment3.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `firstname`, `lastname`, `email`, `contact`, `password`) VALUES
(1, 'rahul', 'adhikari', 'rahuladhi@gmail.com', '9856458745', 'rahul1234'),
(2, 'sangita', 'chhetri', 'sangitachhetri@gmail.com', '9856421546', 'sangita1234'),
(3, 'ramesh', 'shrestha', 'rameshstha@gmail.com', '9874562314', 'ramesh1234'),
(4, 'rajkumar', 'gurung', 'rajkumar@gmail.com', '9845674587', 'rajkumar1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
