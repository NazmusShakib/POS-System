-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2015 at 11:45 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`) VALUES
(1, 'Dip Dip', 'Dhanmondi', '021574512', '2', 'Hyndai', '2015-11-17', 'OK'),
(2, 'rakib', 'sukrabad', '014456', '500', 'Font Awesome delivers with 20 shiny new icons in version 4.5. ', '2015-11-24', 'This example is a quick exercise to es the responsive CSS and HTML, so it also adapts to your viewport and device.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `gen_name`, `product_name`, `cost`, `o_price`, `price`, `profit`, `supplier`, `onhand_qty`, `qty`, `qty_sold`, `expiry_date`, `date_arrival`) VALUES
(1, 'cocacola', 'fanta', ' beverage', '', '25', '30', '5', '', 0, 52, 100, '', ''),
(2, 'Hyundai', 'Hyundai', '293-hp 3.3L GDI 24-valve DOHC V6 engine        ', '', '34000', '36000', '2000', '', 0, 50, 50, '2015-12-26', '2015-07-16'),
(8, '123', 'yuy', ' ytutyjhg   ', '', '3434', '5656', '2222', 'SupAbir', 0, 133, 145, '', ''),
(12, '5465', 'iouioiu', ' 56577    ', '', '45', '435', '390', 'SupAbir', 0, 491, 595, '2015-11-26', '2015-11-03'),
(13, 'ymhm', 'FZS', ' hondaa  ', '', '122', '123', '1', 'SupAbir', 0, 1, 17, '2015-11-17', '2015-11-08'),
(14, 'Bike', 'Bike1', ' Bike1   ', '', '444', '33', '-411', '', 0, 30, 41, '2015-11-13', '2015-11-24'),
(15, 'bName', 'G Name', ' aulfau l   ', '', '150', '200', '50', 'Suptwo', 0, 0, 31, '2016-02-19', '2015-11-04'),
(16, 'Toyota , Japan', 'Premio G Superior', 'Model : 2010,Registration : 2012,Mileage : 38000, Engine : VVT-I, Serial : 33   ', '', '2150000', '33000000', '30850000', 'Suptwo', 0, 80, 80, '2015-11-24', '2015-11-09'),
(17, 'Toyota, VITZ', 'Vitz 2010', ' Projection HID Light, TV-Navi, Back Camera......', '', '1050000.00', '1250000.00', '200000', 'Suptwo', 0, 21, 21, '2015-11-19', '2015-11-01'),
(18, 'Mitsubishi ', 'Outlander 2013', ' Mitsubishi Outlander 2013 New Shape Black Color , Tv Navigation Back Camera , Push Start.', '', '5850000', '5990000', '140000', '', 0, 67, 0, '2015-12-02', '2015-11-01'),
(19, 'Toyota , Japan', 'LAND CRUISER PRADO TX 2011', ' All auto option, HID Headlamps,Optical meter,asiff ppp ', '', '8500000.00', '9500000.00', '1000000', 'Suptwo', 0, 38, 40, '2015-11-25', '2015-01-14'),
(20, 'as', '12', ' w it''s designed around you, your network, and your professional int', '', '400', '500', '100', 'SupAbir', 0, 36, 0, '2015-11-09', '2015-11-01'),
(21, 'qq1', '122', ' ys Indian ports to make Rs. 6,000 crore profit by 20ys Indian por', '', '800', '1000', '200', 'SupAbir', 0, 50, 50, '2015-11-10', '2015-11-16'),
(23, 'new 45', 'java', ' lkk', '', '50', '60', '10', '', 0, 155, 155, '', '2015-12-17'),
(24, 'new fortee five', 'fjori fice', 'demo textt', '', '10', '80', '70', 'SupAbir', 0, 21, 0, '', ''),
(25, '55', 'dsfasd', ' dfadfsda', '', '35', '44', '9', 'Suptwo', 0, 0, 0, '2015-12-10', '2015-12-07'),
(26, 'aa', 'ss', ' ddd', '', '10', '12', '2', 'SupAbir', 0, 49, 50, '2015-12-18', '2015-12-11'),
(27, 'kk', 'ii', ' oioi', '', '400', '500', '100', 'Suptwo', 0, 80, 80, '', ''),
(28, 'Apple', 'Oragne', ' Its testy', '', 'ami jani na', 'dos taka', '', 'SupAbir', 0, 11, 11, '2015-12-26', '2000-02-03'),
(29, 'bike', 'bajaj', 'fine ', '', '80000.112', '1.123000', '-79999', 'Suptwo', 0, 2, 2, '2014-08-12', '2015-12-24'),
(30, '', 'errt', ' ', '', 'twert', 'zxfcdsfsdfdsfds', '', '', 0, 5, 5, '', ''),
(31, '', 'cfdfg', ' ', '', 'dfsdfs', 'dsfadfs', '', '', 0, 4, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE IF NOT EXISTS `purchases_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(1, 'RS-22350432', 'Admin', '11/04/15', 'cash', '60', '10', '60', 'Asif', ''),
(2, 'RS-28223223', 'Admin', '11/04/15', 'cash', '30', '5', '100', 'Md. CUS Asif', ''),
(3, 'RS-07305', 'Admin', '11/04/15', 'cash', '36000', '2000', '3000', 'zahid', ''),
(4, 'RS-2073303', 'Admin', '11/04/15', 'cash', '123', '1', '125', 'rakib', ''),
(5, 'RS-50023682', 'Admin', '11/05/15', 'cash', '45435', '-6711321', '45', 'pp', ''),
(6, 'RS-0330022', 'Admin', '11/12/15', 'cash', '45435', '-6711321', '-6', 'acust', ''),
(7, 'RS-23000', 'Admin', '11/13/15', 'cash', '66', '-822', '454', 'y', ''),
(8, 'RS-2040067', 'Admin', '11/16/15', 'cash', '36183', '2011', '36183', 'Roy Roy Roy', ''),
(9, 'RS-552307', 'Admin', '11/16/15', 'cash', '36183', '2011', '35635', 'upl', ''),
(10, 'RS-0903473', 'Admin', '11/17/15', 'cash', '72369', '4003', '1121323', '00', ''),
(11, 'RS-3292822', 'Admin', '11/17/15', 'cash', 'gettotal', 'gettotalprof', '2545', 'new frm cart', ''),
(12, 'RS-20224', 'Admin', '11/17/15', 'cash', '36099', '767', '4567', 'kk', ''),
(13, 'RS-2023033', 'Admin', '11/17/15', 'cash', 'gettotal', 'gettotalprof', '2334', 'aaa', ''),
(14, 'RS-7332203', 'Admin', '11/18/15', 'cash', 'gettotal', 'gettotalprof', '45', '45', ''),
(15, 'RS-2233266', 'Admin', '11/18/15', 'cash', '113779', '8223', '5454', 'rodi', ''),
(16, 'RS-3322222', 'Admin', '11/22/15', 'cash', '435', '390', '400', 'mithun', ''),
(17, 'RS-32232', 'Admin', '11/24/15', 'cash', '435', '390', '45445', 'eee', ''),
(18, 'RS-3223003', 'Admin', '11/25/15', 'cash', '36000', '2000', '124', 'anik', ''),
(19, 'RS-32270', 'Admin', '11/25/15', 'cash', '400', '100', '500', 'll', ''),
(20, 'RS-23034333', 'Admin', '11/25/15', 'cash', '36222', '768', '36222', '', ''),
(21, 'RS-23034333', 'Admin', '11/25/15', 'cash', '36123', '2001', '2050', '', ''),
(22, 'RS-22208', 'Admin', '11/26/15', 'cash', '62018', '25066', '62018', '', ''),
(23, 'RS-032353', 'Admin', '11/26/15', 'cash', '5779', '2223', '5779.00', 'qq', ''),
(24, 'RS-40023492', 'Admin', '11/26/15', 'cash', '28480', '11160', '25000', 'atik', ''),
(26, 'RS-40023492', 'Admin', '11/26/15', 'cash', '28480', '11160', '11262', 'rahim', ''),
(27, 'RS-302200', 'Admin', '11/26/15', 'cash', '103902', '28669', '28669', 'tik tiki', ''),
(28, 'RS-302200', 'Admin', '11/26/15', 'cash', '103902', '28669', '103902', 'kki', ''),
(29, 'RS-32332', 'Admin', '11/26/15', 'cash', '36000', '2000', '36000', 'pp', ''),
(30, 'RS-0903473', 'Admin', '11/27/15', 'cash', '230', '55', '120', 'kkooi', ''),
(31, 'RS-20233', 'Admin', '12/02/15', 'cash', '620', '120', '670', 'raja', ''),
(32, 'RS-22233', 'Admin', '12/02/15', 'cash', '5746', '2237', '5750', 'munna', ''),
(33, 'RS-00022622', 'Admin', '12/19/15', 'cash', '5686', '2227', '5686', 'kawsar', ''),
(34, 'RS-0333322', 'Admin', '12/19/15', 'cash', '343', '46', '350', 'kw', ''),
(35, 'RS-5530233', 'Admin', '12/19/15', 'cash', '33', '-411', '545', '12', ''),
(36, 'RS-936629', 'Admin', '12/19/15', 'cash', '33', '-411', '1222', 'x', ''),
(37, 'RS-8320322', 'Admin', '12/19/15', 'cash', '150', '25', '150', 'ygy', ''),
(38, 'RS-0394', 'Admin', '12/22/15', 'cash', '30', '5', '30', 'ww', ''),
(39, 'RS-2423720', '', '12/26/15', 'cash', '132', '-1644', '1245', 'oo', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`) VALUES
(92, 'RS-03082', '13', '1', '123', '1', 'ymhm', 'FZS', ' hondaa  ', '123', '', '11/18/15'),
(93, 'RS-0903473', '15', '1', '200', '50', 'bName', 'G Name', ' aulfau l ', '200', '', '11/27/15'),
(101, 'RS-6303300', '15', '1', '200', '50', 'bName', 'G Name', ' aulfau l   ', '200', '', '11/28/15'),
(102, 'RS-20233', '1', '4', '120', '20', 'cocacola', 'fanta', ' beverage', '30', '', '12/02/15'),
(104, 'RS-20233', '20', '1', '500', '100', 'as', '12', ' w it''s designed around you, your network, and your professional int', '500', '', '12/02/15'),
(105, 'RS-22233', '1', '3', '90', '15', 'cocacola', 'fanta', ' beverage', '30', '', '12/02/15'),
(106, 'RS-22233', '8', '1', '5656', '2222', '123', 'yuy', ' ytutyjhg   ', '5656', '', '12/02/15'),
(126, 'RS-2423720', '14', '4', '132', '-1644', 'Bike', 'Bike1', ' Bike1   ', '33', '', '12/26/15');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE IF NOT EXISTS `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(1, 'SupAbir', 'Kalabagan', '021248546', '017374588', 'He is an honest man.'),
(2, 'Suptwo', 'SuBaddresS TwO', '54845kk', '014452', 'bootstrap affix, not just a fixed sidebar, in needs interaction with DOM ... Browse other questions tagged twitt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(3, 'admin', 'admin123', 'Administrator', 'admin'),
(4, 'shuvo', '123456p', '01737122789', 'Admin'),
(5, 'aa', '123', '', 'Cashier'),
(6, 'kk', 'admin', '', 'Seller'),
(7, 'admin', 'admin', '', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
