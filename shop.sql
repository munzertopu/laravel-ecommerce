-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 01:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyingpricehistory`
--

CREATE TABLE `buyingpricehistory` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `buying_price` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `empid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyingpricehistory`
--

INSERT INTO `buyingpricehistory` (`id`, `productid`, `buying_price`, `date_time`, `quantity`, `empid`) VALUES
(1, 1, 10, '2017-11-16 02:12:47', 10, 1),
(2, 1, 100, '2017-11-16 02:13:22', 777, 1),
(3, 23, 100, '2017-11-16 02:14:20', 777, 1),
(4, 24, 100, '2017-11-16 02:14:31', 777, 1),
(5, 25, 100, '2017-11-16 02:16:36', 777, 1),
(6, 26, 10, '2017-11-16 02:17:09', 10, 1),
(7, 28, 500, '2018-04-23 06:06:35', 10, 1),
(8, 30, 30000, '2018-04-23 18:36:09', 5, 1),
(9, 31, 500, '2018-04-24 04:55:11', 10, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `buyingpricehistoryall`
-- (See below for the actual view)
--
CREATE TABLE `buyingpricehistoryall` (
`id` int(11)
,`name` varchar(40)
,`buying_price` int(11)
,`selling_price` int(11)
,`quantity` int(11)
,`statusid` int(11)
,`description` text
,`subcatagoryid` int(11)
,`image` text
,`catagoryid` int(11)
,`catagory_name` varchar(40)
,`subcategory_name` varchar(40)
,`status` varchar(21)
,`brought_price` int(11)
,`date_time` datetime
,`quantitybuy` int(11)
,`empid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customerid`, `productid`, `quantity`, `datetime`) VALUES
(32, 5, 1, '2018-04-24 04:39:17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `cartproduct`
-- (See below for the actual view)
--
CREATE TABLE `cartproduct` (
`id` int(11)
,`name` varchar(40)
,`buying_price` int(11)
,`selling_price` int(11)
,`quantity` int(11)
,`statusid` int(11)
,`description` text
,`subcatagoryid` int(11)
,`customerid` int(11)
,`cartquantity` int(11)
,`price` bigint(21)
,`datetime` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `desccription` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `desccription`) VALUES
(1, 'Mobile Phone', ''),
(2, 'Computer', ''),
(3, 'Camera', 'good'),
(4, 'Gadgets', 'oka');

-- --------------------------------------------------------

--
-- Stand-in structure for view `catagory_subcatagory`
-- (See below for the actual view)
--
CREATE TABLE `catagory_subcatagory` (
`catagory_id` int(11)
,`catagory_name` varchar(40)
,`catagory_description` varchar(40)
,`subcategory_id` int(11)
,`subcatagory_name` varchar(40)
,`subcategory_description` varchar(256)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cat_sub`
-- (See below for the actual view)
--
CREATE TABLE `cat_sub` (
`subcategory_id` int(11)
,`catagory_id` int(11)
,`cat_sub` varchar(84)
);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `loginid` int(11) NOT NULL,
  `join_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `phone`, `loginid`, `join_date`) VALUES
(1, 'Liton', 'abdullah@gmail.com', 'Nikunja2, Khilkhet', '1838587150', 10, '2017-11-12 23:33:14'),
(2, 'Tushar', 'tushar@aiub.edu', 'Nikunja', '01902995064', 21, '2017-11-17 02:08:43'),
(3, 'user name', 'user@mail.com', 'Banani', '012345678901', 31, '2018-04-24 02:10:35'),
(4, 'Munzer Topu', 'munzertopu@gmail.com', 'Adabor', '01745476473', 32, '2018-04-24 03:41:29'),
(6, 'abother', 'another@mail.com', 'asdfas', '23131115515', 34, '2018-04-24 03:57:59'),
(7, 'M E Jakareya', 'me.jakareya@gmail.com', 'Nikunja', '016478946213', 35, '2018-04-24 03:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `loginid` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `join_date` date NOT NULL,
  `joined_by_id` int(11) NOT NULL,
  `last_modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `address`, `phone`, `loginid`, `birth_date`, `join_date`, `joined_by_id`, `last_modified`) VALUES
