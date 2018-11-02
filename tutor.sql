-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 04:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `addInfo` varchar(255) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `class`, `sub`, `addInfo`, `t_id`) VALUES
(11, '5', 'Higher Math', 'hello', 17),
(12, '5,8,10,12', 'General Math,Higher Math,English', 'hi', 18),
(13, '5,8,10,12', 'General Math,Higher Math,English,General Science,Physics,Biology,Chemistry,ICT', '2 years', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `instituteName` varchar(40) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `phnNo` decimal(30,0) NOT NULL,
  `tInform` varchar(255) NOT NULL,
  `deptName` varchar(255) NOT NULL,
  `session` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fbId` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `addInfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `firstName`, `lastName`, `instituteName`, `profilePic`, `phnNo`, `tInform`, `deptName`, `session`, `email`, `fbId`, `class`, `sub`, `addInfo`) VALUES
(18, 'bb', 'b', 'BU', 'images/20180122_100042.jpg', '667', 'I am bipul', 'bb', '556', 'gg@gmail.com', 'www.facebook.com/game.bipul', '5,8', 'General Math,Higher Math,English', '2 years'),
(19, 'Bipul  ', 'Mandol ', 'University Of Barisal ', 'images/28422970_559899541059945_1190944433292072377_o.jpg', '1971502718', 'I am bipul ', 'CSE ', '2015-2016 ', 'mbbipulmandol.cse3.bu@gmail.com', 'www.facebook.com/game.bipul ', '5,10,12', 'General Math,Higher Math,English,General Science,Physics,Biology,Chemistry,ICT', 'hi'),
(20, 'bvb', 'bb', 'bu ', 'images/P_20171219_132516.jpg', '67576786', 'i am fddf', 'fgsfd', '2016-2017 ', 'dfdfi@gmail.com', 'yf ', '5,8,10', 'English,General Science,Physics', '2 years'),
(21, 'bb', 'bb', 'University Of Barisal', 'images/25463537_526805864369313_110137296_n.jpg', '1971502718', 'I am bipul', 'CSE', '2015-2016', 'mbbipulmandol.cse3.bu@gmail.com', 'www.facebook.com/game.bipul', '8,10,12', 'Higher Math,English', 'hi'),
(22, 'sama', 'dssd', 'dd', 'images/800px_COLOURBOX10557177.jpg', '56666666666', 'I am bipul', 'srdr', '76', 'mjb@gmail.com', 'www.facebook.com/game.bipul', '1,2,3,4,5,6,7,8,9,10,11,12', 'English,General Science,Physics,Chemistry', '2 years'),
(23, 'v bbncv', 'v vc', 'vvc', 'images/800px_COLOURBOX10557177.jpg', '654', 'fgccf', 'gcg', 'cggc', 'cfc@gmail.com', 'fc', '1,2,3,4,5,6,7,8,9,10', 'General Science,Physics,Chemistry', 'H'),
(24, 'joy', 'sarkar', 'Barisal university', 'images/36086895_660589894286478_5298289179812167680_n.jpg', '1941233500', 'I am joy sarkar', 'Computer Science and Engineering', '2015-2016', 'mbbipulmandol.cse3.bu@gmail.com', 'joy srkr', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
