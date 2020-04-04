-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 09:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('RAFEED', 'rafeedrahmansham2015@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `cid` int(11) NOT NULL,
  `cvcnum` varchar(20) NOT NULL,
  `bankname` varchar(20) NOT NULL,
  `card_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`cid`, `cvcnum`, `bankname`, `card_number`) VALUES
(4, '213', 'NCC BANK', '11231215123'),
(4, '213', 'NCC BANK', '11231215123'),
(4, '213', 'NCC BANK', '11231215123'),
(4, '221', 'NCC BANK', '2137652385'),
(4, '123', 'UCB BANK', '2223'),
(4, '123', 'UCB BANK', '2223'),
(4, '123', 'UCB BANK', '2223'),
(4, '123', 'UCB BANK', '2223'),
(4, '123', 'UCB BANK', '2223'),
(4, '123', 'UCB BANK', '2223'),
(4, '123', 'UCB BANK', '2223'),
(4, '235', 'NCC BANK', '123456256'),
(4, '235', 'NCC BANK', '123456256'),
(4, '235', 'NCC BANK', '123456256'),
(4, '235', 'NCC BANK', '123456256'),
(4, '313', 'NCC BANK', '12345648'),
(4, '1212', 'NCC BANK', '123458'),
(4, '123123', 'NCC BANK', '54654'),
(4, '232', 'NCC BANK', '12315'),
(4, '232', 'NCC BANK', '12315'),
(4, '232', 'NCC BANK', '12315'),
(4, '212313', 'NCC BANK', '5'),
(4, '212313', 'NCC BANK', '5'),
(4, '212313', 'NCC BANK', '5'),
(4, '213132', 'NCC BANK', '546546'),
(4, '236', 'NCC BANK', '132546'),
(4, '656', 'NCC BANK', '12346'),
(4, '235', 'NCC BANK', '256325124895'),
(5, '1212', 'NCC BANK', '1234568452'),
(4, '213', 'NCC BANK', '1215432589'),
(4, '231', 'NCC BANK', '1313156546546'),
(4, '213', 'NCC BANK', '23264253255'),
(4, '213', 'NCC BANK', '23264253255');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `road_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `area`, `house_no`, `road_no`, `email`, `password`, `contact`) VALUES
(4, 'RAFEED', 'RAHMAN', 'ADABAR', '356', '4', 'rafeedrahmansham2015@gmail.com', 'MTIzNA==', '1950034337'),
(5, 'JUBAIR', 'TAHSIN', 'ADABAR', '123', '4', 'tahsin@gmail.com', 'MTIzNA==', '1523498652');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `mid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `generic` varchar(30) NOT NULL,
  `pharmaceutical` varchar(30) NOT NULL,
  `price` varchar(50) NOT NULL,
  `picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`mid`, `name`, `generic`, `pharmaceutical`, `price`, `picture`) VALUES
(4, 'ALATROL', 'ANTIHISTAMINE', 'SQUARE', '5', 0x616c6174726f6c2e6a7067),
(5, 'NAPA', 'PARACETAMOL', 'RENETA', '1', 0x6e6170612e6a7067),
(6, 'DISPRIN', 'ASPRIN', 'SQUARE', '1', 0x6469737072696e2e6a7067),
(7, 'TYCIL', 'AMOXILIN', 'SQUARE', '2', 0x747963696c2e6a7067),
(8, 'OMENIX', 'OMEPRAZOL', 'INCEPTA', '5', 0x6f6d656e69782e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `road_no` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pid`, `name`, `area`, `road_no`, `email`, `password`, `contact`) VALUES
(2, 'JIBON PHARMACY', 'ADABAR', '4', 'jibon@gmail.com', 'MTIzNA==', '1955003223'),
(3, 'MA PHARMACY', 'DHANMONDI', '4', 'ma@gmail.com', 'MTIzNA==', '1532498564'),
(4, 'SHEBA PHARMACY', 'ADABAR', '4', 'sheba@gmail.com', 'MTIzNA==', '1222555587');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `method` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`cid`, `pid`, `mid`, `quantity`, `price`, `method`, `date`) VALUES
(4, 2, 4, 4, 20, 'By Card', '2019-11-19 18:00:00'),
(4, 2, 4, 10, 50, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 5, 25, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 5, 7, 7, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 5, 7, 7, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 5, 7, 7, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 5, 7, 7, 'By Card', '2019-11-27 18:00:00'),
(4, 2, 4, 6, 30, 'By Card', '2019-11-29 18:00:00'),
(4, 2, 4, 4, 20, 'By Card', '2019-12-04 17:16:17'),
(4, 2, 4, 3, 15, 'By Card', '2019-12-04 17:17:27'),
(4, 2, 4, 4, 20, 'By Card', '2019-12-06 09:04:35'),
(4, 2, 6, 5, 5, 'By Card', '2019-12-07 16:51:46'),
(5, 2, 8, 4, 20, 'By Card', '2019-12-07 16:55:25'),
(4, 2, 6, 5, 5, 'By Card', '2019-12-08 07:07:51'),
(4, 2, 6, 6, 6, 'By Card', '2019-12-08 07:37:12'),
(4, 4, 5, 4, 4, 'By Card', '2019-12-09 16:18:14'),
(4, 4, 5, 4, 4, 'By Card', '2019-12-09 16:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `mid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`mid`, `pid`, `stock`) VALUES
(4, 2, 60),
(7, 2, 33),
(6, 2, 5),
(5, 4, 25),
(6, 4, 2565);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD KEY `mid` (`mid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card_info`
--
ALTER TABLE `card_info`
  ADD CONSTRAINT `card_info_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `medicines` (`mid`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `pharmacy` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