(6, 'admin', '124', '1', '11', 1, '1998-12-31', '1998-12-31', 6, '1998-12-31'),
(7, 'aaa', 'abdullah@gmail.com', 'aaaaaaa', 'aa', 6, '2017-11-06', '2017-11-13', 7, '2017-11-13'),
(8, 'a', 'a', 'a', '1', 7, '2015-06-03', '2017-11-15', 6, '2017-11-15'),
(9, 'liton', 's', 'k', '1', 22, '2017-12-31', '2017-11-19', 1, '2017-11-19'),
(12, 'test', 'test@mail.com', 'golir mor', '01459754800', 30, '2018-04-04', '2018-04-24', 1, '2018-04-24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employeeall`
-- (See below for the actual view)
--
CREATE TABLE `employeeall` (
`id` int(11)
,`name` varchar(11)
,`email` varchar(40)
,`address` varchar(40)
,`phone` varchar(50)
,`loginid` int(11)
,`birth_date` date
,`join_date` date
,`joined_by_id` int(11)
,`last_modified` date
,`type` varchar(21)
,`joined_by_name` varchar(11)
,`status` varchar(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `empid`, `customerid`, `datetime`, `price`, `status`) VALUES
(18, 7, 21, '2017-11-19 04:03:22', 16000, 'DELIVERED'),
(19, 1, 10, '2017-11-19 04:48:24', 524, 'DELIVERED'),
(20, 7, 10, '2017-11-19 05:14:32', 530, 'CANCELLED'),
(32, 1, 10, '2018-04-23 03:27:10', 7510, 'DELIVERED'),
(33, 1, 10, '2018-04-23 03:39:32', 8010, 'DELIVERED'),
(34, 1, 10, '2018-04-23 05:24:45', 5510, 'DELIVERED'),
(35, 1, 10, '2018-04-23 05:28:11', 1000, 'CANCELLED'),
(36, 1, 10, '2018-04-23 15:43:03', 7500, 'DELIVERED'),
(37, 22, 10, '2018-04-23 19:25:21', 11870, 'DELIVERED'),
(38, 1, 35, '2018-04-24 04:00:50', 7500, 'DELIVERED');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoiceall`
-- (See below for the actual view)
--
CREATE TABLE `invoiceall` (
`id` int(11)
,`empid` int(11)
,`customerid` int(11)
,`datetime` datetime
,`price` int(11)
,`status` varchar(40)
,`employeename` varchar(11)
,`customername` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoiceorder`
-- (See below for the actual view)
--
CREATE TABLE `invoiceorder` (
`id` int(11)
,`productid` int(11)
,`quantity` int(11)
,`price` int(11)
,`total_price` int(11)
,`invoiceid` int(11)
,`empid` int(11)
,`customerid` int(11)
,`datetime` datetime
,`totalprice` int(11)
,`status` varchar(40)
,`employeename` varchar(11)
,`customername` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `type` varchar(21) NOT NULL,
  `password` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `statusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `type`, `password`, `username`, `statusid`) VALUES
(1, 'ADMIN', 'admin', 'admin', 1),
(6, 'ADMIN', 'aaaa', 'aaa', 1),
(7, 'ADMIN', 's', 's', 1),
(10, 'CUSTOMER', 'c', 'c', 1),
(11, 'CUSTOMER', 'abd', 'abd', 1),
(21, 'CUSTOMER', 'x', 'x', 1),
(22, 'ADMIN', 'liton', 'liton', 4),
(30, 'ADMIN', 'test', 'test', 4),
(31, 'CUSTOMER', 'user', 'user', 1),
(32, 'CUSTOMER', '1234', 'munzertopu', 1),
(34, 'CUSTOMER', 'another', 'another', 1),
(35, 'CUSTOMER', '1234', 'porosh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `statusid` int(11) NOT NULL,
  `datetime_start` datetime NOT NULL,
  `datetime_end` datetime NOT NULL,
  `packageid` int(11) NOT NULL,
  `empid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer_buyget`
--

CREATE TABLE `offer_buyget` (
  `id` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `producid` int(11) NOT NULL,
  `num_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `invoiceid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `productid`, `quantity`, `price`, `total_price`, `invoiceid`) VALUES
(1, 15, 50, 7500, 7500, 4),
(2, 4, 10, 1, 4, 4),
(3, 1, 175, 500, 2000, 4),
(4, 1, 175, 500, 8500, 5),
(5, 4, 10, 1, 1, 5),
(6, 1, 175, 500, 8500, 6),
(7, 1, 175, 500, 8500, 7),
(8, 4, 10, 1, 1, 7),
(9, 1, 17, 500, 8500, 8),
(10, 4, 1, 1, 1, 8),
(11, 1, 17, 500, 8500, 9),
(12, 4, 1, 1, 1, 9),
(13, 1, 17, 500, 8500, 10),
(14, 4, 1, 1, 1, 10),
(15, 1, 17, 500, 8500, 11),
(16, 4, 1, 1, 1, 11),
(17, 1, 17, 500, 8500, 12),
(18, 4, 1, 1, 1, 12),
(19, 1, 17, 500, 8500, 13),
(20, 4, 1, 1, 1, 13),
(21, 1, 17, 500, 8500, 14),
(22, 4, 1, 1, 1, 14),
(23, 1, 17, 500, 8500, 15),
(24, 4, 1, 1, 1, 15),
(25, 1, 1, 500, 500, 16),
(26, 4, 1, 1, 1, 16),
(27, 16, 1, 10, 10, 16),
(28, 15, 2, 7500, 15000, 16),
(29, 4, 2, 1, 2, 17),
(30, 15, 2, 7500, 15000, 17),
(31, 16, 2, 10, 20, 17),
(32, 1, 2, 500, 1000, 17),
(33, 1, 2, 500, 1000, 18),
(34, 15, 2, 7500, 15000, 18),
(35, 4, 4, 1, 4, 19),
(36, 1, 1, 500, 500, 19),
(37, 16, 1, 10, 10, 19),
(38, 17, 1, 10, 10, 19),
(39, 1, 1, 500, 500, 20),
(40, 16, 1, 10, 10, 20),
(41, 19, 1, 10, 10, 20),
(42, 21, 1, 10, 10, 20),
(43, 3, 1, 5500, 5500, 21),
(44, 21, 8, 10, 80, 21),
(45, 1, 47, 500, 23500, 21),
(61, 15, 1, 7500, 7500, 32),
(62, 15, 1, 7500, 7500, 33),
(63, 16, 1, 10, 10, 33),
(64, 1, 1, 500, 500, 33),
(65, 3, 1, 5500, 5500, 34),
(66, 21, 1, 10, 10, 34),
(67, 1, 2, 500, 1000, 35),
(68, 2, 1, 7500, 7500, 36),
(69, 15, 1, 1270, 1270, 37),
(70, 26, 1, 10600, 10600, 37),
(71, 2, 1, 7500, 7500, 38);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `buying_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `statusid` int(11) NOT NULL,
  `description` text NOT NULL,
  `subcatagoryid` int(11) NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `buying_price`, `selling_price`, `quantity`, `statusid`, `description`, `subcatagoryid`, `image`) VALUES
(1, 'Redmi 4x 2/16 GB', 10500, 11000, 85, 4, 'Good', 1, '1.jpg'),
(2, 'Redmi 4x 3/32 GB', 12500, 13000, 98, 4, 'Best', 1, '2.jpg'),
(3, 'Redmi 5A 2/16 GB', 9200, 9500, 35, 4, 'Good', 1, '3.jpg'),
(4, 'Mi A1 4/32 GB', 17000, 17500, 87, 4, '1', 1, '4.jpg'),
(5, 'Mi Note 3', 25000, 27000, 20, 4, 'oka', 1, '5.jpg'),
(6, 'Mi 6', 34000, 36000, 10, 4, 'The Mi 6 is a performance beast powered by the lightning-fast Snapdragon 835 and a startling 6GB RAM.', 1, '6.jpg'),
(7, 'Mi 5X 4/32 GB', 17500, 18000, 111, 4, 'a', 1, ''),
(8, 'Samsung J7 Pro 3/32', 21500, 22000, 10, 4, 'oka', 1, ''),
(9, 'Samsung A7 2017', 29000, 30000, 10, 4, 'oka', 1, ''),
(10, 'Iphone X 64GB', 94000, 95000, 10, 4, 'oka', 1, ''),
(11, 'Iphone 7+ 128GB', 73000, 74000, 10, 4, 'oka', 1, ''),
(12, 'Iphone 8+ 256GB', 86500, 87500, 10, 4, 'oka', 1, ''),
(13, 'Honor 8 4/32', 28000, 29000, 12, 4, '12', 1, ''),
(14, 'Huawei Y9 2018', 18700, 19500, 20, 4, '20', 1, ''),
(15, 'LAVA Captain K7', 1100, 1270, 37, 4, 'Great', 2, ''),
(16, 'LAVA KKT05', 950, 1050, 4, 4, '10', 2, '16.JPG'),
(17, 'Linnex LE27', 950, 1050, 9, 4, '10', 2, ''),
(18, 'LINNEX LE25', 1100, 1230, 10, 4, '10', 2, ''),
(19, 'Maximus A13', 600, 700, 7, 4, '10', 2, ''),
(20, 'Maximus M20', 800, 900, 10, 4, '10', 2, ''),
(21, 'ASUS FX553VD-7300HQ Core i5 7th Gen', 79000, 10, 0, 4, '10', 3, ''),
(22, 'Asus X441UA-6006U Core i3 6th Gen', 30000, 101, 777, 4, '10', 3, ''),
(23, 'Dell Inspiron 3467 7th Gen Core i3', 34000, 101, 777, 4, '10', 3, ''),
(24, 'Asus Celeron Dual core Netbook', 21000, 101, 777, 4, '10', 4, ''),
(25, 'Asus BM1AD Intel Core i5-4590', 43000, 101, 777, 4, '10', 5, ''),
(26, 'Huawei Nova 2i', 10000, 10600, 12, 4, 'oka', 1, '26.jpg'),
(28, 'Something', 500, 700, 10, 4, 'Good', 7, ''),
(29, 'GoPro HERO6 Black', 47000, 49000, 10, 4, '4K Ultra HD Action Sports Camera', 7, '29.jpg'),
(30, 'Canon EOS 1300D', 30000, 32000, 5, 4, 'Digital SLR Camera Body with EF-S 18-55mm Lens', 6, '30.jpg'),
(31, 'JBL Earphone', 500, 700, 10, 4, 'High Quality', 8, '31.jpeg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_all`
-- (See below for the actual view)
--
CREATE TABLE `product_all` (
`id` int(11)
,`name` varchar(40)
,`buying_price` int(11)
,`selling_price` int(11)
,`quantity` int(11)
,`statusid` int(11)
,`description` text
,`subcatagoryid` int(11)
,`image` text
,`catagoryid` int(11)
,`catagory_name` varchar(40)
,`subcatagory_name` varchar(40)
,`status` varchar(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(21) NOT NULL,
  `description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `description`) VALUES
(1, 'ACTIVE', ''),
(2, 'INACTIVE', ''),
(3, 'SUSPEND', ''),
(4, 'INSTOCK', ''),
(5, 'OUT_OF_STOCK', ''),
(6, 'PROCESSING', ''),
(7, 'DELIVERED', ''),
(8, 'CANCELLED', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(256) NOT NULL,
  `catagoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `description`, `catagoryid`) VALUES
(1, 'Smart Phone', '', 1),
(2, 'Feature Phone', '', 1),
(3, 'Laptop', '', 2),
(4, 'Notebook', '', 2),
(5, 'PC', '', 2),
(6, 'DSLR', '', 3),
(7, 'Action Camera', '', 3),
(8, 'Headphone', '', 4),
(9, 'Smart Watch', '', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_customer_invoice`
-- (See below for the actual view)
--
CREATE TABLE `view_customer_invoice` (
`id` int(11)
,`empid` int(11)
,`customerid` int(11)
,`datetime` datetime
,`price` int(11)
,`status` varchar(40)
,`name` varchar(100)
,`address` varchar(100)
,`email` varchar(100)
,`phone` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`customerid`, `productid`, `datetime`) VALUES
(21, 5, '2017-11-17 18:23:24'),
(21, 2, '2017-11-18 00:02:37'),
(21, 19, '2017-11-01 00:00:04'),
(10, 26, '2018-04-24 01:04:17'),
(35, 2, '2018-04-24 04:00:00'),
(32, 3, '2018-04-24 04:47:41'),
(32, 8, '2018-04-24 04:47:47');

-- --------------------------------------------------------

--
-- Stand-in structure for view `wishlistproduct`
-- (See below for the actual view)
--
CREATE TABLE `wishlistproduct` (
`id` int(11)
,`name` varchar(40)
,`buying_price` int(11)
,`selling_price` int(11)
,`quantity` int(11)
,`statusid` int(11)
,`description` text
,`catagoryid` int(11)
,`subcatagoryid` int(11)
,`catagory_name` varchar(40)
,`subcatagory_name` varchar(40)
,`status` varchar(21)
,`customerid` int(11)
,`productid` int(11)
,`datetime` datetime
,`image` text
);

-- --------------------------------------------------------

--
-- Structure for view `buyingpricehistoryall`
--
DROP TABLE IF EXISTS `buyingpricehistoryall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `buyingpricehistoryall`  AS  select `product`.`id` AS `id`,`product`.`name` AS `name`,`product`.`buying_price` AS `buying_price`,`product`.`selling_price` AS `selling_price`,`product`.`quantity` AS `quantity`,`product`.`statusid` AS `statusid`,`product`.`description` AS `description`,`product`.`subcatagoryid` AS `subcatagoryid`,`product`.`image` AS `image`,`catagory`.`id` AS `catagoryid`,`catagory`.`name` AS `catagory_name`,`subcategory`.`name` AS `subcategory_name`,`status`.`status` AS `status`,`buyingpricehistory`.`buying_price` AS `brought_price`,`buyingpricehistory`.`date_time` AS `date_time`,`buyingpricehistory`.`quantity` AS `quantitybuy`,`buyingpricehistory`.`empid` AS `empid` from ((((`product` join `catagory`) join `subcategory`) join `status`) join `buyingpricehistory`) where ((`product`.`subcatagoryid` = `subcategory`.`id`) and (`subcategory`.`catagoryid` = `catagory`.`id`) and (`product`.`statusid` = `status`.`id`) and (`product`.`id` = `buyingpricehistory`.`productid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `cartproduct`
--
DROP TABLE IF EXISTS `cartproduct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cartproduct`  AS  select `p`.`id` AS `id`,`p`.`name` AS `name`,`p`.`buying_price` AS `buying_price`,`p`.`selling_price` AS `selling_price`,`p`.`quantity` AS `quantity`,`p`.`statusid` AS `statusid`,`p`.`description` AS `description`,`p`.`subcatagoryid` AS `subcatagoryid`,`c`.`customerid` AS `customerid`,`c`.`quantity` AS `cartquantity`,(`p`.`selling_price` * `c`.`quantity`) AS `price`,`c`.`datetime` AS `datetime` from (`product` `p` join `cart` `c`) where (`p`.`id` = `c`.`productid`) ;

-- --------------------------------------------------------

--
-- Structure for view `catagory_subcatagory`
--
DROP TABLE IF EXISTS `catagory_subcatagory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `catagory_subcatagory`  AS  select `c`.`id` AS `catagory_id`,`c`.`name` AS `catagory_name`,`c`.`desccription` AS `catagory_description`,`s`.`id` AS `subcategory_id`,`s`.`name` AS `subcatagory_name`,`s`.`description` AS `subcategory_description` from (`catagory` `c` join `subcategory` `s`) where (`c`.`id` = `s`.`catagoryid`) ;

-- --------------------------------------------------------

--
-- Structure for view `cat_sub`
--
DROP TABLE IF EXISTS `cat_sub`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cat_sub`  AS  select `catagory_subcatagory`.`subcategory_id` AS `subcategory_id`,`catagory_subcatagory`.`catagory_id` AS `catagory_id`,concat(`catagory_subcatagory`.`catagory_name`,' >> ',`catagory_subcatagory`.`subcatagory_name`) AS `cat_sub` from `catagory_subcatagory` ;

-- --------------------------------------------------------

--
-- Structure for view `employeeall`
--
DROP TABLE IF EXISTS `employeeall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employeeall`  AS  select `p`.`id` AS `id`,`p`.`name` AS `name`,`p`.`email` AS `email`,`p`.`address` AS `address`,`p`.`phone` AS `phone`,`p`.`loginid` AS `loginid`,`p`.`birth_date` AS `birth_date`,`p`.`join_date` AS `join_date`,`p`.`joined_by_id` AS `joined_by_id`,`p`.`last_modified` AS `last_modified`,`l`.`type` AS `type`,`c`.`name` AS `joined_by_name`,`s`.`status` AS `status` from (((`employee` `p` join `login` `l`) join `employee` `c`) join `status` `s`) where ((`p`.`loginid` = `l`.`id`) and (`p`.`id` = `c`.`joined_by_id`) and (`l`.`statusid` = `s`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `invoiceall`
--
DROP TABLE IF EXISTS `invoiceall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoiceall`  AS  select `p`.`id` AS `id`,`p`.`empid` AS `empid`,`p`.`customerid` AS `customerid`,`p`.`datetime` AS `datetime`,`p`.`price` AS `price`,`p`.`status` AS `status`,`e`.`name` AS `employeename`,`c`.`name` AS `customername` from ((`invoice` `p` join `employee` `e`) join `customer` `c`) where ((`p`.`empid` = `e`.`id`) and (`p`.`customerid` = `c`.`loginid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `invoiceorder`
--
DROP TABLE IF EXISTS `invoiceorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoiceorder`  AS  select `a`.`id` AS `id`,`a`.`productid` AS `productid`,`a`.`quantity` AS `quantity`,`a`.`price` AS `price`,`a`.`total_price` AS `total_price`,`a`.`invoiceid` AS `invoiceid`,`c`.`empid` AS `empid`,`c`.`customerid` AS `customerid`,`c`.`datetime` AS `datetime`,`c`.`price` AS `totalprice`,`c`.`status` AS `status`,`c`.`employeename` AS `employeename`,`c`.`customername` AS `customername` from (`orderlist` `a` join `invoiceall` `c`) where (`a`.`invoiceid` = `c`.`id`) ;

-- --------------------------------------------------------

--
-- Structure for view `product_all`
--
DROP TABLE IF EXISTS `product_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_all`  AS  select `product`.`id` AS `id`,`product`.`name` AS `name`,`product`.`buying_price` AS `buying_price`,`product`.`selling_price` AS `selling_price`,`product`.`quantity` AS `quantity`,`product`.`statusid` AS `statusid`,`product`.`description` AS `description`,`product`.`subcatagoryid` AS `subcatagoryid`,`product`.`image` AS `image`,`catagory`.`id` AS `catagoryid`,`catagory`.`name` AS `catagory_name`,`subcategory`.`name` AS `subcatagory_name`,`status`.`status` AS `status` from (((`product` join `catagory`) join `subcategory`) join `status`) where ((`product`.`statusid` = `status`.`id`) and (`product`.`subcatagoryid` = `subcategory`.`id`) and (`subcategory`.`catagoryid` = `catagory`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_customer_invoice`
--
DROP TABLE IF EXISTS `view_customer_invoice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_customer_invoice`  AS  select `invoice`.`id` AS `id`,`invoice`.`empid` AS `empid`,`invoice`.`customerid` AS `customerid`,`invoice`.`datetime` AS `datetime`,`invoice`.`price` AS `price`,`invoice`.`status` AS `status`,`customer`.`name` AS `name`,`customer`.`address` AS `address`,`customer`.`email` AS `email`,`customer`.`phone` AS `phone` from (`invoice` join `customer`) where (`invoice`.`customerid` = `customer`.`loginid`) ;

-- --------------------------------------------------------

--
-- Structure for view `wishlistproduct`
--
DROP TABLE IF EXISTS `wishlistproduct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wishlistproduct`  AS  select `p`.`id` AS `id`,`p`.`name` AS `name`,`p`.`buying_price` AS `buying_price`,`p`.`selling_price` AS `selling_price`,`p`.`quantity` AS `quantity`,`p`.`statusid` AS `statusid`,`p`.`description` AS `description`,`p`.`catagoryid` AS `catagoryid`,`p`.`subcatagoryid` AS `subcatagoryid`,`p`.`catagory_name` AS `catagory_name`,`p`.`subcatagory_name` AS `subcatagory_name`,`p`.`status` AS `status`,`w`.`customerid` AS `customerid`,`w`.`productid` AS `productid`,`w`.`datetime` AS `datetime`,`p`.`image` AS `image` from (`product_all` `p` join `wishlist` `w`) where (`p`.`id` = `w`.`productid`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyingpricehistory`
--
ALTER TABLE `buyingpricehistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_buyget`
--
ALTER TABLE `offer_buyget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyingpricehistory`
--
ALTER TABLE `buyingpricehistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_buyget`
--
ALTER TABLE `offer_buyget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
