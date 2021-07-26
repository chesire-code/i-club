-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 09:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(11) NOT NULL,
  `author` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `author`, `message`) VALUES
(1, 'Braine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(2, 'Tony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(3, 'Braine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(4, 'Tony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(5, 'Braine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(6, 'Tony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(7, 'Braine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(8, 'Tony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(9, 'Braine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?'),
(10, 'Tony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero id qui dolores suscipit laborum totam, voluptatibus quia ratione dicta quam voluptatem a iste quas minus, in nam necessitatibus modi?');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `from`, `created`) VALUES
(27, 'Hello', 'Tony', '2020-11-20 20:16:20'),
(28, 'Hello', 'Braine', '2020-11-20 20:35:20'),
(29, 'Alex', 'Braine', '2020-11-20 20:35:23'),
(30, 'hi', 'Braine', '2020-11-20 20:35:31'),
(31, 'Braine', 'Braine', '2020-11-20 20:52:00'),
(32, 'he', 'Braine', '2020-11-20 21:13:10'),
(33, 'he', 'Braine', '2020-11-20 21:13:11'),
(34, 'hello', 'Braine', '2020-11-20 21:13:16'),
(35, 'he', 'Braine', '2020-11-20 21:14:13'),
(36, 'hello', 'Braine', '2020-11-20 21:14:16'),
(37, 'hello', 'Braine', '2020-11-20 21:15:46'),
(38, 'hello', 'Braine', '2020-11-20 21:15:48'),
(39, 'hello', 'Braine', '2020-11-20 21:15:50'),
(40, 'Whatsapp', 'Braine', '2020-11-21 06:28:20'),
(41, 'So what are you up to these days', 'Braine', '2020-12-15 07:16:19'),
(42, 'Nothing', 'Braine', '2021-03-28 06:54:27'),
(43, 'And', 'Braine', '2021-03-28 06:54:32'),
(44, 'Tony', 'Braine', '2021-03-28 06:54:36'),
(45, 'I should be your friend', 'Braine', '2021-03-28 06:54:44'),
(46, 'Then what?', 'Tony', '2021-03-28 06:55:00'),
(47, 'Nothing', 'Tony', '2021-03-28 06:55:03'),
(48, 'Troy', 'Tony', '2021-03-28 06:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `sname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `pwd` varchar(300) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `fname`, `sname`, `email`, `pwd`, `admin`) VALUES
(2, 'Braine', 'Lomoni', 'kapolonbraine@gmail.com', '$2y$10$idEDBAUzvcSu9HP99CnABO/YieIH08QX2XU4vZVlRruktEmAwjwtS', 0),
(3, 'tony', 'rodger', 'tony@20.com', '$2y$10$c3n4eHQ/hOWwzzdHFu2WbuvB0TMXhZEldZQwu9JtAq4XB.ToWjqe2', 0),
(4, 'Tony', 'Doe', 'tony@doe.com', '$2y$10$htADyFgkG0EovTC6Q18DP.z/RzFZcudow.RRFh1.g39XIuVllXIDe', 0),
(5, 'Braine', 'Lomoni', 'kapolonbraine@yahoo.com', '$2y$10$xchql5TS3D6Yb6NxIW4mduKV5snwaRWXjmWAk86DnvwcbA8CcuWNO', 0),
(6, 'Troy', 'Doe', 'troy@doe.com', '$2y$10$KizoPsqrHm1X7LUDIebZ3e3rbV474vsAHnv04ksUrgBDQwIopKdU2', 0),
(7, 'Caroline', 'Kemei', 'cheptoock@gmail.com', '$2y$10$5Zj5SN3DPZ6B5WKaBhEareYczCGoIhmWes.ZKV8kgpuUW5fiIdRaS', 1),
(8, 'Roblin', 'Mitei', 'roblinmitei04@gmail.com', '$2y$10$7QG2Byr0iAKV..QpWI1yOexLTOMGi2XoO65VqqnevISOor1igv0O2', 0),
(9, 'Alex', 'Doe', 'alex@doe.com', '$2y$10$Uzvmm/qCaIn2/VN4Gr6GwOt1N7YZ3GofHmxcL7MEZya8iPiZ.1XUy', 0),
(10, 'Fred', 'Doe', 'fred@doe.com', '$2y$10$2sobFtr3LGmpAQepT1C.uOudnUDfAq9uoyxSCCRhZOoprvgq5xyhq', 0),
(11, 'Braine', 'Lomoni', 'kapolonbraine@briomar.co.ke', '$2y$10$qfCI7aPKLcrlosw3L6kfVO99PcsYMuSj2Ys5k0p/ayLaT1dfbciEm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `task` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `performance` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `user`, `task`, `comment`, `performance`) VALUES
(1, 'Braine', 'Wash Clothes', 'The white shirts are even whiter', 'A'),
(4, 'Roblin', 'Cleaned Clothes', 'The clothes are clean', 'A'),
(11, 'Braine', 'Cleaned Clothes', 'The white shirts are whiter', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(300) NOT NULL,
  `usersEmail` varchar(300) NOT NULL,
  `usersUid` varchar(300) NOT NULL,
  `usersPwd` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Braine', 'doe@email.com', 'briomar20', '$2y$10$KWoZoKi7JaNxxhDQtncKluaiVCLftEk99Xfmrmg3OX9frzZzavEZu'),
(2, '<img src><script>alert(\"XSS\")</script></img>', 't@20.com', 'tt', '$2y$10$qabGOL3MsVSG2qi3iWqose7oeVmqAww/gqQhpDHCCIkreX7ZJvjJK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
