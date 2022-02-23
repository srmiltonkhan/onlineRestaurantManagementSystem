-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 02:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_23136324_restaurantmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bddessert`
--

CREATE TABLE `bddessert` (
  `bdDessertId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bddessert`
--

INSERT INTO `bddessert` (`bdDessertId`, `foodItemName`, `foodItemPrice`) VALUES
(62, 'Fruit With Icc Cream', 120),
(63, 'Special Fruit Salad', 140),
(61, 'Ice Cream', 100),
(60, 'Fruit Plate', 120),
(59, 'Firni', 40),
(58, 'Curd', 50);

-- --------------------------------------------------------

--
-- Table structure for table `bddrink`
--

CREATE TABLE `bddrink` (
  `bdDrinkId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bddrink`
--

INSERT INTO `bddrink` (`bdDrinkId`, `foodItemName`, `foodItemPrice`) VALUES
(70, 'Banana Shake', 120),
(68, 'Milk Shake', 120),
(64, 'Soft Drink', 15),
(65, 'Jal Jeera', 70),
(66, 'Coffee', 100),
(67, 'Fresh Fruit Juice', 100);

-- --------------------------------------------------------

--
-- Table structure for table `bdfish`
--

CREATE TABLE `bdfish` (
  `bdFishId` int(30) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdfish`
--

INSERT INTO `bdfish` (`bdFishId`, `foodItemName`, `foodItemPrice`) VALUES
(3, 'Rui(Fry/Curry/Bhuna)', 500),
(4, 'Pabda', 350),
(5, 'Koi', 350),
(6, 'Rup Chanda', 600),
(7, 'Hilsha Fish', 400),
(8, 'Hilsha Egg', 400),
(9, 'Prawn Malaikari', 400),
(10, 'Prawn Bhuna', 400);

-- --------------------------------------------------------

--
-- Table structure for table `bdmashed`
--

CREATE TABLE `bdmashed` (
  `bdmashedId` int(11) NOT NULL,
  `foodItemName` varchar(250) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdmashed`
--

INSERT INTO `bdmashed` (`bdmashedId`, `foodItemName`, `foodItemPrice`) VALUES
(26, 'Mashed Taki Fish', 70),
(27, 'Mashed Dried Fish', 70),
(28, 'Mashed Prawn ', 100),
(19, 'Mashed Bean', 40),
(18, 'Mashed Brinjal', 40),
(25, 'Mashed Chilli & Onion ', 40),
(23, 'Mashed Green Banana', 40),
(24, 'Mashed Tomato', 40),
(21, 'Mashed Potato ', 50),
(31, 'Mashed Hilsha Fish', 100);

-- --------------------------------------------------------

--
-- Table structure for table `bdmeat`
--

CREATE TABLE `bdmeat` (
  `bdMeatId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdmeat`
--

INSERT INTO `bdmeat` (`bdMeatId`, `foodItemName`, `foodItemPrice`) VALUES
(22, 'Chicken ', 190),
(23, 'Mutton', 300),
(24, 'Beef', 270),
(25, 'Beef Kala Bhuna', 300);

-- --------------------------------------------------------

--
-- Table structure for table `bdrice_biriani`
--

CREATE TABLE `bdrice_biriani` (
  `bdRiceBirianiId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdrice_biriani`
--

INSERT INTO `bdrice_biriani` (`bdRiceBirianiId`, `foodItemName`, `foodItemPrice`) VALUES
(82, 'Mutton Khichuri (à¦–à¦¾à¦¸à§€à¦² à¦–à¦¿à¦šà§à¦°à§€)', '290'),
(83, 'Beef Tehari ', '270'),
(81, 'Bhuna Khichuri', '270'),
(90, 'Khicuri with Salad	', '150'),
(76, 'Plain Rice(Per Person)', '80'),
(77, 'Plain Roti (Dinner Only)', '40'),
(80, 'Kachchi Biriani', '290'),
(79, 'Chicken Biraini', '270'),
(86, 'Hilsha Polao', '300');

-- --------------------------------------------------------

--
-- Table structure for table `bdsnacks`
--

CREATE TABLE `bdsnacks` (
  `BDSnacksId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdsnacks`
--

INSERT INTO `bdsnacks` (`BDSnacksId`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'Berger', '50'),
(2, 'Halem', '60'),
(3, 'Seek Kabab', '100'),
(4, 'Paratha', '10'),
(7, 'Bhaji', '10'),
(8, 'Pizza', '150');

-- --------------------------------------------------------

--
-- Table structure for table `bdvegetable`
--

CREATE TABLE `bdvegetable` (
  `bdVegetableId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdvegetable`
--

INSERT INTO `bdvegetable` (`bdVegetableId`, `foodItemName`, `foodItemPrice`) VALUES
(10, 'Shak with Prawn', 80),
(8, 'Mixed Vegetable', 70),
(9, 'Shak with Prawn', 80);

-- --------------------------------------------------------

--
-- Table structure for table `chsappetizer`
--

CREATE TABLE `chsappetizer` (
  `chAppetizerId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsappetizer`
--

INSERT INTO `chsappetizer` (`chAppetizerId`, `foodItemName`, `foodItemPrice`) VALUES
(8, 'Prawn Ball (10Pcs)', 320),
(4, 'Won Thun (10Pcs)', 270),
(5, 'Sprig Roll (Veg. 10Pcs)', 270),
(6, 'Prawn on Toast (10Pcs)', 320),
(7, 'Chicken on Toast (10Pcs.)', 320),
(9, 'Fried Fish Finger (10Pcs.)', 320),
(10, 'Special Fried Prawn (10Pcs.)', 500);

-- --------------------------------------------------------

--
-- Table structure for table `chsbeef`
--

CREATE TABLE `chsbeef` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsbeef`
--

INSERT INTO `chsbeef` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'b', 120);

