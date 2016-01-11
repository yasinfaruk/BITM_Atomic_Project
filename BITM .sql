-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2016 at 11:11 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `BITM`
--

-- --------------------------------------------------------

--
-- Table structure for table `atomicProject`
--

CREATE TABLE IF NOT EXISTS `atomicProject` (
`id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atomicProject`
--

INSERT INTO `atomicProject` (`id`, `title`) VALUES
(67, 'Gullibar Twist - '),
(68, 'Harry Potter for JK '),
(73, 'Harry '),
(74, 'Loving Word'),
(75, 'Harbinger'),
(76, 'God is small Thing'),
(77, 'Million Dollar Secre'),
(78, 'Titanic'),
(79, 'A Golden Age'),
(80, 'Inside of Happiness'),
(81, 'Harry Potter');

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE IF NOT EXISTS `checkbox` (
`id` int(11) NOT NULL,
  `hobby` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkbox`
--

INSERT INTO `checkbox` (`id`, `hobby`) VALUES
(1, 'Coding,Traveling,Cricket,Music'),
(2, 'Traveling,Watching Movie'),
(3, 'Coding , Cricket');

-- --------------------------------------------------------

--
-- Table structure for table `Date`
--

CREATE TABLE IF NOT EXISTS `Date` (
`id` int(11) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Date`
--

INSERT INTO `Date` (`id`, `birthday`) VALUES
(1, '2015-01-02'),
(2, '2015-01-02'),
(3, '2015-01-02'),
(4, '2015-01-02'),
(5, '2015-01-02'),
(6, '2015-01-02'),
(7, '1899-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(1, 'rahim@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `image`) VALUES
(5, 'vasen.jpg'),
(6, 'download (7).jpg'),
(7, 'download (5).jpg'),
(8, 'realistiska-tavlan.jpg'),
(9, 'yellow-taxi_vvvjao.png'),
(10, 'yellow-taxi_vvvjao.png'),
(11, 'free-breakers.jpg'),
(12, 'download (32).jpg'),
(13, 'download (2).jpg'),
(14, 'download (1).jpg'),
(15, 'download.jpg'),
(16, 'diiamant.jpg'),
(17, 'download (3).jpg'),
(18, 'chrome1.jpg'),
(19, 'chrome1.jpg'),
(20, 'african-sunrise-1359276.jpg'),
(24, 'dreamwalker.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE IF NOT EXISTS `input` (
`id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radio`
--

CREATE TABLE IF NOT EXISTS `radio` (
`id` int(11) NOT NULL,
  `gendar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `select`
--

CREATE TABLE IF NOT EXISTS `select` (
  `id` int(11) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `textarea`
--

CREATE TABLE IF NOT EXISTS `textarea` (
`id` int(11) NOT NULL,
  `summary` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atomicProject`
--
ALTER TABLE `atomicProject`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkbox`
--
ALTER TABLE `checkbox`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Date`
--
ALTER TABLE `Date`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textarea`
--
ALTER TABLE `textarea`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atomicProject`
--
ALTER TABLE `atomicProject`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `checkbox`
--
ALTER TABLE `checkbox`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Date`
--
ALTER TABLE `Date`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `textarea`
--
ALTER TABLE `textarea`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
