-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 03:17 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooper`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(100) NOT NULL,
  `branch_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_title`) VALUES
(1, 'Dhanmondi 27'),
(2, 'New market'),
(3, 'Mirpur 1'),
(4, 'Mirpur 10'),
(5, 'Uttara'),
(6, 'Lalbag');

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `cake_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `branch_id` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `cake_title` text NOT NULL,
  `cake_img1` text NOT NULL,
  `cake_price` int(100) NOT NULL,
  `cake_desc` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cake_id`, `cat_id`, `branch_id`, `date`, `cake_title`, `cake_img1`, `cake_price`, `cake_desc`, `status`) VALUES
(40, 6, 6, '2019-03-21 07:04:58.000000', 'Black_berry', '1.jpg', 400, '<p>VERY GOOD</p>', 'on'),
(41, 6, 6, '2019-03-21 07:05:52.000000', 'Stawbarry', '11.png', 400, '<p>good</p>', 'on'),
(42, 6, 6, '2019-03-21 07:18:43.000000', 'vanilla', '4.png', 350, '<p><strong>good</strong></p>', 'on'),
(46, 6, 6, '2019-03-21 09:57:09.000000', 'chocolate', '12.png', 300, '<p><strong>fg</strong></p>', 'on'),
(47, 6, 6, '2019-03-21 10:42:42.000000', 'chocolate', '10.png', 300, '<p><strong>good cake</strong></p>', 'on'),
(48, 6, 6, '2019-03-27 15:03:44.000000', 'chocolate', '10.png', 300, '<p><strong>good cake</strong></p>', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `p_id` int(100) NOT NULL,
  `ip_add` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_title`) VALUES
(1, 'Strawberry Cake'),
(2, 'Chocolate Cake'),
(3, 'Rose Cake'),
(4, 'White Cake'),
(5, 'Vanilla Cake'),
(6, 'Vanilla-Chocolate Cake');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `id` int(100) NOT NULL,
  `CakeName` varchar(100) NOT NULL,
  `CakeDesign` int(100) NOT NULL,
  `KGPrice` varchar(200) NOT NULL,
  `Wish` varchar(200) NOT NULL,
  `Branchname` varchar(100) NOT NULL,
  `DeliveryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`id`, `CakeName`, `CakeDesign`, `KGPrice`, `Wish`, `Branchname`, `DeliveryDate`) VALUES
(2, 'Rose Cake', 2, '.5 KG & Price 200 taka only', 'happy', 'Dhanmondi27', '2019-02-27'),
(3, 'Rose Cake', 2, '.5 KG & Price 200 taka only', 'happy', 'Dhanmondi27', '2019-02-27'),
(4, 'Strawberry Cake', 0, '.5 KG & Price 200 taka only', '', 'Dhanmondi27', '0000-00-00'),
(5, 'Vanilla Cake', 1, '1 KG & Price 400 taka only', 'happy', 'Mirpur1', '2019-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `Fullname` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `Bday` date NOT NULL,
  `Phonenumber` int(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Fullname`, `Email`, `Gender`, `Bday`, `Phonenumber`, `Address`, `Password`) VALUES
(1, 'fghj', 'jony1234@gmail.com', 'male', '2019-02-14', 34567, 'fghjk', 'cfghhb'),
(4, 'jony', 'jony154318@gmail.com', 'male', '2019-02-07', 123543, 'cxz', 'fdxsz'),
(10, 'alok', 'alok12@gmail.com', 'male', '2019-02-08', 2345, 'dfghjk', 'alok'),
(19, 'jony', 'jony154318@gmail.com', 'female', '2019-02-05', 1256, 'fdxgaer', '123456'),
(29, 'labonno aduree', 'labonnoaduree22@gmail.com', 'female', '1995-03-25', 1990958827, 'rangpur', 'joree'),
(30, 'joree', 'labonnoaduree22@gmail.com', 'female', '2019-03-13', 1717886456, 'rangpur', 'joree11'),
(31, 'joree', 'labonnoaduree22@gmail.com', 'female', '2019-03-13', 1717886456, 'rangpur', 'joree11'),
(32, 'bijoy', 'a@gmail.com', 'male', '1990-12-12', 1521438433, 'dhaka', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `cake_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