-- --------------------------------------------------------

--
-- Table structure for table `chschicken`
--

CREATE TABLE `chschicken` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chschicken`
--

INSERT INTO `chschicken` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'c', 20),
(2, 'cc', 12);

-- --------------------------------------------------------

--
-- Table structure for table `chsfish`
--

CREATE TABLE `chsfish` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsfish`
--

INSERT INTO `chsfish` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'f', 33);

-- --------------------------------------------------------

--
-- Table structure for table `chsnoodles`
--

CREATE TABLE `chsnoodles` (
  `chsNoodlesId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsnoodles`
--

INSERT INTO `chsnoodles` (`chsNoodlesId`, `foodItemName`, `foodItemPrice`) VALUES
(2, 'Cold noodles', 50),
(3, 'Misua', 60),
(5, 'Steamed stuffed buns', 60),
(6, 'Congee', 100),
(7, 'Soy milk and youtiao', 200),
(8, 'Rice noodles', 100);

-- --------------------------------------------------------

--
-- Table structure for table `chsprawn`
--

CREATE TABLE `chsprawn` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsprawn`
--

INSERT INTO `chsprawn` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'p', 20);

-- --------------------------------------------------------

--
-- Table structure for table `chsrice`
--

CREATE TABLE `chsrice` (
  `chsRiceId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsrice`
--

INSERT INTO `chsrice` (`chsRiceId`, `foodItemName`, `foodItemPrice`) VALUES
(2, 'Khusbo Speicial Fried Rice', 340),
(3, 'Steamed Rice', 200),
(4, 'Vegetable Fried rice', 260),
(5, 'Egg Fried Rice', 270),
(6, 'Chicken Fried Rice', 290),
(7, 'Prawn Fried Rice', 320),
(8, 'Beef Fried Rice', 270),
(9, 'Mixed Fried Fish', 300);

-- --------------------------------------------------------

--
-- Table structure for table `chssalad`
--

CREATE TABLE `chssalad` (
  `chSaladId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chssalad`
--

INSERT INTO `chssalad` (`chSaladId`, `foodItemName`, `foodItemPrice`) VALUES
(3, 'Khushboo Special Salad', 470),
(4, 'Prawn Salad', 450),
(5, 'Green Salad', 190),
(6, 'Chicken  Salad', 430),
(7, 'Cashew Nut Salad (Chicken/Prawn)', 400);

-- --------------------------------------------------------

--
-- Table structure for table `chssoup`
--

CREATE TABLE `chssoup` (
  `chSoupId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chssoup`
--

INSERT INTO `chssoup` (`chSoupId`, `foodItemName`, `foodItemPrice`) VALUES
(4, 'Khushboo Special Vegetable Soup', 350),
(5, 'Chicken Corn Soup', 300),
(6, 'Special Chicken Corn Soup', 330),
(7, 'Vegetable Soup', 280),
(8, 'Chicken Vegetable Soup', 300),
(9, 'Thai Sup', 320),
(10, 'Special thai Soup', 350),
(11, 'Hot & Sour Soup', 250);

-- --------------------------------------------------------

--
-- Table structure for table `chsvegetable`
--

CREATE TABLE `chsvegetable` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chsvegetable`
--

INSERT INTO `chsvegetable` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'v', 120);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientId`, `name`, `gender`, `mobile`, `email`, `address`, `password`) VALUES
(335, 'Manik', 'Male', '01727637420', 'manik@gmaill.com', 'Chitagonj', '252'),
(348, 'Asif', 'Male', '0154856854', 'asif@gmal.com', 'Belkuchi, Sirajgonj', '1256'),
(349, 'Rubel', 'Male', '0152526252', 'rubel@gmail.com', 'Khilkhet, Dhaka', '125'),
(350, 'Showrab', 'Male', '0162100035', 'showrab@gmail.com', 'Mirpur, Dhaka', '125'),
(347, 'Ariful', 'Male', '0162100035', 'ariful@gmail.com', 'Uttara, Dhaka', '125'),
(346, 'Milton Hossain', 'Male', '0162100361', 'milton@gmail.com', 'Dhaka', '125'),
(340, 'Anowar', 'Male', '01621000333', 'anowar@gmail.com', 'Dhaka, Bangladesh', '85');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `contactId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `DateTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`contactId`, `username`, `useremail`, `subject`, `message`, `DateTime`) VALUES
(40, 'Milton Khan', 'arfankhan@gmail.com', 'Enhance your food quality', 'Need to change your food quality ', '10:58 PM  22-Apr-19'),
(41, 'Elias Khan', 'arfankhan@gmail.com', 'How can I reach your restaurant', 'How can I reach your restaurant', '11:04 PM  22-Apr-19'),
(42, 'Salman Khan', 'arfankhan@gmail.com', 'Do you provide home service', 'Do you provide home service', '08:27 PM  25-Apr-19'),
(43, 'Sumiya Khan', 'arfankhan@gmail.com', 'Do you give any offer on the occasion of religious function', 'Do you give any offer on the occasion of religious function', '08:34 PM  25-Apr-19'),
(44, 'Saiful Islam', 'arfankhan@gmail.com', 'Do you give any offer on the occasion of religious function', 'Do you have any branch in Sirajgonj', '09:00 PM  25-Apr-19');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `invoice_number` varchar(15) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `grand_total` int(6) NOT NULL,
  `discount` int(3) NOT NULL,
  `final_total` int(10) NOT NULL,
  `grand_total_word` varchar(100) DEFAULT NULL,
  `payment_type` varchar(10) NOT NULL,
  `current_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `invoice_number`, `customer_name`, `mobile_number`, `address`, `date_time`, `grand_total`, `discount`, `final_total`, `grand_total_word`, `payment_type`, `current_date`) VALUES
