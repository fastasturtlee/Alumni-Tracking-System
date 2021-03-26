-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 04:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `career_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ispublish` tinyint(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`career_id`, `title`, `description`, `location`, `duration`, `work_type`, `salary`, `link`, `ispublish`, `date`) VALUES
(1, 'engineer updated', 'engineer', 'mumbai', 'min 2 year', 'full time', 0, 'https://www.google.com/', 1, '2021-03-12'),
(3, 'teting', 'testing', 'thane', '', 'internship', 0, '', 1, '2021-03-13'),
(4, 'xyz testing', 'xyz', 'slrte1', 'min 2 year', 'full time', 0, '', 1, '2021-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `chirps`
--

CREATE TABLE `chirps` (
  `chirp_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chirps`
--

INSERT INTO `chirps` (`chirp_id`, `description`, `username`, `created_at`) VALUES
(1, 'chirppp hereeee', 'Tarun', '0000-00-00 00:00:00'),
(2, 'chirpp here 222\r\n', 'Tarun', '2021-03-25 22:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `ern_no`
--

CREATE TABLE `ern_no` (
  `id` int(11) NOT NULL,
  `ern_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ern_no`
--

INSERT INTO `ern_no` (`id`, `ern_no`) VALUES
(107, 1234644),
(108, 32442344),
(109, 21233),
(110, 12334225),
(111, 123345),
(112, 6132345),
(113, 123464783),
(114, 83838792);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `organizer_contact` bigint(20) NOT NULL,
  `ispublish` tinyint(1) NOT NULL DEFAULT 1,
  `date_posted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `venue`, `state`, `city`, `day`, `month`, `year`, `organizer_name`, `organizer_contact`, `ispublish`, `date_posted`) VALUES
(2, 'aaa updated 1', 'aaaaaa', 'aaa', 'aa', 'aa', 3, 'Select Month', 0, 'aaaa', 9109330112, 1, '2021-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `ispublish` tinyint(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `body`, `ispublish`, `date`) VALUES
(1, 'ajdoijap updated', 'adjoaddio', 1, '2021-03-08'),
(2, 'aodjoi dlkjac', 'kjsoa n,,a pkd d', 1, '2021-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify` int(11) NOT NULL DEFAULT 0,
  `ern_no` bigint(20) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `passout_year` int(11) NOT NULL,
  `proffession` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'alumni',
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `emailid`, `full_name`, `profile_pic`, `mobileno`, `password`, `verify`, `ern_no`, `degree`, `branch`, `passout_year`, `proffession`, `company_name`, `income`, `user_type`, `created_at`) VALUES
(1, 'sandy', 'sandy@mail.com', 'sandhya gaud', '', 123456, 'e6e061838856bf47e1de730719fb2609', 1, 1234322, 'BE', 'CMPN', 2021, '', '', '0', 'admin', '0000-00-00'),
(4, 'shaan', 'shaan@mail.com', 'shaan', '', 54345643234, '81dc9bdb52d04dc20036dbd8313ed055', 0, 877872, 'BE', 'cmpn', 2021, '', '', '', 'admin', '2021-03-08'),
(6, 'xyz', 'jslshashank27@gmail.com', 'Shashank Rajkamal Jaiswal', '', 7021420113, '21232f297a57a5a743894a0e4a801fc3', 0, 9876789871, 'BE', 'CMPN', 0, '', '', '', 'alumni', '2021-03-11'),
(7, 'shaifali', 'shaifali@mail.com', 'shaifali', '', 9876569, 'e6e061838856bf47e1de730719fb2609', 1, 7678467, 'BE', 'CMPN', 0, '', '', '', 'alumni', '0000-00-00'),
(8, 'Tarun', 'tarun@mail.com', 'tarun', '', 8767876, 'e6e061838856bf47e1de730719fb2609', 1, 87678767, 'BE', 'Cmpn', 0, '', '', '', 'alumni', '0000-00-00'),
(9, 'shubhu', 'shubhu@mail.com', 'shubham chaurasia', '', 0, '1a1dc91c907325c69271ddf0c944bc72', 1, 876787, '', '', 0, '', '', '', 'alumni', '2021-03-15'),
(10, 'krrish', 'krrish@mail.com', 'krrish', '', 0, 'b798444594e68944b787906ae6ebfe1f', 0, 98767987, 'BE', 'CMPn', 2021, '', '', '', 'alumni', '2021-03-15'),
(11, 'manju', 'manju@mail.com', 'manju', '', 0, '86f9ab6653b3b0151eef76b46ba2f9a5', 0, 12334225, 'be', 'cmpn', 2014, '', '', '', 'alumni', '2021-03-15'),
(12, 'rajkamal', 'rajkamal@mail.com', 'rajkamal', '', 0, '1a1dc91c907325c69271ddf0c944bc72', 0, 21233, 'BE', 'cmpn', 2020, '', '', '', 'alumni', '2021-03-15'),
(16, 'kartavya', 'kartu@mail.com', 'kartavya jani', '', 7999919331, '145c97437bf81a2f991542bf0da3824d', 1, 6132346, 'be', 'cmpn', 0, '', '', '', 'alumni', '2021-03-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `chirps`
--
ALTER TABLE `chirps`
  ADD PRIMARY KEY (`chirp_id`);

--
-- Indexes for table `ern_no`
--
ALTER TABLE `ern_no`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chirps`
--
ALTER TABLE `chirps`
  MODIFY `chirp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ern_no`
--
ALTER TABLE `ern_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
