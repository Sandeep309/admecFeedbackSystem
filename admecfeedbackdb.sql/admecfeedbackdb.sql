-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2021 at 11:34 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17278982_admecfeedbackdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedback`
--

CREATE TABLE `studentfeedback` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coursesatisfaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructersatisfaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courseimprovement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specificfeedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `bin` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentfeedback`
--

INSERT INTO `studentfeedback` (`id`, `fullname`, `studentid`, `email`, `phonenumber`, `teachername`, `coursesatisfaction`, `instructersatisfaction`, `courseimprovement`, `specificfeedback`, `status`, `bin`, `date`) VALUES
(76, 'rahul saini', 'rahu1212', 'rahul@gmail.com', '9568956895', 'Mr. Manish kumar', 'Good', 'Good', 'Real-world Application,Slow down pace,', 'bestest', 0, 0, '2021-02-06 08:41:50'),
(97, 'vinay tete', 'ad/rh/wm/05-19/17', 'vinay@gmail.com', '8968574222', 'Mrs. Promila mam', 'Neutral', 'Neutral', 'Real-world Application,', 'goooood', 0, 0, '2021-03-08 12:36:34'),
(82, 'ragav sen', 'ad/rh/wm/01-19/15', 'ragav@gmail.com', '969598969598', 'Mr. Ravi Bhaduria', 'Very Poor', 'Very Poor', 'Accent is hard to understad,', '', 0, 0, '2021-02-26 06:24:04'),
(77, 'priyanka saini', 'piya9797', 'priya9797@gmail.com', '9898989898', 'Mr. Manish kumar', 'Excellent', 'Excellent', 'I dont have any issue,', 'thanks', 0, 0, '2021-02-06 12:37:23'),
(73, 'rahul saini', 'rahu1212', 'rahul@gmail.com', '9568956895', 'Mr. Nishu sir', 'Good', 'Excellent', 'Speed down pace,I dont have any issue,', 'ff', 0, 0, '2021-02-06 08:19:58'),
(83, 'admec com', 'ad/rm/wm/01-19/69', 'admec@gmail.com', '87659675548', 'Mrs. Promila mam', 'Good', 'Excellent', 'Accent is hard to understad,', 'great teacher', 0, 0, '2021-02-26 06:26:30'),
(96, 'luv pandey', 'ad/rh/wm/01-19/15', 'luv@gmail.com', '9968574222', 'Mr. Deepak Bhaduria', 'Good', 'Good', 'Speed down pace,', 'dcadef', 0, 0, '2021-03-06 10:46:17'),
(98, 'sandeep saini', 'AA/AA/AA/00-00/00', 'example12@gmail.com', '9568597658', 'Mr. Ravi Bhaduria', 'Excellent', 'Good', 'Speed down pace,', '', 0, 0, '2021-07-20 08:56:45'),
(99, 'elon musk', 'AA/AA/AA/00-00/00', 'elon@gmail.com', '9568597658', 'Mr. Deepak Bhaduria', 'Neutral', 'Excellent', 'Accent is hard to understad,Speed down pace,', '', 0, 0, '2021-07-20 11:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `time`) VALUES
(8, 'admin admec', 'admin@gmail.com', 'admin1212', '2021-03-14 12:23:33'),
(7, 'sandeep saini', 'sandeep@gmail.com', 'sandeep1', '2021-03-14 12:22:27'),
(9, 'admin k', 'admin1@gmail.com', 'admin123', '2021-03-14 12:26:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
