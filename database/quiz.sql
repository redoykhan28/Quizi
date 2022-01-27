-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `addques`
--

CREATE TABLE `addques` (
  `sl` int(11) NOT NULL,
  `question_no` varchar(20) NOT NULL,
  `question` varchar(255) NOT NULL,
  `op1` varchar(100) NOT NULL,
  `op2` varchar(100) NOT NULL,
  `op3` varchar(100) NOT NULL,
  `op4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addques`
--

INSERT INTO `addques` (`sl`, `question_no`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`, `catagory`) VALUES
(19, '1', '2+5', '4', '2', '7', '1', '7', 'php'),
(27, '2', 'what is html stand for?', 'hyper text marckup language', 'hyper text makeup language', 'high text markup language', 'none of them', 'hyper text marckup language', 'php'),
(34, '3', 'what is html ?', 'hyper text markup language', '', '', '', '', 'php'),
(35, '4', 'what is html stand for?', 'hyper', '', '', '', '', 'php'),
(42, '5', 'what is html stand for?', 'hyper text marckup language', 'hyper text makeup language', 'high text markup language', 'none of them', 'hyper text marckup language', 'php'),
(45, '1', 'what is html stand for?', 'sofa', '16', 'desk', 'none of them', 'hyper text marckup language', 'chatal sisir');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'admin', 'admin', '2021-07-08 00:49:04'),
(2, 'rk', '123', '2021-07-08 01:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `time`) VALUES
(1, 'php', 10),
(2, 'html', 20),
(3, 'java', 20),
(5, 'c++', 20),
(6, 'chatal sisir', 30);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`, `date`, `email`, `image`) VALUES
(27, 'Redoy khan', '$2y$10$O9UiTZk1pPlJmEFjb0FveuagSrOlKLoBM3mLEoxc4scXoLp9GyqgO', '2021-07-13 23:56:07', 'redoyk2015@gmail.com', '199235653_2894711400767905_2204488886233039200_n.jpg'),
(32, 'admin', '$2y$10$fGHri6uGuV5IUfUebSi4BefNtrHIpgcZkHjug/h685vp1w.jeTDmu', '2021-07-17 00:44:48', 'sdss@gmail.com', 'thief-2.png'),
(33, 'rehankhan', '$2y$10$.Tp9LEBe8aom0HCUyMTSW.ZtwgDsmKrl5iE7XEkEFAfuA1iWgpcjW', '2021-08-01 01:03:25', 'faag@gmail.com', 'WIN_20201127_22_33_15_Pro.jpg'),
(34, 'tanbintabassum', '$2y$10$c/0jlEOK3/PvmTG.Rloqmu5N5CWIOBes9WorHZMTfheqdXDJMuH2y', '2021-08-01 01:04:14', 'ad@gmail.com', 'c1e56e598b9924f1c268cffbb0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(200) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `password`, `date`, `email`, `image`) VALUES
(19, 'admin', '$2y$10$xHy1pI6PqRSThcHGH3DaJeiR.boeToKYJY6WEfqvr4CjoztoAv70.', '2021-07-12 17:02:07', 'ad1@gmail.com', 'spider_man_2099_minimalist__mobile_wallpaper_by_mattprz_dd8l2pr.png'),
(28, 'sisir1', '$2y$10$Mr74vCreiyIdOlvSbdGhe.WHm.KJOkQ862msEXGfKpSIaAkaASiAe', '2021-07-12 21:12:01', 'faag@gmail.com', 'icons8-admin-settings-male-100.png'),
(30, 'salam 1', '$2y$10$O7hW8vy99Vr1y1Ekl5CCtOrG5nIhyiWYG7ZgeTG/6GsVwsN4TZkd6', '2021-07-12 23:43:55', 'redoyk2015@gmail.com', 'icons8-admin-settings-male-100.png'),
(34, 'rk khan1', '$2y$10$MdkwbwcKZqVt/6daGBivxeEKBbKla4oSFYph4KNiYdLut/db8cWUC', '2021-07-14 23:42:15', 'sdss@gmail.com', 'IMG_4224.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addques`
--
ALTER TABLE `addques`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addques`
--
ALTER TABLE `addques`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