(340, '533963', 'Mahmudul Hasan', '01621000362', 'Dhaka', '06:52 PM. 11-Jul-19', 140, 5, 171, 'One Hundred Seventy One', 'Cash', '2019-12-15'),
(342, '133614', 'Atik', '01727637420', 'Dhaka', '06:57 PM. 11-Jul-19', 335, 5, 318, 'Three Hundreds Eighteen Taka', 'Cash', '2019-12-16'),
(343, '549339', 'Robin', '01524263245', 'Dhaka', '06:58 PM. 11-Jul-19', 920, 10, 828, 'Eight Hundreds Twenty Eight Taka', 'Cash', '2019-12-14'),
(344, '952587', 'Asraf Khan', '01521526325', 'Dhaka', '12:38 PM. 19-Jul-19', 660, 10, 594, 'Five Hundreds Ninety Four Taka', 'Cash', '2019-12-13'),
(345, '372242', 'Rashed', '01727697450', 'Belkuchi, Sirajgonj', '12:42 PM. 19-Jul-19', 440, 5, 418, 'Four Hundreds Eighteen Taka', 'Cash', '2019-12-12'),
(346, '497568', 'Abir', '01521526325', 'Dhaka', '12:46 PM. 19-Jul-19', 1620, 5, 1539, 'One Thousands Five Hundreds Thirty Nine', 'Cash', '2019-12-11'),
(347, '955682', 'Atik', '01524252525', 'Dhaka', '12:55 PM. 19-Jul-19', 560, 5, 532, 'Five Hundreds Thirty Two Taka', 'Cash', '2019-12-10'),
(348, '274114', 'Anowar', '01524256325', 'Dhaka', '12:58 PM. 19-Jul-19', 560, 0, 560, 'Five Hundreds Sixty Taka', 'Cash', '2019-07-19'),
(349, '552952', 'Milton Khan', '01621000361', 'ATI Center House # 1, Road # 9/A Sector # 7, Dhaka 1230', '09:24 PM. 19-Jul-19', 2530, 10, 2277, 'Two Thousands Two Hundreds Seventy Seven Taka Only', 'Cash', '2019-07-19'),
(350, '216483', 'Arfan', '01542145262', 'Dhaka', '09:25 PM. 19-Jul-19', 540, 10, 486, 'Four  Hundreds Eighty Six Taka Only', 'Cash', '2019-07-19'),
(351, '545238', 'Milton Khan', '01621000361', 'ATI Center House # 1, Road # 9/A Sector # 7, Dhaka 1230', '10:25 PM. 19-Jul-19', 1925, 5, 1829, 'One Thousand Eight Hundreds Twenty Eight Taka', 'Cash', '2019-07-19'),
(353, '811185', 'Milton Khan', '01621000361', 'ATI Center House # 1, Road # 9/A Sector # 7, Dhaka 1230', '10:30 PM. 19-Jul-19', 2165, 10, 1949, 'One Thousand Nine Hundreds Forty Eight Taka', 'Cash', '2019-07-19'),
(354, '372728', 'Rezaul Karim', '01621000365', 'Tamai', '06:18 PM. 22-Nov-19', 1230, 10, 1107, 'One Thousand Two Seven Taka', 'Cash', '2019-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `deliverorder`
--

CREATE TABLE `deliverorder` (
  `deliverOrderId` int(11) NOT NULL,
  `alphaNumericOrderID` varchar(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `howmany` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliverorder`
--

INSERT INTO `deliverorder` (`deliverOrderId`, `alphaNumericOrderID`, `fullname`, `mobile`, `email`, `howmany`, `address`, `date`, `message`) VALUES
(55, 'OR111155', 'Elias Khan', '017579685', 'elias@gmail.com', '2 Person', 'Belkuchi, Sirajgonj', '08:51 PM  19-Jul-19', 'Special Fruit Salad qty 2\r\nFirni qty2'),
(56, 'OR516891', 'Rajon', '0152152526', 'rajon@gmail.com', '0', 'Uttara,Dhaka', '08:50 PM  19-Jul-19', 'Seek Kabab qty 1\r\nPizza qty 1'),
(57, 'OR172493', 'Hasan', '017526395', 'hasan@gmail.com', '1 Person', 'Khilkhet, Dhaka', '08:48 PM  19-Jul-19', 'Plain Rice qty 1\r\nChicken Biraini qty1\r\nHilsha Polao qty1\r\n'),
(58, 'OR822345', 'Arfan Khan', '01727637450', 'arfan@gmail.com', '1 Person', 'Belkuchi, Sirajgonj', '08:46 PM  19-Jul-19', 'Special Chow Mein qty 1\r\nSteamed stuffed buns qty 1\r\nHalem qty 1\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `MobileNo` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `JoinDate` varchar(50) NOT NULL,
  `Salary` int(10) NOT NULL,
  `Picture` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `EmployeeName`, `Designation`, `MobileNo`, `Email`, `Address`, `JoinDate`, `Salary`, `Picture`) VALUES
(32, 'Santo', 'chef', '01621000365', 'santo@gmail.com', 'Dhaka', '2019-06-21', 20000, 'images/employee/Santu.jpg'),
(33, 'Milton', 'CEO', '01727637420', 'reza@gmail.com', 'Sirajgonj', '2019-06-21', 10000, 'images/employee/Milton.PNG'),
(35, 'Ariful', 'Deliver Boy', '01727637428', 'arful@gmail.com', 'Belkuchi, Sirajgonj', '2019-07-19', 10000, 'images/employee/ariful.jpg'),
(36, 'Mahiya', 'Chef', '01621000352', 'mahiya@gmail.com', 'mahiya@gmail.com', '2019-07-19', 15000, 'images/employee/2015202020004.jpg'),
(38, 'Milton Khan', 'Chairman & MD', '01621000361', 'srmiltonkhan@gmail.com', 'Belkuchi, Sirajgonj', '2019-07-19', 100000, 'images/employee/Milton.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `food_name` varchar(100) NOT NULL,
  `unit_price` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `customer_id`, `food_name`, `unit_price`, `quantity`, `total`) VALUES
(21, 340, 'Mashed Dried Fish', 70, 1, 70),
(22, 340, 'Mashed Dried Fish', 70, 1, 70),
(23, 340, '', 0, 0, 0),
(24, 340, '', 0, 0, 0),
(29, 342, 'Rice noodles', 100, 1, 100),
(30, 342, 'Mashed Hilsha Fish', 100, 1, 100),
(31, 342, 'Fruit Plate', 120, 1, 120),
(32, 342, 'Soft Drink', 15, 1, 15),
(33, 343, 'Chicken Biraini', 270, 1, 270),
(34, 343, 'Mashed Potato', 50, 1, 50),
(35, 343, 'Rup Chanda', 600, 1, 600),
(36, 344, 'Bhuna Khichuri', 270, 1, 270),
(37, 344, 'Mutton Khichuri (à¦–à¦¾à¦¸à§€à¦² à¦–à¦¿à¦šà§à¦°à§€)', 290, 1, 290),
(38, 344, 'Mashed Hilsha Fish', 100, 1, 100),
(39, 345, 'Rice noodles', 100, 1, 100),
(40, 345, 'Mutton Khichuri (à¦–à¦¾à¦¸à§€à¦² à¦–à¦¿à¦šà§à¦°à§€)', 290, 1, 290),
(41, 345, 'Curd', 50, 1, 50),
(42, 346, 'Chicken Biraini', 270, 3, 810),
(43, 346, 'Bhuna Khichuri', 270, 3, 810),
(44, 347, 'Bhuna Khichuri', 270, 1, 270),
(45, 347, 'Kachchi Biriani', 290, 1, 290),
(46, 348, 'Bhuna Khichuri', 270, 1, 270),
(47, 348, 'Kachchi Biriani', 290, 1, 290),
(48, 349, 'Kachchi Biriani', 290, 1, 290),
(49, 349, 'Mashed Bean', 40, 1, 40),
(50, 349, 'Hilsha Egg', 400, 1, 400),
(51, 349, 'Pabda', 350, 1, 350),
(52, 349, 'Banana Shake', 120, 1, 120),
(53, 349, 'Beef', 270, 1, 270),
(54, 349, 'Beef Kala Bhuna', 300, 1, 300),
(55, 349, 'Firni', 40, 1, 40),
(56, 349, 'Fruit With Icc Cream', 120, 1, 120),
(57, 349, 'Bhaji', 10, 1, 10),
(58, 349, 'Fried Fish Finger (10Pcs.)', 320, 1, 320),
(59, 349, 'Sprig Roll (Veg. 10Pcs)', 270, 1, 270),
(60, 350, 'Bhuna Khichuri', 270, 1, 270),
(61, 350, 'Chicken Biraini', 270, 1, 270),
(62, 351, 'Beef Tehari', 270, 1, 270),
(63, 351, 'Mashed Green Banana', 40, 1, 40),
(64, 351, 'Koi', 350, 1, 350),
(65, 351, 'Prawn Bhuna', 400, 1, 400),
(66, 351, 'Soft Drink', 15, 1, 15),
(67, 351, 'Beef Kala Bhuna', 300, 1, 300),
(68, 351, 'Curd', 50, 1, 50),
(69, 351, 'Mutton', 300, 1, 300),
(70, 351, 'Berger', 50, 1, 50),
(71, 351, 'Pizza', 150, 1, 150),
(82, 353, 'Bhuna Khichuri', 270, 2, 540),
(83, 353, 'Mashed Bean', 40, 2, 80),
(84, 353, 'Plain Rice(Per Person)', 80, 1, 80),
(85, 353, 'Mashed Potato', 50, 1, 50),
(86, 353, 'Hilsha Fish', 400, 1, 400),
(87, 353, 'Rup Chanda', 600, 1, 600),
(88, 353, 'Soft Drink', 15, 1, 15),
(89, 353, 'Curd', 50, 1, 50),
(90, 353, 'Halem', 60, 1, 60),
(91, 353, 'Chicken Fried Rice', 290, 1, 290),
(92, 354, 'Chicken Biraini', 270, 1, 270),
(93, 354, 'Mashed Potato', 50, 3, 150),
(94, 354, 'Chicken Biraini', 270, 3, 810);

-- --------------------------------------------------------

--
-- Table structure for table `foodreservation`
--

CREATE TABLE `foodreservation` (
  `foodReservationId` int(11) NOT NULL,
  `foodName` varchar(250) NOT NULL,
  `foodQuantity` varchar(10) NOT NULL,
  `foodReservationDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodreservation`
--

INSERT INTO `foodreservation` (`foodReservationId`, `foodName`, `foodQuantity`, `foodReservationDate`) VALUES
(20, ' Mashed Dried Fish(Shutki)', '2KG', '18 May 2019 - 10:41 pm'),
(21, ' Chicken ', '4 KG', '21 June 2019 - 10:28 am'),
(22, ' Hilsha Polao', '5KG', '19 July 2019 - 11:18 am'),
(23, ' Mutton Khichuri (à¦–à¦¾à¦¸à§€à¦² à¦–à¦¿à¦šà§à¦°à§€)', '10 KG', '19 July 2019 - 11:18 am'),
(24, ' Chicken Biraini', '5KG', '19 July 2019 - 11:19 am'),
(25, ' Mashed Chilli & Onion', '5KG', '19 July 2019 - 11:19 am'),
(26, ' Pizza', '5KG', '19 July 2019 - 11:19 am'),
(27, ' Prawn Bhuna', '10 KG', '19 July 2019 - 11:19 am'),
(28, ' Mixed Fried Fish', '10 KG', '19 July 2019 - 11:23 am'),
(29, ' Vegetable Fried rice', '5 KG', '19 July 2019 - 11:28 am'),
(30, ' Special Fried Prawn', '5 KG', '19 July 2019 - 11:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `jpbread`
--

CREATE TABLE `jpbread` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpbread`
--

INSERT INTO `jpbread` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'b', 120),
(2, 'gh', 120),
(3, 'bb', 20);

-- --------------------------------------------------------

--
-- Table structure for table `jpdeepfried`
--

CREATE TABLE `jpdeepfried` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpdeepfried`
--

INSERT INTO `jpdeepfried` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'df', 120);

-- --------------------------------------------------------

--
-- Table structure for table `jpnoodles`
--

CREATE TABLE `jpnoodles` (
  `jpNoodlesId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpnoodles`
--

INSERT INTO `jpnoodles` (`jpNoodlesId`, `foodItemName`, `foodItemPrice`) VALUES
(3, 'Special Chow Mein ', 30),
(4, 'Chow Mein  (Chicken/Beef/Prawn/Veg)', 350),
(5, 'Steamed buns', 150),
(6, 'Soy milk and youtiao', 100),
(7, 'Wontons', 60),
(8, 'Jianbing', 45);

-- --------------------------------------------------------

--
-- Table structure for table `jpporridge`
--

CREATE TABLE `jpporridge` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpporridge`
--

INSERT INTO `jpporridge` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 'Ricep', 120);

-- --------------------------------------------------------

--
-- Table structure for table `jprice`
--

CREATE TABLE `jprice` (
  `jpRiceId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jprice`
--

INSERT INTO `jprice` (`jpRiceId`, `foodItemName`, `foodItemPrice`) VALUES
(2, 'Special Fried Rice', 30),
(3, 'Steamed Rice', 200),
(4, 'Vegetable Fried Rice', 200),
(5, 'Egg Fried Rice', 260),
(6, 'Chicken Fried Rice', 200);

-- --------------------------------------------------------

--
-- Table structure for table `jpsashimi`
--

CREATE TABLE `jpsashimi` (
  `id` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpsashimi`
--

INSERT INTO `jpsashimi` (`id`, `foodItemName`, `foodItemPrice`) VALUES
(1, 's', 12);

-- --------------------------------------------------------

--
-- Table structure for table `jsfishseafood`
--

CREATE TABLE `jsfishseafood` (
  `JsfishseafoodId` int(11) NOT NULL,
  `foodItemName` varchar(100) NOT NULL,
  `foodItemPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jsfishseafood`
--

INSERT INTO `jsfishseafood` (`JsfishseafoodId`, `foodItemName`, `foodItemPrice`) VALUES
(2, 'Grilled Shake ', 120),
(3, 'Teriyaki Glazed Hamachi', 300),
(4, 'Kazunoko', 250),
(5, 'Tazukuri', 125),
(7, 'kpokopko', 120);

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `latestNewsId` int(11) NOT NULL,
  `NewsTitle` varchar(150) NOT NULL,
  `NewsPicture` varchar(50) NOT NULL,
  `NewsDate` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`latestNewsId`, `NewsTitle`, `NewsPicture`, `NewsDate`, `message`) VALUES
(1, 'Comfortable Environment ', '', '17 May 2019 - 10:46 pm', 'Meat 50% discount for Eid'),
(2, 'Beautiful Place Testy Food', '', '12 May 2019 - 09:46 pm', '10% Discount for All Foods');

-- --------------------------------------------------------

--
-- Table structure for table `onlineorder`
--

CREATE TABLE `onlineorder` (
  `orderID` int(11) NOT NULL,
  `alphaNumericOrderID` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `howmany` varchar(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(25) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlineorder`
--

INSERT INTO `onlineorder` (`orderID`, `alphaNumericOrderID`, `fullname`, `mobile`, `email`, `howmany`, `address`, `date`, `message`) VALUES
(72, 'OR343564', 'Milton Khan', '01621000361', 'milton@gmail.com', '1 Person', 'Belkuchi, Sirajgonj', '12:27 PM  19-Jul-19', 'Hilsha Polao 1 qty\r\nKhicuri with Salad 1 qty\r\nBeef Tehari 2qty'),
(73, 'OR634615', 'Abir', '01652125236', 'abir@gmail.com', '2 Person', 'Soburnasara, Belkuchi, Sirajgonj', '03:08 PM  29-Nov-19', '1 pc Ilsaha,\r\n1 Plate Rice\r\n1 pc Egg'),
(74, 'OR959915', 'Hasan', '0152526326521', 'hasan@gmail.com', '1 Person', 'Tamail, Belkuchi, Sirajgonj', '03:10 PM  29-Nov-19', '1 pc Egg\r\n1 plate rice\r\n2 pc roi fish');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial`
--

CREATE TABLE `rawmaterial` (
  `rawMaterialId` int(11) NOT NULL,
  `foodName` varchar(250) NOT NULL,
  `foodQuantity` varchar(10) NOT NULL,
  `foodCost` int(10) NOT NULL,
  `purchaseDate` varchar(20) NOT NULL,
  `buyerName` varchar(50) DEFAULT NULL,
  `sellerName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`rawMaterialId`, `foodName`, `foodQuantity`, `foodCost`, `purchaseDate`, `buyerName`, `sellerName`) VALUES
(7, 'Mutton', '10 KG', 5000, '2019-05-18', ' Arifin', 'Jahid'),
(9, 'Rice', '10 KG', 1000, '2019-06-21', ' hasan', 'Robin'),
(10, 'Hilsha Fish', '25 KG', 12000, '2019-07-19', ' Habib', 'Raju'),
(11, 'Milk', '5KG', 200, '2019-07-19', ' Elias Khan', 'Fajlu Rahman'),
(12, 'Chicken ', '10 KG', 5000, '2019-07-19', ' Mahiya', 'Toma'),
(13, 'Beef', '10 KG', 12000, '2019-07-19', ' Firoj', 'Arfan Khan'),
(14, 'Chili (à¦•à¦¾à¦à¦šà¦¾ à¦®à¦°à¦¿à¦š)', '10 KG', 200, '2019-07-19', ' Aminul', 'Milton '),
(15, 'Onion(à¦ªà¦¿à§Ÿà¦¾à¦œ)', '10 KG', 400, '2019-07-19', ' Elias Hossain', 'Jiasmin');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sliderId` int(11) NOT NULL,
  `sliderPicture` varchar(50) NOT NULL,
  `PictureTitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderId`, `sliderPicture`, `PictureTitle`) VALUES
(1, 'images/slider/FrontPicture.jpg', 'Front Picture'),
(2, 'images/slider/GreenFood.jpg', 'Green Foods'),
(3, 'images/slider/slider1.jpg', 'Masalas'),
(4, 'images/slider/ComfortablePlace.jpg', 'Comfortable Place');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'milton', '$2y$10$UzF5UfrNhva0Ng2oGdXtq.c0mzAFdGF5eLeSZYLWsdEmVID.zbiBe', '2019-06-28 11:42:36'),
(2, 'Hasan', '$2y$10$OSvP1D5fzrdp03y7y9vjieYmnxvwN0/76f/2zOdua0OitORbuquZW', '2019-07-03 23:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bddessert`
--
ALTER TABLE `bddessert`
  ADD PRIMARY KEY (`bdDessertId`);

--
-- Indexes for table `bddrink`
--
ALTER TABLE `bddrink`
  ADD PRIMARY KEY (`bdDrinkId`);

--
-- Indexes for table `bdfish`
--
ALTER TABLE `bdfish`
  ADD PRIMARY KEY (`bdFishId`);

--
-- Indexes for table `bdmashed`
--
ALTER TABLE `bdmashed`
  ADD PRIMARY KEY (`bdmashedId`);

--
-- Indexes for table `bdmeat`
--
ALTER TABLE `bdmeat`
  ADD PRIMARY KEY (`bdMeatId`);

--
-- Indexes for table `bdrice_biriani`
--
ALTER TABLE `bdrice_biriani`
  ADD PRIMARY KEY (`bdRiceBirianiId`);

--
-- Indexes for table `bdsnacks`
--
ALTER TABLE `bdsnacks`
  ADD PRIMARY KEY (`BDSnacksId`);

--
-- Indexes for table `bdvegetable`
--
ALTER TABLE `bdvegetable`
  ADD PRIMARY KEY (`bdVegetableId`);

--
-- Indexes for table `chsappetizer`
--
ALTER TABLE `chsappetizer`
  ADD PRIMARY KEY (`chAppetizerId`);

--
-- Indexes for table `chsbeef`
--
ALTER TABLE `chsbeef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chschicken`
--
ALTER TABLE `chschicken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chsfish`
--
ALTER TABLE `chsfish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chsnoodles`
--
ALTER TABLE `chsnoodles`
  ADD PRIMARY KEY (`chsNoodlesId`);

--
-- Indexes for table `chsprawn`
--
ALTER TABLE `chsprawn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chsrice`
--
ALTER TABLE `chsrice`
  ADD PRIMARY KEY (`chsRiceId`);

--
-- Indexes for table `chssalad`
--
ALTER TABLE `chssalad`
  ADD PRIMARY KEY (`chSaladId`);

--
-- Indexes for table `chssoup`
--
ALTER TABLE `chssoup`
  ADD PRIMARY KEY (`chSoupId`);

--
-- Indexes for table `chsvegetable`
--
ALTER TABLE `chsvegetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `deliverorder`
--
ALTER TABLE `deliverorder`
  ADD PRIMARY KEY (`deliverOrderId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `FK_Customer` (`customer_id`);

--
-- Indexes for table `foodreservation`
--
ALTER TABLE `foodreservation`
  ADD PRIMARY KEY (`foodReservationId`);

--
-- Indexes for table `jpbread`
--
ALTER TABLE `jpbread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpdeepfried`
--
ALTER TABLE `jpdeepfried`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpnoodles`
--
ALTER TABLE `jpnoodles`
  ADD PRIMARY KEY (`jpNoodlesId`);

--
-- Indexes for table `jpporridge`
--
ALTER TABLE `jpporridge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jprice`
--
ALTER TABLE `jprice`
  ADD PRIMARY KEY (`jpRiceId`);

--
-- Indexes for table `jpsashimi`
--
ALTER TABLE `jpsashimi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jsfishseafood`
--
ALTER TABLE `jsfishseafood`
  ADD PRIMARY KEY (`JsfishseafoodId`);

--
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`latestNewsId`);

--
-- Indexes for table `onlineorder`
--
ALTER TABLE `onlineorder`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `alphaNumericOrderID` (`alphaNumericOrderID`);

--
-- Indexes for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD PRIMARY KEY (`rawMaterialId`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bddessert`
--
ALTER TABLE `bddessert`
  MODIFY `bdDessertId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `bddrink`
--
ALTER TABLE `bddrink`
  MODIFY `bdDrinkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `bdfish`
--
ALTER TABLE `bdfish`
  MODIFY `bdFishId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bdmashed`
--
ALTER TABLE `bdmashed`
  MODIFY `bdmashedId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bdmeat`
--
ALTER TABLE `bdmeat`
  MODIFY `bdMeatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bdrice_biriani`
--
ALTER TABLE `bdrice_biriani`
  MODIFY `bdRiceBirianiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `bdsnacks`
--
ALTER TABLE `bdsnacks`
  MODIFY `BDSnacksId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bdvegetable`
--
ALTER TABLE `bdvegetable`
  MODIFY `bdVegetableId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `chsappetizer`
--
ALTER TABLE `chsappetizer`
  MODIFY `chAppetizerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chsbeef`
--
ALTER TABLE `chsbeef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chschicken`
--
ALTER TABLE `chschicken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chsfish`
--
ALTER TABLE `chsfish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chsnoodles`
--
ALTER TABLE `chsnoodles`
  MODIFY `chsNoodlesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chsprawn`
--
ALTER TABLE `chsprawn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chsrice`
--
ALTER TABLE `chsrice`
  MODIFY `chsRiceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chssalad`
--
ALTER TABLE `chssalad`
  MODIFY `chSaladId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chssoup`
--
ALTER TABLE `chssoup`
  MODIFY `chSoupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chsvegetable`
--
ALTER TABLE `chsvegetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `deliverorder`
--
ALTER TABLE `deliverorder`
  MODIFY `deliverOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `foodreservation`
--
ALTER TABLE `foodreservation`
  MODIFY `foodReservationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `jpbread`
--
ALTER TABLE `jpbread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jpdeepfried`
--
ALTER TABLE `jpdeepfried`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jpnoodles`
--
ALTER TABLE `jpnoodles`
  MODIFY `jpNoodlesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jpporridge`
--
ALTER TABLE `jpporridge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jprice`
--
ALTER TABLE `jprice`
  MODIFY `jpRiceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jpsashimi`
--
ALTER TABLE `jpsashimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jsfishseafood`
--
ALTER TABLE `jsfishseafood`
  MODIFY `JsfishseafoodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `latestNewsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `onlineorder`
--
ALTER TABLE `onlineorder`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `rawMaterialId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `FK_Customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
