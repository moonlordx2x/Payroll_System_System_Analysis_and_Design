-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 05:53 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sad`
--

-- --------------------------------------------------------

--
-- Table structure for table `20150001`
--

CREATE TABLE `20150001` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150001`
--

INSERT INTO `20150001` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150001, 6000, 721.37, 5278.63, '2017-10-17 05:54:13PM', 12, 500, 109, 50, 512.37, 50, 'Lagrimas', 'Neil Bryan', 'Rigor', '2017-10-17'),
(7, 20150001, 6000, 721.37, 5278.63, '2017-10-18 07:23:09AM', 12, 500, 109, 50, 512.37, 50, 'Lagrimas', 'Neil Bryan', 'Rigor', '2017-10-18'),
(8, 20150001, 6000, 721.37, 5278.63, '2018-01-20 11:40:48PM', 12, 500, 109, 50, 512.37, 50, 'Lagrimas', 'Neil Bryan', 'Rigor', '2018-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `20150002`
--

CREATE TABLE `20150002` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150002`
--

INSERT INTO `20150002` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150002, 6000, 721.37, 5278.63, '2017-10-17 06:02:06PM', 12, 500, 109, 50, 512.37, 50, 'Lagrimas', 'Bernadeth', 'Rigor', '2017-10-17'),
(3, 20150002, 7200, 975.89, 6224.11, '2017-10-18 10:32:19AM', 12, 600, 127.15, 50, 748.74, 50, 'Lagrimas', 'Bernadeth', 'Rigor', '2017-10-18'),
(4, 20150002, 12000, 2215.5, 9784.5, '2018-04-19 04:42:47PM', 12, 1000, 218, 50, 1872.5, 75, 'Lagrimas', 'Bernadeth', 'Rigor', '2018-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `20150003`
--

CREATE TABLE `20150003` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150003`
--

INSERT INTO `20150003` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150003, 7200, 767.49, 6432.51, '2017-10-17 06:06:00PM', 12, 600, 127.15, 50, 540.34, 50, 'Leguarda', 'Charles Karlo', 'Taba', '2017-10-17'),
(3, 20150003, 7200, 767.49, 6432.51, '2017-10-18 10:14:12AM', 12, 600, 127.15, 50, 540.34, 50, 'Leguarda', 'Charles Karlo', 'Taba', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `20150006`
--

CREATE TABLE `20150006` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150006`
--

INSERT INTO `20150006` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150006, 9600, 1080.65, 8519.35, '2017-10-17 06:06:52PM', 12, 800, 172.6, 50, 801.8, 56.25, 'Cailing', 'Ransom', 'Nigga', '2017-10-17'),
(2, 20150006, 7200, 564.698, 6635.3, '2017-10-18 10:14:37AM', 12, 600, 127.15, 50, 337.547, 50, 'Cailing', 'Ransom', 'Nigga', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `20150007`
--

CREATE TABLE `20150007` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150007`
--

INSERT INTO `20150007` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150007, 4800, 4800, 0, '2017-10-17 06:07:41PM', 12, 400, 81.75, 50, 4618.25, 50, 'Rakim', 'Alhidaya', 'Pangcoga', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150008`
--

CREATE TABLE `20150008` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150008`
--

INSERT INTO `20150008` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150008, 6600, 328.845, 6271.15, '2017-10-17 06:08:53PM', 11, 600, 118.1, 50, 110.745, 50, 'Gaviola', 'Zyrah', 'Elcamel', '2017-10-17'),
(2, 20150008, 7200, 278.565, 6921.44, '2017-10-18 11:53:29AM', 12, 600, 127.15, 50, 51.415, 50, 'Gaviola', 'Zyrah', 'Elcamel', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `20150009`
--

CREATE TABLE `20150009` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150009`
--

INSERT INTO `20150009` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150009, 6000, 525.57, 5474.43, '2017-10-17 06:09:10PM', 12, 500, 109, 50, 316.57, 50, 'Dapigan', 'Renz', 'Kamui', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150011`
--

CREATE TABLE `20150011` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150011`
--

INSERT INTO `20150011` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150011, 6000, 369.27, 5630.73, '2017-10-17 06:09:25PM', 12, 500, 109, 50, 160.27, 50, 'Castillo', 'Charles', 'Evan', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150012`
--

CREATE TABLE `20150012` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150012`
--

INSERT INTO `20150012` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150012, 6330, 279.43, 6050.57, '2017-10-17 06:09:38PM', 10, 633, 109, 50, 70.43, 50, 'Dagongdong', 'Romeo', 'Pudding', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150013`
--

CREATE TABLE `20150013` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150013`
--

INSERT INTO `20150013` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150013, 6000, 6000, 0, '2017-10-17 06:10:11PM', 12, 500, 109, 50, 5791, 50, 'Compedio', 'Micheal Von', 'Puto', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150016`
--

CREATE TABLE `20150016` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150016`
--

INSERT INTO `20150016` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150016, 6000, 369.27, 5630.73, '2017-10-17 06:11:44PM', 12, 500, 109, 50, 160.27, 50, 'Lagrimas', 'Maximo', 'Rigor', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150017`
--

CREATE TABLE `20150017` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150017`
--

INSERT INTO `20150017` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150017, 6000, 369.27, 5630.73, '2017-10-17 06:22:54PM', 12, 500, 109, 50, 160.27, 50, 'Lagrimas', 'Maximo', 'Guipetacio', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `20150018`
--

CREATE TABLE `20150018` (
  `list` int(10) NOT NULL,
  `id` int(8) DEFAULT NULL,
  `gross` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `net` float DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `work` int(8) DEFAULT NULL,
  `rate` int(8) DEFAULT NULL,
  `sss` float DEFAULT NULL,
  `ibig` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `phil` float DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mid` varchar(30) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20150018`
--

INSERT INTO `20150018` (`list`, `id`, `gross`, `total`, `net`, `date_time`, `work`, `rate`, `sss`, `ibig`, `tax`, `phil`, `lname`, `fname`, `mid`, `local`) VALUES
(1, 20150018, 8400, 1242.26, 7157.74, '2017-10-17 06:26:49PM', 12, 700, 145.35, 50, 996.912, 50, 'Lagrimas', 'Kent', 'Rigor', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN`, `password`) VALUES
('ADMIN', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID_NUM` bigint(8) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(45) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID_NUM`, `Last_name`, `First_name`, `mid_name`, `age`, `gender`, `birthday`, `address`, `status`) VALUES
(20150001, 'Lagrimas', 'Neil Bryan', 'Rigor', 18, 'Male', '1998-04-12', 'Ecoland Drive , Davao City', 'Single'),
(20150002, 'Lagrimas', 'Bernadeth', 'Rigor', 48, 'Female', '1982-02-28', 'Calinan , Davao City', 'Married'),
(20150003, 'Leguarda', 'Charles Karlo', 'Taba', 19, 'Female', '1998-07-13', 'Ecolandd', 'Single w/1 Dependent'),
(20150007, 'Rakim', 'Alhidaya', 'Pangcoga', 69, 'Female', '1976-03-24', 'Matina , Davao City', 'Single w/3 Dependent'),
(20150006, 'Cailing', 'Ransom', 'Ling', 19, 'Male', '1998-12-25', 'Buhangin', 'Single w/2 Dependent'),
(20150008, 'Gaviola', 'Zyrah', 'Elcamel', 19, 'Female', '2017-12-31', 'Mintal', 'Married w/4 Dependent'),
(20150009, 'Dapigan', 'Renz', 'Kamui', 19, 'Male', '1998-12-12', 'Ecoland', 'Married w/1 Dependent'),
(20150011, 'Castillo', 'Charles', 'Evan', 19, 'Male', '1998-12-12', 'Calinan , Davao City', 'Married w/2 Dependent'),
(20150012, 'Dagongdong', 'Romeo', 'Pudding', 19, 'Male', '2017-10-10', 'Mintal', 'Married w/3 Dependent'),
(20150013, 'Compedio', 'Micheal Von', 'Puto', 19, 'Male', '1998-05-18', 'Mintal , Davao City', 'Married w/4 Dependent'),
(20150014, 'Edyesca', 'Alexandra Marie', 'Yuan', 19, 'Female', '1998-11-23', 'Bangkal', 'Married'),
(20150018, 'Lagrimas', 'Kent', 'Rigor', 18, 'Male', '1999-08-09', 'Purok 17 Lazona Village Calinan, Davao City', 'Single'),
(20150016, 'Lagrimas', 'Maximo', 'Rigor', 54, 'Male', '1963-07-30', 'Calinan ,davao City', 'Married w/2 Dependent'),
(20150017, 'Lagrimas', 'Maximo', 'Guipetacio', 54, 'Male', '1963-07-30', 'Purok 17 Lanzona Village Calinan Davao City', 'Married w/2 Dependent'),
(20150020, 'Asdas', 'Asdas', 'Asdsad', 19, 'Male', '2018-02-26', 'Asdasdas', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `ID_NUM` int(8) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `20150001`
--
ALTER TABLE `20150001`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150002`
--
ALTER TABLE `20150002`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150003`
--
ALTER TABLE `20150003`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150006`
--
ALTER TABLE `20150006`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150007`
--
ALTER TABLE `20150007`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150008`
--
ALTER TABLE `20150008`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150009`
--
ALTER TABLE `20150009`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150011`
--
ALTER TABLE `20150011`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150012`
--
ALTER TABLE `20150012`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150013`
--
ALTER TABLE `20150013`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150016`
--
ALTER TABLE `20150016`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150017`
--
ALTER TABLE `20150017`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `20150018`
--
ALTER TABLE `20150018`
  ADD PRIMARY KEY (`list`),
  ADD UNIQUE KEY `local` (`local`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID_NUM`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`ID_NUM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `20150001`
--
ALTER TABLE `20150001`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `20150002`
--
ALTER TABLE `20150002`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `20150003`
--
ALTER TABLE `20150003`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `20150006`
--
ALTER TABLE `20150006`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `20150007`
--
ALTER TABLE `20150007`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150008`
--
ALTER TABLE `20150008`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `20150009`
--
ALTER TABLE `20150009`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150011`
--
ALTER TABLE `20150011`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150012`
--
ALTER TABLE `20150012`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150013`
--
ALTER TABLE `20150013`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150016`
--
ALTER TABLE `20150016`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150017`
--
ALTER TABLE `20150017`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `20150018`
--
ALTER TABLE `20150018`
  MODIFY `list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID_NUM` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20150021;
--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `ID_NUM` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20150018;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
