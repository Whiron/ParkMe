-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2018 at 06:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2820171_test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `1test`
--

CREATE TABLE `1test` (
  `sr_no` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `en_no` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(31) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(26) CHARACTER SET utf8 DEFAULT NULL,
  `qr_code` text CHARACTER SET utf8 NOT NULL,
  `atd` varchar(1) DEFAULT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1test`
--

INSERT INTO `1test` (`sr_no`, `en_no`, `name`, `email`, `qr_code`, `atd`, `mail`) VALUES
('1', '150320107036', 'JAYMISH PATEL', 'jaymishrpatel@gmail.com', 'C:/wamp/www/N18a/images/1.png', 'P', 'jay@gmail.com'),
('2', '150320107023', 'Bhavya Doshi', 'libhojani@gmail.com', 'C:/wamp/www/N18a/images/2.png', 'P', 'jay@gmail.com'),
('3', '150320107011', 'Manthan Chavda', 'jaymishpatel1997@gmail.com', 'C:/wamp/www/N18a/images/3.png', 'P', 'jaymish@gmail.com'),
('4', '150320107110', 'Jaimin Shingala', 'virajf987@gmail.com', 'C:/wamp/www/N18a/images/4.png', 'P', 'jaymish@gmail.com'),
('5', '150320107518', 'LATHIGARA VIRAJKUMAR FALGUNBHAI', 'viraj.lathigara@gmail.com', 'C:/wamp/www/N18a/images/5.png', 'P', 'jay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `android_php_post`
--

CREATE TABLE `android_php_post` (
  `id` int(5) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `encrypted_password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `android_php_post`
--

INSERT INTO `android_php_post` (`id`, `name`, `email`, `encrypted_password`, `salt`, `gender`, `age`) VALUES
(2, 'jay', 'jay@gmail.com', 'URIwxi69vFivIUVRSAILAh4vNJ1mY2RmYzAzNzdk', 'fcdfc0377d', 'PAYMEN', 19),
(3, 'jay', 'jaymish@gmail.com', 'ihGJEmzMkAH3vAKZ7vjHssiBvOMzZDY4Njk4NTMy', '3d68698532', 'ATTEND', 19),
(4, 'Junrd', 'admin', 't7OEbEi8HxgOlJIWj3MN9bnNDJpjNGMyNDQzMjcx', 'c4c2443271', 'ATTEND', 19),
(5, 'Manthan', 'manthan077@gmail.com', 'KxswKSEZ0H2HzwV5M1pFbZ5HhxxjYjY5ZTYyMDU2', 'cb69e62056', 'PAYMEN', 21);

-- --------------------------------------------------------

--
-- Table structure for table `android_php_post_reg`
--

CREATE TABLE `android_php_post_reg` (
  `id` int(5) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `encrypted_password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `android_php_post_reg`
--

INSERT INTO `android_php_post_reg` (`id`, `name`, `email`, `encrypted_password`, `salt`, `gender`, `age`) VALUES
(1, 'jaimin', 'jaimin@gmail.com', 'mq+y6EpzXl6K87SQAvCLRMgm55k0Njk0OTg3OGRm', '46949878df', 'Male', 19),
(4, 'manthsn', 'manthan@gmail.com', 'cNrjhvSc1jhjeswyx4V/4ZPSfFdiYjJmMWZkMmFj', 'bb2f1fd2ac', 'Male', 19);

-- --------------------------------------------------------

--
-- Table structure for table `temp2`
--

CREATE TABLE `temp2` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `T_n` int(11) NOT NULL,
  `Blind_Coding` int(11) NOT NULL,
  `Error_debug` int(11) NOT NULL,
  `M_ethics` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `M_ethics_name` text NOT NULL,
  `M_ethics_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp2`
--

INSERT INTO `temp2` (`Name`, `Email`, `Subject`, `T_n`, `Blind_Coding`, `Error_debug`, `M_ethics`, `Total`, `M_ethics_name`, `M_ethics_email`) VALUES
('jaymishp', 'jaymish@gmail.com', '09879224824', 9, 1, 0, 0, 20, '', ''),
('jaymishptl', 'jaymish@gmail.com', '09879224824', 10, 1, 0, 1, 120, 'parth', 'parth@gmail.com'),
('jaymish_111', 'jaymish@gmail.com', '09879224824', 20180001, 1, 0, 0, 20, '', ''),
('jaymish_11', 'jaymish@gmail.com', '09879224824', 20180002, 1, 0, 0, 20, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `sr_no` varchar(5) DEFAULT NULL,
  `en_no` varchar(13) DEFAULT NULL,
  `name` varchar(31) DEFAULT NULL,
  `email` varchar(26) DEFAULT NULL,
  `qr_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`sr_no`, `en_no`, `name`, `email`, `qr_code`) VALUES
('1', '150320107036', 'JAYMISH PATEL', 'jaymishrpatel@gmail.com', ''),
('2', '150320107023', 'Bhavya Doshi', 'libhojani@gmail.com', ''),
('3', '150320107011', 'Manthan Chavda', 'jaymishpatel1997@gmail.com', ''),
('4', '150320107110', 'Jaimin Shingala', 'virajf987@gmail.com', ''),
('5', '150320107518', 'LATHIGARA VIRAJKUMAR FALGUNBHAI', 'viraj.lathigara@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `uname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`) VALUES
(1, ''),
(2, 'Jaymish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `android_php_post`
--
ALTER TABLE `android_php_post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `android_php_post_reg`
--
ALTER TABLE `android_php_post_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `temp2`
--
ALTER TABLE `temp2`
  ADD PRIMARY KEY (`T_n`),
  ADD UNIQUE KEY `T_n` (`T_n`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `android_php_post`
--
ALTER TABLE `android_php_post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `android_php_post_reg`
--
ALTER TABLE `android_php_post_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp2`
--
ALTER TABLE `temp2`
  MODIFY `T_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20180003;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
