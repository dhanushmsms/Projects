-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2022 at 04:37 AM
-- Server version: 5.7.18-log
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
-- Database: `manugrocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
CREATE TABLE IF NOT EXISTS `buy` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_date` date NOT NULL,
  `pids` text NOT NULL,
  `total_amount` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`purchase_id`, `purchase_date`, `pids`, `total_amount`, `profit`) VALUES
(1, '2012-11-02', '2,5,11', 6250, 850),
(2, '2012-11-02', '2,5,11,8', 7250, 950),
(3, '2012-11-02', '8,5,1', 46120, 5120),
(4, '2012-11-02', '8,1', 2200, 300),
(5, '2012-11-02', '1', 1200, 200),
(6, '2012-11-02', '1,10,5', 123700, 12700),
(7, '2012-11-02', '1,1', 12000, 2000),
(8, '2012-11-02', '14', 1575, 175),
(9, '2012-11-03', '14,13', 350, 38),
(10, '2012-11-03', '13', 125, 13),
(11, '2012-11-03', '18', 22, 6),
(12, '2012-11-03', '13,19', 1275, 135),
(13, '2012-11-03', '14,21', 2205, 35),
(14, '2012-11-03', '41', 629, 90),
(15, '2012-11-03', '39,21,25', 467, 114),
(16, '2012-11-03', '19', 10, 2),
(17, '2012-11-03', '17,25', 620, 100),
(18, '2012-11-03', '23,16', 999, 209),
(19, '2012-11-03', '26,16', 2300, 550),
(20, '2012-11-03', '16,29', 33169, 2346),
(21, '2012-11-03', '19', 50, 10),
(22, '2012-11-03', '16', 355, 130),
(23, '2012-11-10', '15,22', 520, 140),
(24, '2012-11-10', '16', 128, 38),
(25, '2012-11-10', '15', 420, 120),
(26, '2012-11-10', '23', 200, 30),
(27, '2012-11-12', '21', 180, 10),
(28, '2012-11-12', '22,29', 32939, 2261),
(29, '2012-11-14', '16,19', 684, 194),
(30, '2013-02-11', '15,22', 604, 164),
(31, '2013-03-01', '24', 100, 20),
(32, '2013-04-13', '15', 42, 12),
(33, '2013-04-13', '13', 375, -81),
(34, '2013-04-22', '34', 2198, 444),
(35, '2021-03-31', '51', 2000, -6200),
(36, '2021-03-31', '13', 250, 22),
(37, '2021-03-31', '51,52,47,35', 158648, -69990),
(38, '2021-03-31', '52', 120350, -140650),
(39, '2021-03-31', '25', 1350, 189),
(40, '2021-03-31', '47', 10235000, -979000),
(41, '2021-03-31', '51,52,39', 7948, -13852),
(42, '2022-01-21', '13', 1500, 132),
(43, '2022-01-21', '13', 125, 11),
(44, '2022-01-21', '13', 125, 11),
(45, '2022-01-21', '13', 125, 11),
(46, '2022-01-22', '13', 1500, 132);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `cjoin_date` date NOT NULL,
  `cmoney_spent` int(11) NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `cmoney_spent_reset` int(5) NOT NULL,
  `cphone` int(12) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `cphone` (`cphone`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `first_name`, `last_name`, `cjoin_date`, `cmoney_spent`, `caddress`, `cmoney_spent_reset`, `cphone`) VALUES
(1, 'James', 'Doe', '2016-03-04', 10431585, '1995  Carriage Lane', 0, 145554780),
(2, 'Gregory', 'Lamont', '2017-06-01', 100, '1204  Cabell Avenue', 0, 974544520),
(3, 'Ian', 'McKenzie', '2013-07-11', 34243, '2346  Peck Court', 0, 124577780);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `first_name` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salary` int(8) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `uid` int(11) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`first_name`, `id`, `salary`, `phone_number`, `address`, `uid`, `dob`) VALUES
('Owner', 1, 50000, 99999999, 'H.no12, Example Nagar', 78945, '1992-10-01'),
('Hayward', 2, 50000, 99994444, 'L-502', 11, '1992-12-11'),
('Deborah', 11, 25000, 44889922, 'House #39, Gandhi Nagar, Hyderabad', 22889, '1992-04-02'),
('Harry', 19, 35000, 984545441, 'Blecker St', 69, '1992-10-15'),
('xxdxd', 20, 68, 8787, '777hv', 56, '2011-04-09'),
('dfx', 21, 456, 5655676, 'vhvhgvh', 45, '2017-09-09'),
('awa', 22, 12, 2545, 'wawa', 1, '2017-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `id`, `admin`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1, 2),
('pramodh', '1952a01898073d1e561b9b4f2e42cbd7', 2, 1),
('christine', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 1),
('sam', '5f4dcc3b5aa765d61d8327deb882cf99', 7, 0),
('steeve', '5f4dcc3b5aa765d61d8327deb882cf99', 8, 1),
('bruno', '5f4dcc3b5aa765d61d8327deb882cf99', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `cost_price` int(7) NOT NULL,
  `supplier_id` int(6) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `market_price` int(7) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cost_price`, `supplier_id`, `product_name`, `quantity`, `market_price`) VALUES
(13, 125, 5, 'Dexter', 371, 114),
(16, 71, 15, 'Pride and Prejudice', 48, 45),
(21, 20, 15, 'Five Point Someone', 79, 17),
(23, 20, 15, 'Gulliver\'s Travels', 20, 17),
(25, 50, 5, 'Game of Thrones', 1, 43),
(31, 450, 13, 'GuBurn Toaster TT390', 7, 377),
(33, 399, 13, 'Kunchua Electric Iro', 30, 279),
(34, 1099, 13, 'LG Rice Cooker  RC48', 8, 877),
(35, 6500, 16, 'Nike Jacket JK3390R', 14, 12000),
(37, 599, 16, 'Levis Jeans RF390F34', 4, 430),
(39, 399, 16, 'Reebok Track RT101B3', 1, 250),
(40, 659, 16, 'Levis Jeans SF30B34', 7, 499),
(47, 115000, 13, 'Apple iphone X', 10, 126000),
(48, 450, 5, 'Harry Potter', 100, 500),
(51, 1000, 17, 'Long Hoodie', 40, 4100),
(52, 4150, 17, 'DemoProduct', 29, 9000),
(53, 10, 5, 'df', 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `sdealer` varchar(20) NOT NULL,
  `semail` varchar(40) NOT NULL,
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `saddress` varchar(50) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sphone` int(12) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sphone` (`sphone`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sdealer`, `semail`, `sid`, `saddress`, `sname`, `sphone`) VALUES
('Gordon Food Service', 'gorderlf00ds@gmail.com', 5, 'Wyoming, MI', 'John Smith', 145557850),
('Siysco Corp', 'macvoy@sisyco.com', 11, 'Houston, TX', 'Jame Macvoy', 786969696),
('Keyheey Distributors', 'moorestep@fail.com', 13, 'Naperville, IL', 'Stephen Moore', 2147483647),
('Reynhert Services', 'clancy69@gmail.com', 15, 'Chicago, IL', 'Tommy Clancy', 1796969690),
('MC Factory Outlet', 'mcfact@gmail.com', 16, 'Rosemont, IL', 'Thomas Eddie', 258785452),
('Bowerr Suppliers', 'martin@supp.com', 17, 'Hope Street', 'Martin Bowerr', 2267);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `p_name` varchar(40) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
