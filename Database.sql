-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2022 at 06:31 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_away`
--
CREATE DATABASE IF NOT EXISTS `shop_away` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shop_away`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `user_id` varchar(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `role` varchar(6) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `contact_no` (`contact_no`),
  UNIQUE KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `password`, `email`, `address`, `role`, `ip`, `date`, `time`, `contact_no`) VALUES
('Anu@008', 'Anupunja Dagupta', '12345678', 'anu@email', 'Address of  Anupunja', '', '::1', '05-04-22', '03:11:47:pm', '78945612334'),
('Shyam008', 'Shyamendra Hazra', '123456789', 'shyamendrahazra1234@gmail.com', 'sad sayhd ajsssssshasjjjh         aashdsagh asjh asudhg ashdgas jkdh', 'Seller', '::1', '05-04-22', '03:02:18:pm', '7439445257'),
('Shyam009', 'Shyamendra Hazra', '123456789', 'shyamendra1234@gmail.com', 'Address of The user Shyam008', 'User', '::1', '05-04-22', '04:16:51:pm', '7489456321');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` varchar(128) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `sub_category` varchar(128) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `discount` int(3) NOT NULL,
  `seller_id` varchar(128) NOT NULL,
  `ip` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `time` varchar(11) NOT NULL,
  `stock` int(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `sub_category`, `brand`, `image`, `price`, `discount`, `seller_id`, `ip`, `date`, `time`, `stock`) VALUES
('prod6246c59fa56781.71966115', ' Design Blue t-shirt', 'T-shirt', 'Printed', 'Brand 2', 'uploaded/6246c59fa567e1.91889526.png', '700', 10, 'Anu@011', '::1', '01-04-22', '02:57:59:pm', 122),
('prod6246cba754c397.10552014', ' Casual Grey t-shirt', 'T-shirt', 'Casual', 'Brand 1', 'uploaded/6246cba754c3f5.95363930.jpg', '750', 10, 'Anu@011', '::1', '01-04-22', '03:23:43:pm', 133),
('prod6246cc30b48468.09526302', ' Batman Printed t-shirt', 'T-shirt', 'Printed', 'brand 2', 'uploaded/6246cc30b484b8.10449032.jpg', '810', 10, 'Soubhik89', '::1', '01-04-22', '03:26:00:pm', 124),
('prod62470b18944f81.69166220', ' Simple Yellow t-shirt', 'T-shirt', 'Casual', 'Brand 1', 'uploaded/62470b18944fe8.65936178.png', '500', 10, 'Soubhik89', '::1', '01-04-22', '07:54:24:pm', 133),
('prod62470b807fdcb9.66508535', ' Designed Grey t-shirt', 'T-shirt', 'Printed', 'Brand 2', 'uploaded/62470b807fdda1.88285559.png', '650', 10, 'Soubhik89', '::1', '01-04-22', '07:56:08:pm', 114),
('prod62470baea98cc4.13361295', ' Printed white t-shirt', 'T-shirt', 'Printed', 'Brand 1', 'uploaded/62470baea98d10.95894838.png', '700', 10, 'Soubhik89', '::1', '01-04-22', '07:56:54:pm', 133),
('prod62470bfbc99f70.79738873', ' Dc comics t-shirt', 'T-shirt', 'Printed', 'Brand 1', 'uploaded/62470bfbc99fc9.35676716.png', '1200', 10, 'Soubhik89', '::1', '01-04-22', '07:58:11:pm', 133),
('prod62470c85347c00.22234700', ' Printed deep yellow t-shirt', 'T-shirt', 'Printed', 'Brand 2', 'uploaded/62470c85347c50.55443148.png', '950', 10, 'Anu@011', '::1', '01-04-22', '08:00:29:pm', 127),
('prod62470deae756b9.91662421', ' Light Yellow designed t-shirt', 'T-shirt', 'Designed', 'Brand 1', 'uploaded/62470deae75946.29419396.jpg', '1000', 10, 'Anu@011', '::1', '01-04-22', '08:06:26:pm', 133),
('prod62470e41883f76.70769461', ' Blue water effect t-shirt', 'T-shirt', 'Printed', 'Brand 2', 'uploaded/62470e41884006.19318873.jpg', '1450', 10, 'Anu@011', '::1', '01-04-22', '08:07:53:pm', 125),
('prod62470ee7d7a4c0.49515919', ' Formal black shirt', 'Shirt', 'Formal', 'brand 1', 'uploaded/62470ee7d7a513.52511830.jpg', '1870', 10, 'Anu@011', '::1', '01-04-22', '08:10:39:pm', 133),
('prod62470f0d8ab2b6.50334308', ' Red formal shirt', 'Shirt', 'Formal', 'Brand 1', 'uploaded/62470f0d8ab338.84011080.jpg', '1879', 10, 'Anu@011', '::1', '01-04-22', '08:11:17:pm', 133),
('prod62470f67424b27.83234090', ' Black casual shirt', 'Shirt', 'Casual', 'brand 2', 'uploaded/62470f67424bc1.58444346.png', '2314', 10, 'Anu@011', '::1', '01-04-22', '08:12:47:pm', 133),
('prod62470f93288c54.12784838', ' Blue Formal shirt', 'Shirt', 'Formal', 'Brand 1', 'uploaded/62470f93288ca0.58519848.png', '1954', 10, 'Anu@011', '::1', '01-04-22', '08:13:31:pm', 133),
('prod62470fbd59a286.70250524', ' Deep blue formal shirt', 'Shirt', 'Formal', 'brand 1', 'uploaded/62470fbd59a2d7.56677729.jpg', '1798', 10, 'Anu@011', '::1', '01-04-22', '08:14:13:pm', 133),
('prod62470ffe1ce475.51742400', ' Printed patterned black shirt ', 'Shirt', 'Casual', 'brand 2', 'uploaded/62470ffe1ce4b5.79246644.jpg', '1659', 10, 'Anu@011', '::1', '01-04-22', '08:15:18:pm', 133),
('prod6247101da4eb35.56274716', ' Casual black shirt', 'Shirt', 'Casual', 'brand 2', 'uploaded/6247101da4ebb6.12852356.jpg', '1470', 10, 'Anu@011', '::1', '01-04-22', '08:15:49:pm', 133),
('prod62471039b9bea8.57192655', ' Formal white shirt', 'Shirt', 'Formal', 'brand 1', 'uploaded/62471039b9bef4.88986825.jpg', '1200', 10, 'Anu@011', '::1', '01-04-22', '08:16:17:pm', 131),
('prod624711c6c8b572.45704841', ' Black red stylish shirt', 'Shirt', 'Casual', 'Brand 2', 'uploaded/624711c6c8b600.12014603.png', '2100', 10, 'Soubhik89', '::1', '01-04-22', '08:22:54:pm', 133),
('prod624711f816f205.73759667', ' Blue black Check shirt', 'Shirt', 'Designed', 'Brand 1', 'uploaded/624711f816f258.48361304.jpg', '1500', 10, 'Soubhik89', '::1', '01-04-22', '08:23:44:pm', 133),
('prod6247121ac20997.07088363', ' Casual black shirt', 'Shirt', 'Casual', 'brand 1', 'uploaded/6247121ac209f3.27062838.jpg', '1350', 10, 'Soubhik89', '::1', '01-04-22', '08:24:18:pm', 133),
('prod6247126662f541.23303782', ' New fashion black shirt', 'Shirt', 'Designed', 'brand 2', 'uploaded/6247126662f5a1.80673039.jpg', '2500', 10, 'Soubhik89', '::1', '01-04-22', '08:25:34:pm', 133),
('prod62471320bba789.47484383', ' Casual wear comfy pants', 'Pants', 'Casual', 'Brand 1', 'uploaded/62471320bba7e2.00868151.png', '1400', 10, 'Soubhik89', '::1', '01-04-22', '08:28:40:pm', 133),
('prod624713bae653b7.48230051', ' Casual deep blue jeans', 'Pants', 'Jeans', 'brand 2', 'uploaded/624713bae653f5.87899575.png', '750', 10, 'Soubhik89', '::1', '01-04-22', '08:31:14:pm', 133),
('prod624713f621b5a3.78186853', ' Designer grey pants', 'Pants', 'Designed', 'brand 1', 'uploaded/624713f621b623.10143116.jpg', '2100', 10, 'Soubhik89', '::1', '01-04-22', '08:32:14:pm', 133),
('prod62471472727259.07719114', ' Formal light brown pants', 'Pants', 'Formal', 'Brand 1', 'uploaded/624714727272d0.10088095.webp', '2100', 10, 'Soubhik89', '::1', '01-04-22', '08:34:18:pm', 133),
('prod6247150b9af051.12117768', ' Fromal party style odd yellow pant', 'Pants', 'Formal', 'brand 1', 'uploaded/6247150b9af0b8.56926998.webp', '2145', 10, 'Soubhik89', '::1', '01-04-22', '08:36:51:pm', 133),
('prod6247153f5b11b7.71592636', ' Blue red stripe', 'Pants', 'Sports', 'Brand 2', 'uploaded/6247153f5b1204.73396993.webp', '1599', 10, 'Soubhik89', '::1', '01-04-22', '08:37:43:pm', 133),
('prod62471575b8a475.69747344', ' Black new jeans combo', 'Pants', 'Jeans', 'Brand 2', 'uploaded/62471575b8a4d8.20963264.png', '2800', 10, 'Soubhik89', '::1', '01-04-22', '08:38:37:pm', 133),
('prod624715a02299b7.76634511', ' Fade ripped jeans', 'Pants', 'Jeans', 'brand 2', 'uploaded/624715a0229a20.75658858.png', '2299', 10, 'Soubhik89', '::1', '01-04-22', '08:39:20:pm', 133),
('prod624715e3dbec61.30309951', ' FullFlexx hD hammer drill canvas cargo pant', 'Pants', 'Casual', 'Brand 2', 'uploaded/624715e3dbece2.49203615.webp', '2999', 10, 'Soubhik89', '::1', '01-04-22', '08:40:27:pm', 133),
('prod624716055bb985.45514807', ' White sporty sweat pants', 'Pants', 'Sports', 'brand 1', 'uploaded/624716055bb9d4.56134757.webp', '2849', 10, 'Soubhik89', '::1', '01-04-22', '08:41:01:pm', 133),
('prod6247162c903d30.58481473', ' Ripped styled jeans', 'Pants', 'Jeans', 'brand 2', 'uploaded/6247162c903de4.61026108.jpg', '3199', 10, 'Soubhik89', '::1', '01-04-22', '08:41:40:pm', 133),
('prod62471694011b81.46764786', ' Black casual sports pants', 'Pants', 'Sports', 'Brand 2', 'uploaded/62471694011bd7.60936697.jpg', '1589', 10, 'Soubhik89', '::1', '01-04-22', '08:43:24:pm', 133),
('prod624716d6a91bb4.98710157', ' Tactical casual hunter pants', 'Pants', 'Designed', 'brand 1', 'uploaded/624716d6a91c02.40847751.webp', '3399', 10, 'Soubhik89', '::1', '01-04-22', '08:44:30:pm', 133),
('prod624717aa37d972.59597411', ' Formal black pant', 'Pants', 'Formal', 'brand 1', 'uploaded/624717aa37d9c0.56008181.jpg', '2100', 10, 'Anu@011', '::1', '01-04-22', '08:48:02:pm', 133),
('prod624717eae98d57.85143959', ' Army print casual pants', 'Pants', 'Casual', 'brand 2', 'uploaded/624717eae98da9.10708081.jpg', '2300', 10, 'Anu@011', '::1', '01-04-22', '08:49:06:pm', 133),
('prod62471817704176.38213022', ' Fashion styled brown trousers', 'Pants', 'Casual', 'brand 1', 'uploaded/624718177041d1.31160928.webp', '2400', 10, 'Anu@011', '::1', '01-04-22', '08:49:51:pm', 133),
('prod62471855e76722.42572595', ' Fromal-Casual  wear light brown pants', 'Pants', 'Formal', 'brand 1', 'uploaded/62471855e76779.55433475.jpg', '3300 ', 10, 'Anu@011', '::1', '01-04-22', '08:50:53:pm', 133),
('prod6247187b809e72.96324207', ' Formal corporate blue pants', 'Pants', 'Formal', 'brand 1', 'uploaded/6247187b809ec4.46381423.jpeg', '3500', 10, 'Anu@011', '::1', '01-04-22', '08:51:31:pm', 133),
('prod624718c147a1d2.33168470', ' Army print cargo pants', 'Pants', 'Casual', 'Brand 1', 'uploaded/624718c147a216.91326765.jpg', '1400', 10, 'Anu@011', '::1', '01-04-22', '08:52:41:pm', 133),
('prod624718e050d572.81920981', ' Grey golf pants', 'Pants', 'Sports', 'brand 2', 'uploaded/624718e050d5d6.22709013.png', '3700', 10, 'Anu@011', '::1', '01-04-22', '08:53:12:pm', 133),
('prod624718f95a1238.50486873', ' Formal office blue pants', 'Pants', 'Formal', 'brand 1', 'uploaded/624718f95a12a8.36347161.jpeg', '3400', 10, 'Anu@011', '::1', '01-04-22', '08:53:37:pm', 133),
('prod6247192e9fe134.31731776', ' Double wavy jeans ', 'Pants', 'Jeans', 'Brand 2', 'uploaded/6247192e9fe188.35530749.jpg', '4800', 10, 'Anu@011', '::1', '01-04-22', '08:54:30:pm', 133),
('prod6247195ff02785.20381415', ' Army printed casual pants', 'Pants', 'Casual', 'Brand 2', 'uploaded/6247195ff027d7.68248115.webp', '1800', 10, 'Anu@011', '::1', '01-04-22', '08:55:19:pm', 133),
('prod624719876a63d0.73742512', ' Light brown corporate formal pants', 'Pants', 'Formal', 'brand 1', 'uploaded/624719876a6451.03207598.jpg', '1800', 10, 'Anu@011', '::1', '01-04-22', '08:55:59:pm', 133),
('prod6247e33903fc55.87829095', ' Blue shades casual t-shirt', 'T-shirt', 'Casual', 'brand 2', 'uploaded/6247e33903fcd5.84090745.jpg', '1300', 10, 'Soubhik69', '::1', '02-04-22', '11:16:33:am', 132),
('prod6247e3fa0c33a0.37152780', ' Designer comfy pants', 'Pants', 'Designed', 'Brand 2', 'uploaded/6247e3fa0c3405.06627257.webp', '2499', 10, 'Soubhik69', '::1', '02-04-22', '11:19:46:am', 133),
('prod624a9c5559a2b6.40685321', ' Western Casual Blue shirt', 'Shirt', 'Casual', 'Brand 2', 'uploaded/624a9c5559a347.77081852.webp', '1899', 15, 'Anu@011', '::1', '04-04-22', '12:50:53:pm', 150);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `s_no` int(30) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(128) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `buyer_id` varchar(20) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`s_no`, `product_id`, `product_name`, `buyer_id`, `ip`, `date`, `time`) VALUES
(1, 'prod62470c85347c00.22234700', ' Printed deep yellow t-shirt', 'Shyam008', '::1', '05-04-22', '03:38:36:pm'),
(2, 'prod62470c85347c00.22234700', ' Printed deep yellow t-shirt', 'Shyam008', '::1', '05-04-22', '03:38:50:pm'),
(3, 'prod62470c85347c00.22234700', ' Printed deep yellow t-shirt', 'Shyam008', '::1', '05-04-22', '03:39:00:pm'),
(4, 'prod6246c59fa56781.71966115', ' Design Blue t-shirt', 'Shyam008', '::1', '05-04-22', '03:39:22:pm'),
(5, 'prod6246c59fa56781.71966115', ' Design Blue t-shirt', 'Shyam008', '::1', '05-04-22', '03:39:26:pm'),
(6, 'prod6246c59fa56781.71966115', ' Design Blue t-shirt', 'Shyam008', '::1', '05-04-22', '03:39:30:pm'),
(7, 'prod6246c59fa56781.71966115', ' Design Blue t-shirt', 'Shyam008', '::1', '05-04-22', '03:39:58:pm'),
(8, 'prod6246cc30b48468.09526302', ' Batman Printed t-shirt', 'Shyam008', '::1', '05-04-22', '03:50:30:pm'),
(9, 'prod6247e33903fc55.87829095', ' Blue shades casual t-shirt', 'Shyam008', '::1', '05-04-22', '03:52:53:pm'),
(10, 'prod62470e41883f76.70769461', ' Blue water effect t-shirt', 'Shyam008', '::1', '05-04-22', '04:13:51:pm'),
(11, 'prod62470e41883f76.70769461', ' Blue water effect t-shirt', 'Shyam008', '::1', '05-04-22', '04:13:57:pm'),
(12, 'prod62470b807fdcb9.66508535', ' Designed Grey t-shirt', 'Shyam008', '::1', '05-04-22', '05:00:35:pm'),
(13, 'prod62470b807fdcb9.66508535', ' Designed Grey t-shirt', 'Shyam008', '::1', '11-04-22', '11:05:50:pm'),
(14, 'prod6246cc30b48468.09526302', ' Batman Printed t-shirt', 'Shyam008', '::1', '11-04-22', '11:10:23:pm'),
(15, 'prod6246cc30b48468.09526302', ' Batman Printed t-shirt', 'Shyam008', '::1', '11-04-22', '11:14:26:pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
