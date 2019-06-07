-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2019 at 12:14 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `del`
--

CREATE TABLE `del` (
  `card` varchar(11) NOT NULL,
  `money` varchar(11) NOT NULL,
  `cas` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `del`
--

INSERT INTO `del` (`card`, `money`, `cas`, `time`) VALUES
('286341777', '120', '', '2019-05-28 22:40:33'),
('312123414', '50', '', '2019-05-28 22:40:42'),
('312123414', '85', '', '2019-05-29 00:10:39'),
('286341777', '285', '', '2019-05-29 00:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `ins`
--

CREATE TABLE `ins` (
  `card` varchar(10) NOT NULL,
  `money` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cas` varchar(20) NOT NULL,
  `pro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ins`
--

INSERT INTO `ins` (`card`, `money`, `date`, `cas`, `pro`) VALUES
('286341777', '120.0', '2019-05-28 22:38:28', '', 3),
('312123414', '50', '2019-05-28 22:38:38', '', 0),
('312123414', '50', '2019-05-28 22:41:23', '', 0),
('286341777', '120.0', '2019-05-28 22:41:31', '', 3),
('312123414', '50', '2019-05-28 22:41:38', '', 0),
('312123414', '50', '2019-05-28 22:41:47', '', 0),
('312123414', '50', '2019-05-28 22:41:58', '', 0),
('312123414', '50', '2019-05-28 22:42:08', '', 0),
('312123414', '50', '2019-05-28 23:08:04', '', 0),
('286341777', '120.0', '2019-05-28 23:08:11', '', 3),
('1', '105.00', '2019-05-28 23:20:49', '', 1),
('2', '110.0', '2019-05-29 00:00:50', '', 2),
('312123414', '50', '2019-05-29 00:03:49', '', 0),
('286341777', '120.0', '2019-05-29 00:03:57', '', 3),
('312123414', '50', '2019-05-29 00:11:45', '', 0),
('312123414', '50', '2019-05-29 00:11:53', '', 0),
('286341777', '120.0', '2019-05-29 00:12:27', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `card` int(10) NOT NULL,
  `ชือ` varchar(10) NOT NULL,
  `money` text NOT NULL,
  `pro` int(10) NOT NULL,
  `extra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`card`, `ชือ`, `money`, `pro`, `extra`) VALUES
(1, '44444', '105', 1, ''),
(2, '222', '110', 2, ''),
(3, '222', '', 3, ''),
(286341777, 'yhhy88y', '120', 3, '1'),
(312123414, '', '30', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `post3`
--

CREATE TABLE `post3` (
  `card` int(10) NOT NULL,
  `money` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `postall`
--

CREATE TABLE `postall` (
  `card` varchar(20) NOT NULL,
  `money` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postall`
--

INSERT INTO `postall` (`card`, `money`, `post`, `date`) VALUES
('312123414', '10', '1', '2019-05-28 23:01:09'),
('312123414', '30', '1', '2019-05-28 23:01:22'),
('312123414', '45', '1', '2019-05-28 23:06:18'),
('312123414', '30', '1', '2019-05-28 23:11:34'),
('312123414', '10', '1', '2019-05-29 00:12:00'),
('312123414', '50', '1', '2019-05-29 00:12:08'),
('312123414', '10', '1', '2019-05-29 00:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` int(10) NOT NULL,
  `userpassword` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`card`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
