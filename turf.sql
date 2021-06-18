-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 07:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `service` int(255) NOT NULL,
  `equipment` int(255) NOT NULL,
  `extra_charge` int(255) NOT NULL,
  `tcost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `id`, `username`, `service`, `equipment`, `extra_charge`, `tcost`) VALUES
(9, '25', '', 1000, 100, 300, 1400),
(10, '25', '', 10000, 500, 4000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `type` varchar(8) NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `req_time` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `turf_name` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `manid` int(11) NOT NULL,
  `finished` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `username`, `type`, `req_date`, `req_time`, `event_type`, `turf_name`, `addres`, `email`, `mobile`, `confirmation`, `manid`, `finished`, `paid`) VALUES
(54, 'Siddharrth GM', 'siddhu', 'hourly', '03/03/2021', '2 a.m', 'cricket', '', 'Erode - Perundurai - Kangeyam Rd, Perundurai, Tamil Nadu 638052, India', 'siddhumahi01@gmail.com', 2147483647, 1, 22, 1, 1),
(55, 'kannan', 'siddhu', 'day', '03/03/2021', '1 a.m', 'volleyball', '', '16 Erode Road kandhampalayam', 'siddhumahi01@gmail.com', 2147483647, 1, 0, 0, 0),
(56, 'siddhu mahi', 'siddhu', 'hourly', '03/31/2021', '3 a.m', 'football', '', 'Perundurai', 'siddhumahi@gmail.com', 2147483647, 0, 0, 0, 0),
(57, 'siddharrth', 'siddhu', '', '03/31/2021', '3 a.m', 'cricket', '', 'sdfg', 'siddhumahi@gmail.com', 2147483647, 0, 0, 0, 0),
(58, 'siddhu mahi', 'siddhu', 'hourly', '03/11/2021', '1 a.m', 'tennis', '', 'address', 'siddhumahi@gmail.com', 2147483647, 0, 0, 0, 0),
(59, 'siddhu mahi', 'siddhu', '', '03/31/2021', '3 a.m', 'batminton', '', 'address', 'siddhumahi@gmail.com', 2147483647, 0, 0, 0, 0),
(60, 'siddhu mahi', 'siddhu', 'hourly', '2021-04-27', '1 a.m', 'batminton', '', 'erode', 'siddhumahi@gmail.com', 908654321, 0, 0, 0, 0),
(61, 'siddhu mahi', 'siddhu', 'hourly', '2021-04-29', '2 a.m', 'volleyball', '', 'sa', 'siddhumahi@gmail.com', 987654321, 0, 0, 0, 0),
(62, 'siddharrth', 'siddhu', 'hourly', '2021-04-29', '3 a.m', 'football', '', 'erode', 'siddhumahi@gmail.com', 1234567890, 0, 0, 0, 0),
(63, 'vaishnave', 'siddhu', 'hourly', '2021-05-11', '3 a.m', 'cricket', '', 'erode', 'vaishmahi98@gmail.com', 2147483647, 0, 0, 0, 1),
(64, 'siddhu mahi', 'siddhu', '', '2021-05-13', '6 a.m', 'tennis', '', 'erode', 'siddhumahi@gmail.com', 987654321, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `turf_cost` int(11) NOT NULL,
  `extra_cost` varchar(11) NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `booking_id`, `username`, `turf_cost`, `extra_cost`, `total_cost`, `paid`) VALUES
(13, '47', 'fahad', 850, '100', '950', 1),
(15, '48', 'fahad', 850, '100', '950', 1),
(18, '49', 'fahad', 1000, '100', '1100', 1),
(19, '51', 'fahad', 1250, '100', '1350', 1),
(20, '52', 'fahad', 850, '100', '950', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manid` int(11) NOT NULL,
  `manname` varchar(255) NOT NULL,
  `manjoin` varchar(255) NOT NULL,
  `manmobile` varchar(20) NOT NULL,
  `turfnam` varchar(30) NOT NULL,
  `manaddress` varchar(255) NOT NULL,
  `manphoto` varchar(30) NOT NULL,
  `man_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manid`, `manname`, `manjoin`, `manmobile`, `turfnam`, `manaddress`, `manphoto`, `man_available`) VALUES
(24, 'Rayappan', '05/15/2020', '9087654331', 'Turf 365', ' erode', 'download.png', 0),
(25, 'Michael', '02/20/2018', '890123567', 'Play Qube', 'thindal ', 'download.png', 0),
(26, 'maruti', '12/13/2011', '9012345556', 'Sports village', 'erode ', 'download.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `turfdetail`
--

CREATE TABLE `turfdetail` (
  `turf_id` int(11) NOT NULL,
  `turf_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `regdate` date DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `turf_photo` varchar(255) NOT NULL,
  `turf_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turfdetail`
--

INSERT INTO `turfdetail` (`turf_id`, `turf_name`, `address`, `type`, `regdate`, `description`, `turf_photo`, `turf_available`) VALUES
(1, 'Turf 365', 'Nasiyanur road,Erode.', 'Indoor', '2012-03-01', 'This turf has all the equipments. It is sanitized well.', '1.jpg', 0),
(2, 'Play Qube', 'Bharathiyar street,Thindal', 'Indoor', '2015-04-04', ' This turf is well sanitized. And it is maintained pitch', '2.jpg', 0),
(3, 'Sports Village', 'Near Westside,Teacher\'s colony', 'Indoor', '2021-02-15', 'This turf is well sanitized. And it is maintained pitch', 'images.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `admin`) VALUES
(15, 'siddhu', 'mahi', 'siddhumahi@gmail.com', 'siddhu', 'siddhu', 0),
(16, 'sai', 'prakesh', 'sai@gmail.com', 'sai', 'sai', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manid`);

--
-- Indexes for table `turfdetail`
--
ALTER TABLE `turfdetail`
  ADD PRIMARY KEY (`turf_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `turfdetail`
--
ALTER TABLE `turfdetail`
  MODIFY `turf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
