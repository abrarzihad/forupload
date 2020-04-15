-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 03:28 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regformcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `university` text NOT NULL,
  `hscbatch` int(25) NOT NULL,
  `department` text NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`id`, `user_id`, `university`, `hscbatch`, `department`, `question`, `answer`) VALUES
(6, 0, 'buet', 1, 'csedaw', 'fxdgfdgdfgfdgdfg', 'uygday'),
(21, 0, 'du', 26, 'stat', 'who r u?', ''),
(22, 0, 'buet', 26, 'cse', 'nm,nm,', ''),
(23, 0, 'buet', 25, 'cse', 'hjkhk', ''),
(25, 0, 'buet', 2020, 'cse', 'test', 'brooooooooo'),
(26, 1, 'buet', 2020, 'cse', 'test', ''),
(27, 1, 'buet', 0, 'cse', 'what is your name?', 'hsdkj'),
(28, 1, 'buet', 22, 'cse', 'is it good?', ''),
(29, 1, 'buet', 77, 'cse', 'are u an idiot?', ''),
(32, 30, 'buet', 0, 'cse', 'uygy', ''),
(33, 30, 'buet', 0, 'cse', 'trfyjsdf', ''),
(42, 30, 'buet', 0, 'cse', 'sdgszgd', '');

-- --------------------------------------------------------

--
-- Table structure for table `regtable`
--

CREATE TABLE `regtable` (
  `ID` int(11) NOT NULL,
  `type` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `university` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `hscbatch` int(25) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `updated_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regtable`
--

INSERT INTO `regtable` (`ID`, `type`, `username`, `password`, `email`, `university`, `department`, `hscbatch`, `image`, `created_at`, `updated_at`) VALUES
(22, NULL, 'tfhtf', 'trdd', NULL, NULL, NULL, NULL, '', '2020-04-10 12:15:54.13222', '2020-04-10 12:15:54.13222'),
(23, 'Student', 'rtdjgy', 'ytdtdf56565', 'tanvirmahmud.nabil1661@gmail.com', 'buet', 'cse', 51464, '', '2020-04-10 12:17:21.81485', '2020-04-10 12:17:21.81485'),
(25, 'Student', 'drtdf', 'e99a18c428cb38d5f260853678922e03', 'yiuy@gff', 'buet', 'cse', 54521, '', '2020-04-10 12:19:15.35657', '2020-04-10 12:19:15.35657'),
(26, 'Student', 'aesdxfdtfd', 'e66a859823f19119fab33d845d0bbc95', 'yiuy@gffyry5r', 'buet', 'cse', 54521, '', '2020-04-10 12:20:29.10875', '2020-04-10 12:20:29.10875'),
(27, 'Student', 'abcde', 'e99a18c428cb38d5f260853678922e03', 'abc@gmail.com', 'buet', 'cse', 2019, '', '2020-04-10 12:23:13.68333', '2020-04-10 12:23:13.68333'),
(28, 'Student', 'tanvir', '31b9e0f8d37656b8039a1bcf1c81ff71', 'tanvir.nabil@gmail.com', 'buet', 'ipe', 2019, '', '2020-04-10 12:48:24.28687', '2020-04-10 12:48:24.28687'),
(29, 'Student', 'zihad', '9f71a15fc089beeff6d0d75cd701f80c', 'abrar.zihad@gmail.com', 'du', 'stat', 2019, '', '2020-04-10 12:52:32.46853', '2020-04-10 12:52:32.46853'),
(30, 'Student', 'zihad abrar', '5db85fe4d7c285f5b49749b7a411daf6', 'abcd@gmail.com', 'buet', 'cse', 2019, '', '2020-04-10 13:30:08.61061', '2020-04-10 13:30:08.61061'),
(31, 'Alumni', 'aliazam', 'd377fef9d11af0498dfd10d774e3f4a8', 'aliazam@gmail.com', 'buet', 'cse', 69, '', '2020-04-10 13:43:22.09179', '2020-04-10 13:43:22.09179'),
(32, 'Alumni', 'zihadasds@asd', 'fa988191caadaedbd2f80c8dc3c4bd5f', 'zihadasds@asd', 'buet', 'cse', 2019, '', '2020-04-15 11:50:15.17159', '2020-04-15 11:50:15.17159'),
(37, 'Student', 'yti', 'e17ea3244194ddb6788e01ed34619c9f', 'kgft@ytfutf', 'buet', 'cse', 54854, '6271-Screenshot (5).png', '2020-04-15 12:13:14.70650', '2020-04-15 12:13:14.70650'),
(40, 'Student', 'awd', '77d23e24ba2bb45a9e57683eeec28893', 'wdrawef@gsrdg', 'buet', 'cse', 54654, '7858-Screenshot (4).png', '2020-04-15 12:16:59.58063', '2020-04-15 12:16:59.58063');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regtable`
--
ALTER TABLE `regtable`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `regtable`
--
ALTER TABLE `regtable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
