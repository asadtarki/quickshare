-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 11:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL,
  `files_name` varchar(150) NOT NULL,
  `new_filename` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `message`, `files_name`, `new_filename`) VALUES
(1, '', '', 'my.js', 'my.js1646447658'),
(2, '', '', 'confettibutton.html', 'confettibutton.html1646447682'),
(3, '', '', 'app.js', 'app.js1646447858'),
(4, '', '', 'vrc.js', 'vrc.js1646447913'),
(5, '', '', 'vrc.js', 'vrc.js1646448073'),
(6, '', '', 'lrc.js', 'lrc.js1646449682'),
(7, '', '', 'fatima.zip', 'fatima.zip1646449854'),
(8, '', '', 'assig4.zip', 'assig4.zip1646449973'),
(9, '', '', 'practical.html', 'practical.html1646450062'),
(10, '', '', 'practical.html', 'practical.html1646450122'),
(11, '', '', 's2.png', 's2.png1646452059'),
(12, '', '', 's2.png', 's2.png1646452818'),
(13, '', '', 'assig4.zip', 'assig4.zip1646453336'),
(14, '', '', 'assig4.zip', 'assig4.zip1646473320'),
(15, '', '', 'practical.html', '1646473438practical.html'),
(16, '', '', '1.png', '16464737881.png'),
(17, '', '', 's4.png', 's4.png1646473955'),
(18, 'hello', '', 's6.png', 's6.png1646474075'),
(19, '', '', 'gallery.html', 'gallery.html1646474116');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
