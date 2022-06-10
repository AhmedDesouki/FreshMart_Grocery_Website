-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 02:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `address`, `phone_number`, `username`, `password`) VALUES
(22, 'mazen', 'mazen@gmail.com', 'shrouq', '028236232', 'mazen ', 'ad1'),
(33, 'abdallah', 'abdallah@bue.com', 'shrouq', '736232423', 'abdallah', 'abd123'),
(43, 'mariam', 'mariam@gmail.com', 'zag', '545434343', 'mariam', 'maree'),
(44, 'kareem ', 'kareem@gmail.com', 'cairo', '01927324', 'kareem', 'kar'),
(54, 'mohamed', 'moh@gmail.com', 'shrouq', '34354344', 'mohamed', 'mohamed222'),
(55, 'ahmed', 'ahmed@yahoo.com', 'cairo', '324343255', 'ahmed', 'ahmed22'),
(66, 'ameer', 'ameeer@gmail.com', 'cairo', '34346445', 'ameer', 'ame'),
(76, 'sara', 'sara@yahoo.com', 'cairo', '4343435', 'sara', 'sarasara'),
(89, 'shady', 'shady@yahoo.com', 'shrouq', '019273434', 'shady', 'shadyfag'),
(111, 'tarek', 'admin@gmail.com', 'shrouq', '012837443', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'fruit'),
(12, 'dairy '),
(332, 'vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `customername` varchar(30) NOT NULL,
  `customernumber` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `customername`, `customernumber`, `address`, `email`, `description`, `customer_id`) VALUES
(2, 'mostafa', '2323232', 'cairo', 'ahmed79200020@gmail.com', 'adajc cacndacn ', NULL),
(3, 'amin', '45433', 'zag', 'amin@gmail.com', 'alooooo', NULL),
(4, 'amin', '45433', 'zag', 'amin@gmail.com', 'alooooo', NULL),
(5, 'amin', '45433', 'zag', 'amin@gmail.com', 'alooooo', NULL),
(6, 'amin', '45433', 'zag', 'amin@gmail.com', 'alooooo', NULL),
(7, 'ahmed hazem', '826343323', 'zag', 'hazem@gmail.com', 'heloo  dnncddc ', NULL),
(9, 'mazen', '323223', 'cairo', 'mazen@gmail.com', 'dsds dcvdfdcd dcvdcd ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `conf_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `phonenumber`, `address`, `username`, `password`, `conf_password`) VALUES
(1510, 'asser', 'asser@gmail.com', '019273733', 'cairo', 'asser', 'ass', 'ass'),
(2232, 'ahmed', 'ahmed@yahoo.com', '23232332', 'shrouq', 'ahmed', 'www', 'rrr'),
(2507, 'amin', 'amin@gmail.com', '34343344', 'cairo', 'amin', 'amm', 'amm'),
(5002, 'ameer', 'ameer@gmail.com', '8374634533', 'madenty', 'ameer', 'amam', 'amam'),
(5635, 'ammar', 'ammar@gmail.com', '01023456', 'obour', 'ammarrr', '111', '111'),
(9095, 'ahmed hazem', 'hazem@gmail.com', '74634333', 'zag', 'ahazem', 'ahah', 'ahah'),
(47717, 'hazem', 'hazem@bue.com', '0192843', 'cairo', 'hazem', 'hhh', 'hhh'),
(59104, 'kkk', 'ahmed79200020@gmail.com', '2323232', 'cairo', 'kkk', 'mjmj', 'mjmj'),
(77529, 'malek', 'malek@yahoo.com', '0192734433', 'nasr city', 'malek', 'lll', 'lll');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `product_category` varchar(30) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `quantity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `description`, `image`, `product_category`, `category_id`, `quantity`) VALUES
(4, 'pear', '34', 'dadscas fvefe rfrcf fgvfrec ', 'pear', 'fruit', 1, '50'),
(5, 'lemon', '30', 'cdasc fvrdc cvedc cedcxw ', 'lemon', 'vegetables ', 332, '44'),
(7, 'mango', '30', 'de vferfew rfcefce rfcedw efcfw ', 'mango', 'fruit', 1, '54'),
(8, 'apple', '33', 'fdscewd d edvedv fsvsd frvesvs', 'fig', 'vegetables ', 332, '33'),
(9, 'melon', '54', 'dsdcad vergvrsv erfrwsc svcs ', 'melon', 'fruit', 1, '87'),
(14, 'lemon', '43', 'cscs dvedcdce ec vdfedec vevedfec ', 'lemon', 'vegetables ', 332, '87'),
(32, 'fig', '30', 'dsdewd fedcecfef eedecece efede ', 'fig', 'fruit', 1, '54'),
(65, 'fig', '11', 'vdv vd cfdcfdcdcin dcndcdi ', 'mango', 'fruit', 1, '11'),
(55212, 'watermelon', '133', 'ddh dshdnch sdshdnd', '', 'fruit', NULL, '144');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `product_name` varchar(30) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `custid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`product_name`, `total_price`, `cart_id`, `amount`, `product_id`, `custid`) VALUES
('pear', '65', 3, 44, 4, 5635),
('lemon', '54', 4, 65, 5, 1510),
('mango', '43', 5, 47, 7, 47717),
('mango', '443', 6, 76, 7, 77529),
('mango', '54', 10, 65, 7, 9095);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`),
  ADD KEY `customer_comp_fk` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_fk` (`category_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cust_cart_fk` (`custid`),
  ADD KEY `product_cart_fk` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `customer_comp_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `cust_cart_fk` FOREIGN KEY (`custid`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_cart_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
